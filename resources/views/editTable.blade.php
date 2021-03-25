@extends('layout.app')

@section('content')
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Quick Example</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" action="/updateTable" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $data->id }}">
      <div class="card-body">
        <div class="form-group">
          <label for="namaKaryawan">Nama Karyawan</label>
          <input type="text" class="form-control" value="{{$data->namaKaryawan}}" id="namaKaryawan" placeholder="Enter name" name="namaKaryawan">
        </div>
        <div class="form-group">
            <label for="hadirMasuk">Hadir</label>
            <input type="number" max="999" value="{{$data->hadirMasuk}}" class="form-control" id="hadirMasuk" placeholder="Enter nilai" name="hadirMasuk">
        </div>
        <div class="form-group">
            <label for="izinMasuk">Izin</label>
            <input type="number" max="999" value="{{$data->izinMasuk}}" class="form-control" id="izinMasuk" placeholder="Enter nilai" name="izinMasuk">
        </div>
        <div class="form-group">
            <label for="bolosMasuk">Bolos</label>
            <input type="number" max="999" value="{{$data->telatMasuk}}" class="form-control" id="bolosMasuk" placeholder="Enter nilai" name="bolosMasuk">
        </div>
        <div class="form-group">
            <label for="telatMasuk">Telat</label>
            <input type="number" max="999" value="{{$data->bolosMasuk}}" class="form-control" id="telatMasuk" placeholder="Enter nilai" name="telatMasuk">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection