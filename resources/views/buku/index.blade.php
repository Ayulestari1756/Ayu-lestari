<html>
<title>Buku</title>

<body>
    <h2 style="background:deeppink">List buku</h2>
    <hr>

    <a href="{{ URL ('buku/create') }}" style="color:white;background:blue"> Create buku </a>
    <table border="1px solid black" width="50%" cellpadding="5">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Qty</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($buku as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->title }}</td>
                <td>{{ $data->author }}</td>
                <td>{{ $data->qty}}</td>
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