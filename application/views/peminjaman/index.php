<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Peminjaman Buku
        <small>Data Peminjaman Buku</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-sticky-note"></i> Home</a></li>
        <li class="active">Peminjaman Buku</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <button onclick="" class="btn btn-success btn-linking">Tambah Data Peminjaman</button>
      <div class="row" style="margin-top: 8px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peminjaman Buku</h3>

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
                  <th class="text-center">Kode Peminjaman</th>
                  <th class="text-center">Nama Peminjam</th>
                  <th class="text-center">Nama Pegawai</th>
                  <th class="text-center">Action</th>
                </tr>
                <tr class="text-center">
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>
                      <button type="button" class="btn btn-info btn-xs">Detail</button>
                      <button type="button" class="btn btn-warning btn-xs">Edit</button>
                      <button type="button" class="btn btn-danger btn-xs">Delete</button>
                  </td>
                </tr>
                <tr class="text-center">
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>
                      <button type="button" class="btn btn-info btn-xs">Detail</button>
                      <button type="button" class="btn btn-warning btn-xs">Edit</button>
                      <button type="button" class="btn btn-danger btn-xs">Delete</button>
                  </td>
                </tr>
                <tr class="text-center">
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>
                      <button type="button" class="btn btn-info btn-xs">Detail</button>
                      <button type="button" class="btn btn-warning btn-xs">Edit</button>
                      <button type="button" class="btn btn-danger btn-xs">Delete</button>
                  </td>
                </tr>
                <tr class="text-center">
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td>
                      <button type="button" class="btn btn-info btn-xs">Detail</button>
                      <button type="button" class="btn btn-warning btn-xs">Edit</button>
                      <button type="button" class="btn btn-danger btn-xs">Delete</button>
                  </td>
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>


    </section>
    <!-- /.content -->