<!-- Crm Field -->
<div class="form-group col-sm-6">
    {!! Form::label('CRM', 'CRM:') !!}
    {!! Form::number('CRM', null, ['class' => 'form-control']) !!}
</div>

<!-- Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nome', 'Nome:') !!}
    {!! Form::text('Nome', null, ['class' => 'form-control']) !!}
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

<!-- Especialidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Especialidade', 'Especialidade:') !!}
    {!! Form::text('Especialidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Cadastrar Médico', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('medicos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
