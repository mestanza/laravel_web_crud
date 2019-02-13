@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Detail Siswa</h3>    
            </div>    
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <strong>Name siswa:</strong> {{$biodata->nameSiswa}}
                </div>
            </div>
            <div class="col-md-12">
                    <div class="form-group">
                        <strong>Alamat Siswa:</strong> {{$biodata->alamaSiswa}}
                    </div>
                </div>
            <div class="col-md-12">
                <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success" >Back</a>
            </div>
        </div>
    </div>
@endsection