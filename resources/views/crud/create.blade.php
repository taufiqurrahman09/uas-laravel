@extends('template')

@extends('content')
<h1>Tambah Data</h1>
<a href="/crud" class="btn btn-primary btn-sm-3">kembali</a>
<form action="/crud"methood="post">
    @csrf
    <div class="mb-3">
        <label for="">Nama</label>
        <input type="texs" class="form-control"name="nama">

    </div>
    <div class="mb-3">
        <label for="">Kelas</label>
        <input type="texs" class="form-control"name="kelas">
        
    </div>
    <div class="mb-3">
        <label for="">Nis</label>
        <input type="texs" class="form-control"name="nis">
        
    </div>
    <div class="mb-3">
        <label for="">Jenis Kelamin</label>
        <select name="jk"class="form-control">
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
            </select>
        
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <textarea name="alamat"class="form-control"rows="4"></textarea>
    </div>
    <div class="mb-3">
        <label for="">Hobi</label>
        <input type="text"class="form-control"name="Hobi">
    </div>
    <button class="btn btn-primary btn-sm" type="submit">simpan</button>
    
</form>
@endsection