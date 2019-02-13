@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>New Biodata Siswa</h3>

            </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>problema</strong><br>
                <ul>
                    @foreach ($errors as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            
        @endif

        <form action="{{route('biodata.store')}}" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-12">
                    <strong>name siswa</strong>
                    <input type="text" name="nameSiswa" class="form-control" placeholder="Name Siswa">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <strong>alamat siswa</strong>
                    <textarea class="form-control" name="alamaSiswa" cols="30" rows="10"></textarea>
                </div>
            </div>

            <div class="col-md-12">
            <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection