@extends('admin.layouts.admin')

@section('content')
<div class="panel panel-headline">
    <div class="panel-body">
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Tambah Testimoni</button>
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
        <h3 class="panel-title">List Testimonial</h3>    
    </div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama User</th>
                    <th>description</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
                @foreach($testimoni as $testimonis)
                <tr>
                    <td>{{ $no++}}</td>
                    <td>{{$testimonis->name}}</td>
                    <td>{{$testimonis->description}}</td>
                    <td>
                        <form action="{{url('admin/testimoni/delete',$testimonis->idTestimonial)}}" method="POST">
                        {{-- <a class="btn btn-info" href="{{route('cerpen.show',$cerpens->id)}}">Detail</a>
                        <a class="btn btn-warning" href="{{route('cerpen.edit',$cerpens->id)}}">Edit</a> --}}
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Hapus testimoni user {{$testimonis->name}}')">Hapus</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {{$testimoni  ->links('pagination::bootstrap-4')}}
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
          <h4 class="modal-title">Tambah Testimoni</h4>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('admin/testimoni/create') }}">
                <div class="form-group">
                    <label for="email">Nama User</label>
                    <select name="id_user" class="form-control">
                        @foreach ($user as $users)
                          <option value="{{$users->id}}">{{$users->name}}</option>    
                        @endforeach
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="pwd">Deskripsi</label>
                    <input type="text" class="form-control" id="pwd" name="description">
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