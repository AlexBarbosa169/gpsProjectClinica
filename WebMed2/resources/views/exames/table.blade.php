<table class="table table-responsive" id="exames-table">
    <thead>
        <tr>
            <th>Exame</th>
        <th>Descrição + Informações</th>
        <th>Valor</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($exames as $exame)
        <tr>
            <td>{!! $exame->nomeExame !!}</td>
            <td>{!! $exame->descricaoExame !!}</td>
            <td>{!! $exame->valor !!}</td>
            <td>
                {!! Form::open(['route' => ['exames.destroy', $exame->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('exames.show', [$exame->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('exames.edit', [$exame->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
