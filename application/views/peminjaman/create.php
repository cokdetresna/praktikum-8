<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Peminjaman Buku
        <small>Tambah Data Peminjaman Buku</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-sticky-note"></i> Home</a></li>
        <li class="active">Peminjaman Buku</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <button onclick="" class="btn btn-primary btn-linking"><i class="fa fa-chevron-left"></i> Kembali ke List Peminjaman Buku</button>
      <div class="row" style="margin-top: 8px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tambah Data Peminjaman Buku</h3>
            </div>
            <!-- /.box-header -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="namaPeminjam">Nama peminjam</label>
                  <input type="text" class="form-control" id="namaPeminjam" placeholder="Masukkan nama peminjam">
                </div>
                <div class="form-group">
                  <label for="namaPetugas">Nama pegawai</label>
                  <input type="text" class="form-control" id="namaPegawai" placeholder="Masukkan nama pegawai">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Tambah Data Peminjaman</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>


    </section>
    <!-- /.content -->