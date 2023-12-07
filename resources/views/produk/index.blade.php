<html>
<title>Produk</title>

<body>
    <h2>List produk</h2>
    <hr>
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