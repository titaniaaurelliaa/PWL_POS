<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h1>Data User</h1>
        <a href="/user/tambah">+ Tambah User</a>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>username</th>
                <th>Nama</th>
                <th>ID Level Pengguna</th>
                <th>Kode Level</th>
                <th>Nama Level</th>
                <th>Aksi</th>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->user_id}}</td>
                <td>{{ $d->username}}</td>
                <td>{{ $d->nama}}</td>
                <td>{{ $d->level_id}}</td>
                <td>{{ $d->level->level_kode}}</td>
                <td>{{ $d->level->level_nama}}</td>
                <td><a href="/user/ubah/{{ $d->user_id}}">Ubah</a> | <a href="/user/hapus/{{ $d->user_id}}">Hapus</a></td>
            </tr>     
            @endforeach
        </table>
    </body>
</html>

{{-- <!DOCTYPE html>
<html>
<head>
    <title>Data User</title>
    <style>
        .container {
            border: 2px solid blue;
            width: 200px;
            padding: 20px;
            text-align: center;
        }
        .data-table {
            border: 1px solid black;
            width: 100%;
        }
        .data-table th, .data-table td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Data User</h2>
        <table class="data-table">
            <tr>
                <th>Jumlah Pengguna</th>
            </tr>
            <tr>
                <td>{{ $data }}</td>
            </tr>
        </table>
    </div>
</body>
</html> --}}