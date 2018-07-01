<?php $__env->startPush('css'); ?>

<?php $__env->startPush('js'); ?>

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Dashboard</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

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
        <?php $__currentLoopData = $makanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <th><?php echo e($no++); ?></th>
        <th><?php echo e($value->unit); ?></th>
        <th><?php echo e($value->tanggal); ?></th>
        <th><?php echo e($value->waktu); ?></th>
        <th><?php echo e($value->jumlah); ?></th>
        <th><?php echo e($value->lokasi); ?></th>
        <th class="text-center">
        
            <a href="/editmakanan/<?php echo e($value->id); ?>" class="btn btn-primary">Edit Data</a>

        </th>
        <th class="text-center">
                <form action="/hapusmakanan/<?php echo e($value->id); ?>" method="POST">
                    <input type="submit" name="submit" value="hapus data" class="btn btn-primary">
                    <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="_method" value="DELETE">
                    </form>
        </th>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </tbody>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
    <script>$(document).ready( function () {
        $('#user').DataTable();
    } );</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminlte::page', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>