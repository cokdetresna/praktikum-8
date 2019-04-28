<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Pegawai
        <small>List Data Pegawai</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user"></i> Home</a></li>
        <li class="active">Pegawai</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <a href="<?php echo site_url('pegawai/create'); ?>"><button onclick="" class="btn btn-success btn-linking">Tambah Data Pegawai</button></a>
      <div class="row" style="margin-top: 8px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pegawai</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th class="text-center">Kode Pegawai</th>
                  <th class="text-center">Nama Pegawai</th>
                  <th class="text-center">Alamat</th>
                  <th class="text-center">Action</th>
                </tr>
                <?php 
                    foreach ($dataPegawai as $pegawai) { ?>
                      <tr class="text-center">
                        <td><?php echo $pegawai->Kode_Petugas; ?></td>
                        <td><?php echo $pegawai->Nama; ?></td>
                        <td><?php echo $pegawai->Alamat; ?></td>
                        <td>
                            <a href="<?php echo site_url('pegawai/' . $pegawai->Kode_Petugas); ?>"><button type="button" class="btn btn-warning btn-xs">Edit</button></a>
                            <a href="<?php echo base_url('pegawaiController/delete/' . $pegawai->Kode_Petugas); ?>"><button type="button" class="btn btn-danger btn-xs">Delete</button></a>
                        </td>
                      </tr>      
                 <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->