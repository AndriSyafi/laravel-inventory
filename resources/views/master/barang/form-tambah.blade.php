form tambah barang
@extends('master/all')
@section('master-konten')

<form action="{{route ('master-barang-simpan')}}" method="POST"></form>
<div class="mb-3">
    <label for="html_kode" class="form-label">kode</label>
    <input type="text" class="form-control" id="html_kode" placeholder="Kode Barang">
  </div>
<div class="mb-3">
    <label for="html_nama" class="form-label">Nama</label>
    <input type="text" class="form-control" id="html_nama" placeholder="Nama Barang">
  </div>
  <div class="mb-3">
    <label for="html_deskripsi" class="form-label">Deskripsi</label>
    <textarea class="form-control" id="html_deskripsi" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fa fa-solid fa-save" me-1></i> Simpan
  </button>
@endsection
