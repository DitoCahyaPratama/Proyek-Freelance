@extends('admin.layouts.admin')

@section('content')

@if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>Sukses!!</strong> {{ $message }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">List Projek Selesai</h3>    
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Projek</th>
                    <th>Nama User</th>
                    <th>date Claim</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
                @foreach($projectDone as $projectDones)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{$projectDones->nameProject}}</td>
                    <td>{{$projectDones->nameUser}}</td>
                    <td>{{$projectDones->date_claim}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {{$projectDone->links('pagination::bootstrap-4')}}
        </div>
    </div>
</div>

@endsection