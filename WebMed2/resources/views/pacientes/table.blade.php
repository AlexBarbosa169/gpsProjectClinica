<table class="table table-responsive" id="pacientes-table">
    <thead>
        <tr>
            <th>CPF</th>
        <th>Nome</th>
        <th>Convenio</th>
        <th>Telefone</th>
        <th>Data Nascimento</th>
        <th>Tipo Sanguineo</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($pacientes as $paciente)
        <tr>
            <td>{!! $paciente->CPF !!}</td>
            <td>{!! $paciente->Nome !!}</td>
            <td>{!! $paciente->Convenio !!}</td>
            <td>{!! $paciente->Telefone !!}</td>
            <td>{!! $paciente->DataNasc !!}</td>
            <td>{!! $paciente->TipoSanguineo !!}</td>
            <td>
                {!! Form::open(['route' => ['pacientes.destroy', $paciente->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('pacientes.show', [$paciente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('pacientes.edit', [$paciente->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
