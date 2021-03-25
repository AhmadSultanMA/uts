@extends('layout.app')

@section('content')
    <div class="card">
      <div class="card-header justify-content-center align-items-center">
        <h4>UTS</h4>
        <a href="upload"><button class="btn btn-default">Add File</button></a>
        <a href="addTable"><button class="btn btn-default">Add Data</button></a>
        <a href="uts/export/xlsx"><button class="btn btn-default">Download XLSX</button></a>
        <a href="uts/export/csv"><button class="btn btn-default">Download CSV</button></a>
      <a href="uts/export/pdf"><button class="btn btn-default">Download PDF</button></a>
        <div class="card-body">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">Nama Karyawan</th>
                <th scope="col">Hadir</th>
                <th scope="col">Izin</th>
                <th scope="col">Bolos</th>
                <th scope="col">Telat</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
              <tr>
                <td>{{$item->namaKaryawan}}</td>
                <td>{{$item->hadirMasuk}}</td>
                <td>{{$item->izinMasuk}}</td>
                <td>{{$item->bolosMasuk}}</td>
                <td>{{$item->telatMasuk}}</td>
                <td>{{$item->bolosMasuk + $item->telatMasuk < 3 || $item->hadirMasuk <60  ? "Karyawan Baik" : "Karyawan Buruk"}} </td>
                <td>
                  <a href="editTable\{{ $item->id }}"><button class="btn btn-success">Edit</button></a>
                  <a href="deleteTable\{{ $item->id }}"><button class="btn btn-danger">Delete</button></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection