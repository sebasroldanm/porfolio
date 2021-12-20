<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $contentDoc->description }}</p>
</div>

<!-- Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    <p>{{ $contentDoc->code }}</p>
</div>

<!-- Language Field -->
<div class="form-group">
    {!! Form::label('language', 'Language:') !!}
    <p>{{ $contentDoc->language }}</p>
</div>

<!-- Documentation Id Field -->
<div class="form-group">
    {!! Form::label('documentation_id', 'Documentation Id:') !!}
    <p>{{ $contentDoc->documentation_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $contentDoc->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $contentDoc->updated_at }}</p>
</div>

