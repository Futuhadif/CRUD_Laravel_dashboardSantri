@extends('main');

@section('title', 'dashboard')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active"><i class="Fa fa-dashboard"></i></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content mt-3">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h3>Ubah Data</h3>
            </div>
            
            <div class="card-body">
                <form action="{{ route('update-sukses',$dtSantriUpdate->id) }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Santri" value="{{$dtSantriUpdate->nama}}">
                    </div>

                    <div class="form-group">
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat Santri" >{{$dtSantriUpdate->alamat}}</textarea>
                    </div>

                    <div class="form-group">
                        <input type="date" id="tgllhr" name="tgllhr" class="form-control" value="{{$dtSantriUpdate->tgllhr}}">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                    
                    
                </form>
            </div>

        </div><!-- .animated -->
    </div><!-- .content -->
@endsection