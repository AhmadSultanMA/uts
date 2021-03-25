@extends('layout.app')

@section('content')
    <div class="row">
        <div class="col-12 bg-white"></div>
        <div class="col-12 bg-white">
            <div class="card">
                <div class="card-header bg-primary">
                    <a href="{{url('/uts')}}">
                    <button class="btn btn-success float-left mr-2">
                        Back
                    </button>
                    </a>
                </div>
                <div class="card-body">
                    <form action="uts/upload/table" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="uploadData">Upload File</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <input type="submit" class="btn btn-primary float-right" value="Simpan Data">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection