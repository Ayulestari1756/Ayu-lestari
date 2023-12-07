<html>
<title>Create buku</title>

<body>
    <h2>Create buku</h2>
    <hr>
    <form action ="{{ URL ('buku') }}" method="POST" enctye="multipart/form-data">
        @csrf
        <table>

            <tr>
                <th>Judul</th>
                <td>
                    <input type="text" name='title' required>
                </td>
            </tr>

            <tr>
                <th>Pengarang</th>
                <td>
                    <input type="text" name='author' required>
                </td>
            </tr>


            <tr>
                <th>Qty</th>
                <td>
                    <input type="number" name='qty' required>
                </td>
            </tr>
        </table>
        <button type="submit">Save</button>
    </form>
</body>
</html>