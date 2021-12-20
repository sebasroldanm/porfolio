<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Code Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::textarea('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Language Field -->
<div class="form-group col-sm-6">
    {!! Form::label('language', 'Language:') !!}
    {!! Form::select('language', ['Seleleccione...','php', 'js', 'ts', 'SQL', 'PgSQL', 'GraphQL'], 0, ['class' => 'form-control']) !!}
</div>

<!-- Documentation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('documentation_id', 'Documentation Id:') !!}
    {!! Form::select('documentation_id', $documentation, null, ['class' => 'form-control', 'disabled' => true]) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contentDocs.index') }}" class="btn btn-light">Cancel</a>
</div>
