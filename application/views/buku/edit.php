<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manajemen Buku
        <small>Edit Data Buku</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-book"></i> Home</a></li>
        <li class="active">Buku</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <a href="<?php echo site_url('buku'); ?>"><button onclick="" class="btn btn-primary btn-linking"><i class="fa fa-chevron-left"></i> Kembali ke List Buku</button></a>
      
      <div class="row" style="margin-top: 8px;">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Data Buku</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo base_url('buku/' . $dataBuku['Kode_Register'] . '/update'); ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="judulBuku">Judul Buku</label>
                  <input type="text" class="form-control" id="judulBuku" placeholder="Masukkan judul buku" name="judulBuku" value="<?php echo $dataBuku['Judul_Buku']; ?>">
                </div>
                <div class="form-group">
                  <label for="pengarang">Pengarang</label>
                  <input type="text" class="form-control" id="pengarang" placeholder="Masukkan pengarang" name="pengarang" value="<?php echo $dataBuku['Pengarang']; ?>">
                </div>
                <div class="form-group">
                  <label for="tahunTerbit">Tahun Terbit</label>
                  <input type="text" class="form-control" id="tahunTerbit" placeholder="Masukkan tahun terbit" name="tahunTerbit" value="<?php echo $dataBuku['Tahun_Terbit']; ?>">
                </div>
                <div class="form-group">
                  <label for="penerbit">Penerbit</label>
                  <input type="text" class="form-control" id="penerbit" placeholder="Masukkan penerbit" name="penerbit" value="<?php echo $dataBuku['Penerbit']; ?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success">Update Data Buku</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>


    </section>
    <!-- /.content -->