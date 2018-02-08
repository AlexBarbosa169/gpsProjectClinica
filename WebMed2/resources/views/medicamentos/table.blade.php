<table class="table table-responsive" id="medicamentos-table">
    <thead>
        <tr>
            <th>Nome</th>
        <th>Descricao</th>
        <th>Fabricante</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($medicamentos as $medicamento)
        <tr>
            <td>{!! $medicamento->Nome !!}</td>
            <td>{!! $medicamento->Descricao !!}</td>
            <td>{!! $medicamento->fabricante !!}</td>
            <td>
                {!! Form::open(['route' => ['medicamentos.destroy', $medicamento->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('medicamentos.show', [$medicamento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('medicamentos.edit', [$medicamento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>