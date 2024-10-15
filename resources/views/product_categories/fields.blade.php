<!-- Name Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::textarea('name', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Short Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('short_description', 'Short Description:') !!}
    {!! Form::textarea('short_description', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Other Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('other', 'Other:') !!}
    {!! Form::textarea('other', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>