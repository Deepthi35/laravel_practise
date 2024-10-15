<?php

namespace App\Repositories;

use App\Models\ProductCategory;
use App\Repositories\BaseRepository;

class ProductCategoryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'name',
        'short_description',
        'url',
        'other'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return ProductCategory::class;
    }
}
