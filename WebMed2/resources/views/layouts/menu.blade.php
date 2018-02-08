<li class="{{ Request::is('pacientes*') ? 'active' : '' }}">
    <a href="{!! route('pacientes.index') !!}"><i class="fa fa-edit"></i><span>Pacientes</span></a>
</li>

<li class="{{ Request::is('medicos*') ? 'active' : '' }}">
    <a href="{!! route('medicos.index') !!}"><i class="fa fa-edit"></i><span>Medicos</span></a>
</li>

<li class="{{ Request::is('consultas*') ? 'active' : '' }}">
    <a href="{!! route('consultas.index') !!}"><i class="fa fa-edit"></i><span>Consultas</span></a>
</li>

<li class="{{ Request::is('exames*') ? 'active' : '' }}">
    <a href="{!! route('exames.index') !!}"><i class="fa fa-edit"></i><span>Exames</span></a>
</li>

<li class="{{ Request::is('medicamentos*') ? 'active' : '' }}">
    <a href="{!! route('medicamentos.index') !!}"><i class="fa fa-edit"></i><span>Medicamentos</span></a>
</li>

<li class="{{ Request::is('prescricaos*') ? 'active' : '' }}">
    <a href="{!! route('prescricaos.index') !!}"><i class="fa fa-edit"></i><span>Prescrições</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Usuários</span></a>
</li>
