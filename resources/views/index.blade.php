@extends('template')

@section('content')
     <h1>crud sederhana laravel</h1>
     <a href="/crud/create" class="btn btn-primary btn-sm mb-3">Tambah Data</a>
     <table class="table table-bordered"> 
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Jk</th>
          <th>Aksi</th>
        </tr>
      </thead>
       <tbody>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <button class="btn btn-primary btn-sm">Detail</button>
            </button class="btn btn-primary btn-sm">Edit<button>
            <button class="btn btn-primary btn-sm">Delete</button>
          </td>
        </tr>
       </tbody>
     </table>
   