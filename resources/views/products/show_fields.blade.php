<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $product->name }}</p>
</div>

<!-- Image Url Field -->
<div class="col-sm-12">
    {!! Form::label('image_url', 'Image Url:') !!}
    <p>{{ $product->image_url }}</p>
</div>

<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $product->image }}</p>
</div>

<!-- Img Alt Text Field -->
<div class="col-sm-12">
    {!! Form::label('img_alt_text', 'Img Alt Text:') !!}
    <p>{{ $product->img_alt_text }}</p>
</div>

<!-- Url Field -->
<div class="col-sm-12">
    {!! Form::label('url', 'Url:') !!}
    <p>{{ $product->url }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $product->price }}</p>
</div>

<!-- Short Description Field -->
<div class="col-sm-12">
    {!! Form::label('short_description', 'Short Description:') !!}
    <p>{{ $product->short_description }}</p>
</div>

<!-- Long Description Field -->
<div class="col-sm-12">
    {!! Form::label('long_description', 'Long Description:') !!}
    <p>{{ $product->long_description }}</p>
</div>

