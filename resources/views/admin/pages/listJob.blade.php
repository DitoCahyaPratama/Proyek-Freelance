@extends('admin.layouts.admin')

@section('content')
<div class="panel panel-headline">
    <div class="panel-body">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Tambah Pekerjaan</button>
    </div>
</div>

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
        <h3 class="panel-title">List Pekerjaan</h3>    
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Dipublish Oleh</th>
                    <th>Nama Pekerjaan</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Rilis</th>
                    <th>Tanggal Kadaluarsa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
                @foreach($job as $jobs)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{$jobs->nameUser}}</td>
                    <td>{{$jobs->name}}</td>
                    <td>{{$jobs->description}}</td>
                    <td>{{$jobs->date_publish}}</td>
                    <td>{{$jobs->date_expired}}</td>
                    <td>
                        <form action="{{url('admin/job/delete',$jobs->id)}}" method="POST">
                        {{-- <a class="btn btn-info" href="{{route('cerpen.show',$cerpens->id)}}">Detail</a>
                        <a class="btn btn-warning" href="{{route('cerpen.edit',$cerpens->id)}}">Edit</a> --}}
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus pekerjaan dengan nama {{$jobs->name}}')">Hapus</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {{$job->links('pagination::bootstrap-4')}}
        </div>
    </div>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Pekerjaan</h4>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('admin/job/create') }}">
                <div class="form-group">
                    <label for="email">Nama</label>
                    <input type="text" class="form-control" id="email" name="name">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Deskripsi</label>
                    <input type="text" class="form-control" id="pwd" name="description">
                  </div>
                  <div class="form-group">
                    <label for="email">Tanggal Expired</label>
                    <input type="date" class="form-control" id="email" name="date_expired">
                  </div>
                  <button type="submit" class="btn btn-success">Tambah</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
@endsection