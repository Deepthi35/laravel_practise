<?php


if (!function_exists("uniqueCode")) {
    function uniqueCode($limit)
    {
        return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
    }
}
if (!function_exists("getOnlyNameFromImage")) {
    function getOnlyNameFromImage($image)
    {
        $name = $image->getClientOriginalName();
        $filename = pathinfo($name, PATHINFO_FILENAME);
        return str_replace(' ', '-', $filename);
    }
}

if (!function_exists("uploadImage")) {
    function uploadImage($image, $path)
    {
        if ($image) {
            $fileName = getOnlyNameFromImage($image) . '_' . uniqueCode(9) . '.' . $image->extension();
            $filePath = 'blind_school_backend/' . $path . $fileName;
            try {
                // Ensure directory structure
                if (Storage::disk('s3')->put($filePath, file_get_contents($image), 'public')) {
                    return $fileName;
                } else {
                    throw new \Exception('Failed to upload the file to S3.');
                }
            } catch (\Exception $e) {
                Log::error('Image upload error: ' . $e->getMessage());
                return null; // Or return a default value or handle it as needed
            }
        } else {
            Log::warning('No image provided for upload.');
            return null; // Or return a default value or handle it as needed
        }
    }
}


if (!function_exists("removeImage")) {
    function removeImage($image, $path)
    {
        if (!empty($image)) {
            $filePath = 'blind_school_backend/' . trim($path) . $image;
            try {
                // Check if the file exists in S3 before attempting to delete
                if (Storage::disk('s3')->exists($filePath)) {
                    Storage::disk('s3')->delete($filePath);
                    Log::info("File deleted: " . $filePath);
                } else {
                    Log::warning("File not found: " . $filePath);
                }
            } catch (\Exception $e) {
                Log::error('File deletion error: ' . $e->getMessage());
            }
        } else {
            Log::warning('No image specified for deletion.');
        }
    }
}