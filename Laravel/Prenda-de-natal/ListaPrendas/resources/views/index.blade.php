<h1>Gestão de Prendas</h1>
<a href="{{ route('prendas.create') }}">Nova Prenda</a>
<table>
    <tr>
        <th>Nome da Prenda</th>
        <th>Valor Previsto</th>
        <th>Nome da Pessoa</th>
        <th>Valor Gasto</th>
        <th>Diferença</th>
        <th>Ações</th>
    </tr>
    @foreach ($prendas as $prenda)
    <tr>
        <td>{{ $prenda->namePrenda }}</td>
        <td>{{ $prenda->valor_prev }}</td>
        <td>{{ $prenda->user->name }}</td>
        <td>{{ $prenda->valorGasto ?? 'N/A' }}</td>
        <td>{{ $prenda->diferenca_valor ?? 'N/A' }}</td>
        <td>
            <a href="{{ route('prendas.show', $prenda) }}">Ver</a>
            <form action="{{ route('prendas.destroy', $prenda) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Apagar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
