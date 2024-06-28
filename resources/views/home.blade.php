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
                <div>
                    <h3>Data Santri</h3>
                </div>
                <div class="card-tools d-flex justify-content-end">
                    <a href="{{ route('create') }}" class="btn btn-success ">Tambah Data <i class="fas fa-plus-square"></i></a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($dtSantri as $item)
                    <tr>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->alamat}}</td>
                        <td>{{$item->tgllhr}}</td>
                        <td>
                            <a href="{{route('update',$item->id)}}">update</a> | <a href="{{route('delete-santri',$item->id)}}">hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="card-footer">
                {{ $dtSantri->links() }}
            </div>
        </div><!-- .animated -->
    </div><!-- .content -->

    @include('sweetalert::alert')

@endsection