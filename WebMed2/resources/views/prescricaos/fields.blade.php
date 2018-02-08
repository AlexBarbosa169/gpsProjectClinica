<!-- Idconsulta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idConsulta', 'Código Consulta:') !!}
    {!! Form::number('idConsulta', null, ['class' => 'form-control']) !!}
</div>

<!-- Idmedicamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idMedicamento', 'Código Medicamento:') !!}
    {!! Form::number('idMedicamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Idexame Field -->
<div class="form-group col-sm-6">
    {!! Form::label('idExame', 'Código Exame:') !!}
    {!! Form::number('idExame', null, ['class' => 'form-control']) !!}
</div>

<!-- Comentario Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Comentario', 'Comentario (Informado pelo médico):') !!}
    {!! Form::textarea('Comentario', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Gerar Prescrição', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('prescricaos.index') !!}" class="btn btn-default">Cancelar</a>
</div>
