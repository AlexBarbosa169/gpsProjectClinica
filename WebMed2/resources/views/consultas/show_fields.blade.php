<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $consulta->id !!}</p>
</div>

<!-- Dataconsulta Field -->
<div class="form-group">
    {!! Form::label('dataConsulta', 'Data Consulta:') !!}
    <p>{!! $consulta->dataConsulta !!}</p>
</div>

<!-- Idpaciente Field -->
<div class="form-group">
    {!! Form::label('idPaciente', 'Código Paciente:') !!}
    <p>{!! $consulta->idPaciente !!}</p>
</div>

<!-- Idmedico Field -->
<div class="form-group">
    {!! Form::label('idMedico', ' Código Medico:') !!}
    <p>{!! $consulta->idMedico !!}</p>
</div>

<!-- Descricaoconsulta Field -->
<div class="form-group">
    {!! Form::label('descricaoConsulta', 'Descrição Consulta:') !!}
    <p>{!! $consulta->descricaoConsulta !!}</p>
</div>
