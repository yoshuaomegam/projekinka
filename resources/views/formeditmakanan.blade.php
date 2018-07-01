{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Form Edit Pengajuan Makanan</h1>
@stop

@section('content')

   {!! Form::model($makanan,['route'=>['update', $makanan->id],'method'=>'POST']) !!}
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
{{ Form::submit('Edit Makanan',  array('class'=>'btn btn-success btn-lg btn-block'))}}
{!! Form::close() !!}



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop