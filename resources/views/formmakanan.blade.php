{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Form Pengajuan Makanan</h1>
@stop

@section('content')

   {!! Form::open(array('route'=>'simpan','data-parsley-validate'=>'')) !!}
   {{ Form::label('title','Unit') }}
   {{ Form::text('unit', NULL, array('class'=>'form-control','required'=>'','maxlength'=>'225'))}}
  <br>
   {{ Form::label('title','Tanggal') }}
   {{ Form::date('tanggal', NULL, array('class'=>'form-control'))}}
   <br>
   {{ Form::label('title','Waktu') }}
   {{ Form::text('waktu', NULL, array('class'=>'form-control','required'=>'','maxlength'=>'225'))}}
   <br>
   {{ Form::label('title','Jumlah') }}
   {{ Form::number('jumlah', NULL, array('class'=>'form-control','required'=>'','maxlength'=>'225'))}}
 <br>
   {{ Form::label('title','Lokasi') }}
   {{ Form::text('lokasi', NULL, array('class'=>'form-control','required'=>'','maxlength'=>'225'))}}
<br>
{{ Form::submit('Tambah Makanan',  array('class'=>'btn btn-success btn-lg btn-block'))}}
{!! Form::close() !!}



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop