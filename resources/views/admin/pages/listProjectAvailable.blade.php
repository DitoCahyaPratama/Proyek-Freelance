@extends('admin.layouts.admin')

@section('content')
<div class="panel panel-headline">
    <div class="panel-body">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Tambah Projek</button>
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
        <h3 class="panel-title">List Projek Tersedia</h3>    
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Projek</th>
                    <th>deskripsi</th>
                    <th>dateline</th>
                    <th>Gaji</th>
                    <th>status</th>
                    <th>Tanggal publish</th>
                    <th>Tanggal Kedaluarsa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
                @foreach($project as $projects)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{$projects->name}}</td>
                    <td>{{$projects->description}}</td>
                    <td>{{$projects->dateline}}</td>
                    <td>{{$projects->salary}}</td>
                    <td>{{$projects->status}}</td>
                    <td>{{$projects->date_publish}}</td>
                    <td>{{$projects->date_expired}}</td>
                    <td>
                        <form action="{{url('admin/project/delete',$projects->id)}}" method="POST">
                        {{-- <a class="btn btn-info" href="{{route('cerpen.show',$cerpens->id)}}">Detail</a>
                        <a class="btn btn-warning" href="{{route('cerpen.edit',$cerpens->id)}}">Edit</a> --}}
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus projek dengan nama {{$projects->name}}')">Hapus</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {{$project  ->links('pagination::bootstrap-4')}}
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
          <h4 class="modal-title">Tambah Projek Tersedia</h4>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('admin/project/create') }}">
                <div class="form-group">
                    <label for="email">Nama</label>
                    <input type="text" class="form-control" id="email" name="name">
                  </div>
                  <div class="form-group">
                    <label for="pwd">Deskripsi</label>
                    <input type="text" class="form-control" id="pwd" name="description">
                  </div>
                  <div class="form-group">
                    <label for="email">Dateline (hari)</label>
                    <input type="number" class="form-control" id="email" name="dateline">
                  </div>
                  <div class="form-group">
                    <label for="email">Salary</label>
                    <input type="number" class="form-control" id="email" name="salary">
                  </div>
                  {{-- <div class="form-group">
                    <label for="pwd">Deskripsi</label>
                    <input type="text" class="form-control" id="pwd" name="description">
                  </div> --}}
                  <div class="form-group">
                    <label for="email">Tanggal Selesai</label>
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