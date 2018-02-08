<!-- Nomeexame Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomeExame', 'Exame:') !!}
    {!! Form::text('nomeExame', null, ['class' => 'form-control']) !!}
</div>

<!-- Descricaoexame Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descricaoExame', 'Descrição e Informações (p/ Pacientes) :') !!}
    {!! Form::text('descricaoExame', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::number('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Cadastrar Exame', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('exames.index') !!}" class="btn btn-default">Cancelar</a>
</div>
