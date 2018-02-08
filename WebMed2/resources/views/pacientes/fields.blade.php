<!-- Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CPF', 'CPF:') !!}
    {!! Form::text('CPF', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nome', 'Nome:') !!}
    {!! Form::text('Nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Convenio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Convenio', 'Convenio:') !!}
    {!! Form::text('Convenio', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Telefone', 'Telefone:') !!}
    {!! Form::text('Telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Datanasc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DataNasc', 'Data Nasc:') !!}
    {!! Form::date('DataNasc', null, ['class' => 'form-control']) !!}
</div>

<!-- Tiposanguineo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('TipoSanguineo', 'Tipo Sanguineo: (Opcional)' ) !!}
    {!! Form::text('TipoSanguineo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Cadastrar Paciente ', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pacientes.index') !!}" class="btn btn-default">Cancelar</a>
</div>
