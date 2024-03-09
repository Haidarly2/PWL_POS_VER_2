<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data User</title>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">kembali</a>
    <br><br>

    <form action="/user/ubah_simpan/{{ $data->user_id }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label for="">Username</label>
        <input type="text" name="username" value="{{ $data->username }}" placeholder="Masukkan Username">
        <br>
        <label for="">Nama</label>
        <input type="text" name="nama" value="{{ $data->nama }}" placeholder="Masukkan Nama">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" value="{{ $data->password }}" placeholder="Masukkan Password">
        <br>
        <label for="">Level ID</label>
        <input type="number" name="level_id" value="{{ $data->level_id }}" placeholder="Masukkan Level ID">
        <br>
        <br>
        <input type="submit" class="btn btn-success" value="Ubah">
    </form>
</body>
</html>