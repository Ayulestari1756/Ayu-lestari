<html>
<title>Edit produk</title>

<body>
    <h2>Edit produk</h2>
    <hr>
    @if($errors->any())
    <ul>
          @foreach($errors->all () as $error)
             <li>{{ $error }}</li>
          @endforeach
    </ul>
   ; @endif
    <form action ="{{ URL ('produk') }}/{{  $produk->id }}" method="POST" enctye="multipart/form-data">
        @csrf
        @method('PUT')
        <table>

            <tr>
                <th>Produk</th>
                <td>
                    <input type="text" name='product' value ="{{ $produk->product }}"required>
                </td>
            </tr>

            <tr>
                <th>Price</th>
                <td>
                    <input type="number" name='price' value ="{{ $produk->price }}"required>
                </td>
            </tr>


            <tr>
                <th>Stockk</th>
                <td>
                    <input type="number" name='stock' value ="{{ $produk->stock }}"required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>
</html>