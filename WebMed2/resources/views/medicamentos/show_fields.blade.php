<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $medicamento->id !!}</p>
</div>

<!-- Nome Field -->
<div class="form-group">
    {!! Form::label('Nome', 'Medicamento:') !!}
    <p>{!! $medicamento->Nome !!}</p>
</div>

<!-- Descricao Field -->
<div class="form-group">
    {!! Form::label('Descricao', 'Descrição:') !!}
    <p>{!! $medicamento->Descricao !!}</p>
</div>

<!-- Fabricante Field -->
<div class="form-group">
    {!! Form::label('fabricante', 'Fabricante:') !!}
    <p>{!! $medicamento->fabricante !!}</p>
</div>
