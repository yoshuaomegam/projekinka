@extends('adminlte::page')

{{-- resources/views/admin/dashboard.blade.php --}}

@push('css')

@push('js')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

<table class="table table-striped table-hover" id="user">
    <thead>
        <th>Nomor</th>
        <th>Unit</th>
        <th>Tanggal</th>
        <th>Waktu</th>
        <th>Jumlah</th>
        <th>Lokasi</th>
        <th colspan="3" class="text-center"><a href="/tambahmakanan" class="btn btn-primary">Tambah Data</a></th>
    </thead>
    <tbody>
        <?php $no=1; ?>
        @foreach($makanan as $key=>$value)
        <tr>
        <th>{{$no++}}</th>
        <th>{{$value->unit}}</th>
        <th>{{$value->tanggal}}</th>
        <th>{{$value->waktu}}</th>
        <th>{{$value->jumlah}}</th>
        <th>{{$value->lokasi}}</th>
        <th class="text-center">
        
            <a href="/editmakanan/{{$value->id}}" class="btn btn-primary">Edit Data</a>

        </th>
        <th class="text-center">
                <form action="/hapusmakanan/{{$value->id}}" method="POST">
                    <input type="submit" name="submit" value="hapus data" class="btn btn-primary">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    </form>
        </th>

        @endforeach
    </table>
    </tbody>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script>$(document).ready( function () {
        $('#user').DataTable();
    } );</script>
@stop

