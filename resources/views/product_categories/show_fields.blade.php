<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $productCategory->name }}</p>
</div>

<!-- Short Description Field -->
<div class="col-sm-12">
    {!! Form::label('short_description', 'Short Description:') !!}
    <p>{{ $productCategory->short_description }}</p>
</div>

<!-- Url Field -->
<div class="col-sm-12">
    {!! Form::label('url', 'Url:') !!}
    <p>{{ $productCategory->url }}</p>
</div>

<!-- Other Field -->
<div class="col-sm-12">
    {!! Form::label('other', 'Other:') !!}
    <p>{{ $productCategory->other }}</p>
</div>

