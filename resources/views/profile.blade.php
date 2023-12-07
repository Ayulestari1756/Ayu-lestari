<h1>Profile</h1>
<hr>
<table border='0'>
    @if($nama == 'ayu lestari')
    <tr>
        <td>Ini adalah ayu</td>
    </tr>
    @else
    <tr>
        <td>Nama tidak sesuai</td>
    @endif
</table>

    <hr>
    <h1>Ini adalah forelse</h1>
    <table border='3'>
        @forelse($teman ['nama'] as $teman)
        <tr>
            <td>Temanku :</td>
            <td>{{  $teman }}</td>
        </tr>
        @empty
        <tr>
            <td>Tidak ada teman</td>
        @endforelse
    </table>

    <h2>Ini adalah foreach</h2>
    <table border='5'>
        @foreach($nama_list ['nama'] as $teman)
        <tr>
            <td>Temanku :</td>
            <td>{{  $teman }}</td>
        </tr>
        @endforeach
    </table>


