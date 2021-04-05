@extends('admin.layouts.admin')

@section('content')

<div class="panel panel-headline">
    <div class="panel-heading">
        <h3 class="panel-title">Dashboard</h3>    
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="metric" style="background-color: #1746E0;color:white;font-weight: bold">
                        <span class="number">{{$countUser}}</span>
                        <span class="title">Pengguna</span>
                </div>
            </div>
            <div class="col-md-3" >
                <div class="metric" style="background-color: #7C69EF;color:white;font-weight: bold">
                        <span class="number">{{$countTesti}}</span>
                        <span class="title">Testimoni</span>
                </div>
            </div>
            <div class="col-md-3" >
                <div class="metric" style="background-color: #FAD776;color:white;font-weight: bold">
                        <span class="number">{{$countJob}}</span>
                        <span class="title">Pekerjaan</span>
                </div>
            </div>
            <div class="col-md-3" >
                <div class="metric" style="background-color: #42BA96;color:white;font-weight: bold">
                        <span class="number">{{$countProject}}</span>
                        <span class="title">Projek tersedia</span>
                </div>
            </div>
            <div class="col-md-3" >
                <div class="metric" style="background-color: #DF4759;color:white;font-weight: bold">
                        <span class="number">{{$countProjectClaim}}</span>
                        <span class="title">Projek Dikerjakan</span>
                </div>
            </div>
            <div class="col-md-3" >
                <div class="metric" style="background-color: #7C69EF;color:white;font-weight: bold">
                        <span class="number">{{$countProjectDone}}</span>
                        <span class="title">Projek Selesai</span>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection