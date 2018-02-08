<table class="table table-responsive" id="medicos-table">
    <thead>
        <tr>
        <th>CRM</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data Nascimento</th>
        <th>Especialidade</th>
            <th colspan="3">Ações</th>
        </tr>
    </thead>
    <tbody>
    @foreach($medicos as $medico)
        <tr>
            <td>{!! $medico->CRM !!}</td>
            <td>{!! $medico->Nome !!}</td>
            <td>{!! $medico->Telefone !!}</td>
            <td>{!! $medico->DataNasc !!}</td>
            <td>{!! $medico->Especialidade !!}</td>
            <td>
                {!! Form::open(['route' => ['medicos.destroy', $medico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('medicos.show', [$medico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('medicos.edit', [$medico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
