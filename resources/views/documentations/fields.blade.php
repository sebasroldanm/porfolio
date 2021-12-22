<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>

<!-- Slug_URL Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slug_url', 'Slug URL:') !!}
    {!! Form::text('slug_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Typedoc Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('typeDoc_id', 'Typedoc Id:') !!}
    {!! Form::select('typeDoc_id', $docsType, null, ['id' => 'typeDoc_id','class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('documentations.index') }}" class="btn btn-light">Cancel</a>
</div>


<script>
    $('#typeDoc_id').change(function () {
        var textChange = $('select[name="typeDoc_id"] option:selected').text().toLowerCase().replace(/[^\w ]+/g,'').replace(/ +/g,'-');
        $('#slug_url').val(textChange);
    })
    var text = $('select[name="typeDoc_id"] option:selected').text().toLowerCase().replace(/[^\w ]+/g,'').replace(/ +/g,'-');
    $('#slug_url').val(text);
</script>
