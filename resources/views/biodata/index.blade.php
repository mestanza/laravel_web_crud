@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>List Biodata Siswa</h3>
            </div>
            <div class="col-sm-2">
            <a href="{{route('biodata.create')}}" class="btn btn-sm btn-success">Create new biodata</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{$message}}</p>
            </div>
        @endif

        <table class="table table-hover table-sm">
            <tr>
                <th width='50px'><b>Number</b></th>
                <th width='300px'><b>Name Siswa</b></th>
                <th><b>Alamat Siswa</b></th>
                <th width='180px'><b>Action</b></th>
            </tr>

            @foreach ($biodatas as $biodata)
                <tr>
                    <td><b>{{++$i}}.</b></td>
                    <td>{{$biodata->nameSiswa}}</td>
                    <td>{{$biodata->alamaSiswa}}</td>
                    <td>
                        <form action="{{route('biodata.destroy', $biodata->id)}}" method="POST">
                            <a href="{{route('biodata.show', $biodata->id)}}" class="btn btn-sm btn-success">Show</a>
                            <a href="{{route('biodata.edit', $biodata->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            {{ csrf_field() }}
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    
                    </td>
                </tr>
            @endforeach
        </table>

        {!! $biodatas->links() !!}
    </div>

    
    
@endsection