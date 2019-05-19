<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Anggota
        <small>Tambah Data Anggota</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-group"></i> Home</a></li>
        <li class="active">Anggota</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?= $this->session->flashdata('message'); ?>
      <a href="<?php echo site_url('anggota') ?>"><button onclick="" class="btn btn-primary btn-linking"><i class="fa fa-chevron-left"></i> Kembali ke List Anggota</button></a>
      
      <div class="row" style="margin-top: 8px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Anggota</h3>
            </div>
            <!-- form start -->
            <form role="form" action="<?php echo base_url('anggota/store'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="namaAnggota">Nama anggota</label>
                  <input type="text" class="form-control" id="namaAnggota" placeholder="Masukkan nama anggota" name="namaAnggota">
                  <?php echo form_error('namaAnggota','<small class="text-danger">','</small>');  ?>
                </div>
                <div class="form-group">
                  <label for="programStudi">Program studi</label>
                  <input type="text" class="form-control" id="programStudi" placeholder="Masukkan program studi" name="programStudi">
                  <?php echo form_error('programStudi','<small class="text-danger">','</small>');  ?>
                </div>
                <div class="form-group">
                  <label for="jenjang">Jenjang</label>
                  <input type="text" class="form-control" id="jenjang" placeholder="Masukkan janjang" name="jenjang">
                  <?php echo form_error('jenjang','<small class="text-danger">','</small>');  ?>
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" class="form-control" id="alamat" placeholder="Masukkan alamat" name="alamat">
                  <?php echo form_error('alamat','<small class="text-danger">','</small>');  ?>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Tambah Data Anggota</button>
              </div>
            </form>
            
          </div>
          <!-- /.box -->
        </div>
      </div>


    </section>
    <!-- /.content -->