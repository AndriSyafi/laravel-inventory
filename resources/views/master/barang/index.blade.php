@extends('master/all')
@section('master-konten')
<div class="row">
    <div class="col-12 text-end">
        <a href="{{route('master-barang-tambah')}}" class="btn btn-warning rounded-circle ">
            <i class="fa fa-solid fa-plus"></i>
        </a>
    </div>
</div>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">kode</th>
            <th scope="col">nama barang</th>
            <th scope="col">Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @php
                $i = 1;
            @endphp
            @foreach ( $barang as $b )
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$b->kode}}<br></td>
                <td>{{$b->nama}}<br></td>
                <td>{{$b->deskripsi}}</td>
            </tr>

            @endforeach
          </tr>

        </tbody>
      </table>

@endsection
