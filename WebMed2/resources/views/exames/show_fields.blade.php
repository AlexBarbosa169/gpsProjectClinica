<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $exame->id !!}</p>
</div>

<!-- Nomeexame Field -->
<div class="form-group">
    {!! Form::label('nomeExame', 'Exame:') !!}
    <p>{!! $exame->nomeExame !!}</p>
</div>

<!-- Descricaoexame Field -->
<div class="form-group">
    {!! Form::label('descricaoExame', 'Descrição + Informações :') !!}
    <p>{!! $exame->descricaoExame !!}</p>
</div>

<!-- Valor Field -->
<div class="form-group">
    {!! Form::label('valor', 'Valor:') !!}
    <p>{!! $exame->valor !!}</p>
</div>
