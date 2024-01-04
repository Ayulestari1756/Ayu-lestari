<html>
<title>Produk</title>

<body>
    <h2>List produk</h2>
    <hr>
    @if(session()->has ('succes'))
    <h3>{{ session('succes') }}</h3>
    @endif

    <a href="{{ URL ('produk/create') }}">Create Produk </a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Price</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produk as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->product }}</td>
                <td>{{ $data->price }}</td>
                <td>{{ $data->stock }}</td>
                <td>
                    <a href="{{ URL('produk') }}/{{ $data->id }}/edit">Edit</a>
                    <a href="{{ route ('produk.edit', $data->id) }}/edit">Edit</a>
                    <form onsubmit="return confirm ('Apakah anda yakin?');" 
                    action="{{ URL ('/produk') }}/{{ $data->id }}"
                    method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">List Produk kosong</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>

