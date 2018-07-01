<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Form Edit Pengajuan Makanan</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <?php echo Form::model($makanan,['route'=>['update', $makanan->id],'method'=>'POST']); ?>

   <?php echo e(Form::label('title','Unit')); ?>

   <?php echo e(Form::text('unit', NULL, array('class'=>'form-control','required'=>'','maxlength'=>'225'))); ?>

  <br>
   <?php echo e(Form::label('title','Tanggal')); ?>

   <?php echo e(Form::date('tanggal', NULL, array('class'=>'form-control'))); ?>

   <br>
   <?php echo e(Form::label('title','Waktu')); ?>

   <?php echo e(Form::text('waktu', NULL, array('class'=>'form-control','required'=>'','maxlength'=>'225'))); ?>

   <br>
   <?php echo e(Form::label('title','Jumlah')); ?>

   <?php echo e(Form::number('jumlah', NULL, array('class'=>'form-control','required'=>'','maxlength'=>'225'))); ?>

 <br>
   <?php echo e(Form::label('title','Lokasi')); ?>

   <?php echo e(Form::text('lokasi', NULL, array('class'=>'form-control','required'=>'','maxlength'=>'225'))); ?>

<br>
<?php echo e(Form::submit('Edit Makanan',  array('class'=>'btn btn-success btn-lg btn-block'))); ?>

<?php echo Form::close(); ?>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>