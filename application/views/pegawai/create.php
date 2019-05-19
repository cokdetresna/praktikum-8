<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Pegawai
        <small>Tambah Data Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?= $this->session->flashdata('message'); ?>
      <!-- Small boxes (Stat box) -->
      <a href="<?php echo site_url('pegawai'); ?>"><button onclick="" class="btn btn-primary btn-linking"><i class="fa fa-chevron-left"></i> Kembali ke List Pegawai</button></a>
      <div class="row" style="margin-top: 8px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('pegawai/store'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="namaPegawai">Nama pegawai</label>
                  <input type="text" class="form-control" id="namaPegawai" placeholder="Masukkan nama..." name="namaPegawai">
                  <?php echo form_error('namaPegawai','<small class="text-danger">','</small>');  ?>
                </div>
                <div class="form-group">
                  <label for="emailPegawai">Email</label>
                  <input type="text" class="form-control" id="emailPegawai" placeholder="Masukkan email..." name="emailPegawai">
                  <?php echo form_error('emailPegawai','<small class="text-danger">','</small>');  ?>
                </div>
                <div class="form-group">
                  <label for="passwordPegawai">Password</label>
                  <input type="password" class="form-control" id="passwordPegawai" placeholder="Masukkan password..." name="passwordPegawai">
                  <?php echo form_error('passwordPegawai','<small class="text-danger">','</small>');  ?>
                </div>
                <div class="form-group">
                  <label for="alamatPegawai">Alamat</label>
                  <input type="text" class="form-control" id="alamatPegawai" placeholder="Masukkan alamat..." name="alamatPegawai">
                  <?php echo form_error('alamatPegawai','<small class="text-danger">','</small>');  ?>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Tambah Data Pegawai</button>
              </div>
            </form>
            
          </div>
          <!-- /.box -->
        </div>
      </div>


    </section>
    <!-- /.content -->
