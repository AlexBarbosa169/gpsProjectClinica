<!-- Nome Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Nome', 'Medicamento:') !!}
    {!! Form::textarea('Nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Descricao', 'Descrição:') !!}
    {!! Form::textarea('Descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Fabricante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fabricante', 'Fabricante:') !!}
    {!! Form::text('fabricante', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Inserir medicamento', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('medicamentos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
