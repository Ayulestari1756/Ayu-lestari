<html>
<title>Create produk</title>

<body>
    <h2>Create produk</h2>
    <hr>
    <form action ="{{ URL ('produk') }}" method="POST" enctye="multipart/form-data">
        @csrf
        <table>

            <tr>
                <th>Produk</th>
                <td>
                    <input type="text" name='product' required>
                </td>
            </tr>

            <tr>
                <th>Price</th>
                <td>
                    <input type="number" name='price' required>
                </td>
            </tr>


            <tr>
                <th>Produk</th>
                <td>
                    <input type="number" name='stock' required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>
</html>