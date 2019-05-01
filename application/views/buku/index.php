<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Buku
        <small>List Data Buku</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Home</a></li>
        <li class="active">Buku</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <a href="<?php echo site_url('buku/create'); ?>"><button onclick="" class="btn btn-success btn-linking">Tambah Data Buku</button></a>
      
      <div class="row" style="margin-top: 8px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Buku</h3>

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
                  <th class="text-center">Kode Buku</th>
                  <th class="text-center">Judul Buku</th>
                  <th class="text-center">Tahun Terbit</th>
                  <th class="text-center">Pengarang</th>
                  <th class="text-center">Penerbit</th>
                  <th class="text-center">Action</th>
                </tr>
                <?php foreach ($dataBuku as $buku) { ?>
                <tr class="text-center">
                  <td><?php echo $buku->Kode_Register; ?></td>
                  <td><?php echo $buku->Judul_Buku; ?></td>
                  <td><?php echo $buku->Pengarang; ?></td>
                  <td><?php echo $buku->Penerbit; ?></td>
                  <td><?php echo $buku->Tahun_Terbit; ?></td>
                  <td>
                      <a href="<?php echo site_url('buku/' . $buku->Kode_Register);?>"><button type="button" class="btn btn-warning btn-xs">Edit</button></a>
                      <a href="<?php echo base_url('BukuController/delete/' . $buku->Kode_Register); ?>"><button type="button" class="btn btn-danger btn-xs">Delete</button></a>
                      
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