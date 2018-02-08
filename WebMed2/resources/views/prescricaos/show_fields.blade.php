<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $prescricao->id !!}</p>
</div>

<!-- Idconsulta Field -->
<div class="form-group">
    {!! Form::label('idConsulta', 'Código Consulta:') !!}
    <p>{!! $prescricao->idConsulta !!}</p>
</div>

<!-- Idmedicamento Field -->
<div class="form-group">
    {!! Form::label('idMedicamento', 'Código Medicamento:') !!}
    <p>{!! $prescricao->idMedicamento !!}</p>
</div>

<!-- Idexame Field -->
<div class="form-group">
    {!! Form::label('idExame', 'Código Exame:') !!}
    <p>{!! $prescricao->idExame !!}</p>
</div>

<!-- Comentario Field -->
<div class="form-group">
    {!! Form::label('Comentario', 'Comentario:') !!}
    <p>{!! $prescricao->Comentario !!}</p>
</div>
