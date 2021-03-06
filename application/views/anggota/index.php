<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Anggota
        <small>List Data Anggota</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-group"></i> Home</a></li>
        <li class="active">Anggota</li>
      </ol> 
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <a href="<?php echo site_url('anggota/create'); ?>"><button onclick="" class="btn btn-success btn-linking">Tambah Data Anggota</button></a>
      <div class="row" style="margin-top: 8px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">Kode Anggota</th>
                  <th class="text-center">Nama</th>
                  <th class="text-center">Program Studi</th>
                  <th class="text-center">Jenjang</th>
                  <th class="text-center">Alamat</th>
                  <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($dataAnggota as $anggota) { ?>
                  <tr class="text-center">
                    <td><?php echo $anggota->Kode_Anggota; ?></td>
                    <td><?php echo $anggota->Nama; ?></td>
                    <td><?php echo $anggota->Prodi; ?></td>
                    <td><?php echo $anggota->Jenjang; ?></td>
                    <td class="text-left"><?php echo $anggota->Alamat; ?></td>
                    <td>
                        <a href="<?php echo site_url('anggota/' . $anggota->Kode_Anggota); ?>"><button type="button" class="btn btn-warning btn-xs">Edit</button></a>
                        <span><a href="<?php echo base_url('anggotaController/delete/' . $anggota->Kode_Anggota); ?>"><button type="button" class="btn btn-danger btn-xs">Delete</button></a></span>
                    </td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>


    </section>
    <!-- /.content -->