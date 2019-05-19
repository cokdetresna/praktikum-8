<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Pegawai
        <small>Edit Data Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <?= $this->session->flashdata('message'); ?>
      <a href="<?php echo site_url('pegawai'); ?>"><button onclick="" class="btn btn-primary btn-linking"><i class="fa fa-chevron-left"></i> Kembali ke List Pegawai</button></a>
      <div class="row" style="margin-top: 8px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('pegawai/' . $dataPetugas['Kode_Petugas'] . '/update'); ?>" method="post" >
              <div class="box-body">
                <div class="form-group">
                  <label for="namaPegawai">Nama pegawai</label>
                  <input type="text" name="namaPegawai" class="form-control" id="namaPegawai" placeholder="Masukkan nama pegawai" value="<?php echo $dataPetugas['Nama']; ?>">
                </div>
                <div class="form-group">
                  <label for="alamatPegawai">Alamat</label>
                  <input type="text" name="alamatPegawai" class="form-control" id="alamatPegawai" placeholder="Masukkan alamat" value="<?php echo $dataPetugas['Alamat']; ?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Update Data Pegawai</button>
              </div>
            </form>
            
          </div>
          <!-- /.box -->
        </div>
      </div>


    </section>
    <!-- /.content -->