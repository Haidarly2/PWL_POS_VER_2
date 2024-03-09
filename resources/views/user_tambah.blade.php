<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data user</title>
</head>
<body>
    <h1>Form Tambah data user</h1>
    <form action="/user/tambah_simpan" method="POST">

        {{ csrf_field() }}
        <label for="">Username</label>
        <input type="text" name="username" id="" placeholder="Masukan username">
        <br>
        <label for="">Nama</label>
        <input type="text" name="nama" id="" placeholder="Masukan nama">
        <br>
        <label for="">Password</label>
        <input type="password" name="password" id="" placeholder="Masukkan password">
        <br>
        <label for="">Level ID</label>
        <input type="number" name="level_id" id="" placeholder="Masukan ID level">
        <br>
        <br>
        <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>
</html>