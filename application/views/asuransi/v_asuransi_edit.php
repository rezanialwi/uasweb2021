<div class="content-wrapper">
<section class="content-header">
<h1>
Asuransi
<small>Edit Data</small>
</h1>
</section>
<section class="content">
<a href="<?php echo base_url().'asuransi'; ?>" class="btn btnsm
btn-primary"><i class="fa fa-reply"> </i> Kembali</a>
<br/>
<br/>
<div class="box box-primary">
<div class="box-header">
<h3 class="box-title">Data Asuransi </h3>
</div>
<div class="box-body">
	<?php foreach($asuransi as $u){ ?>
<form method="post" action="<?php echo base_url('asuransi/update') ?>" enctype="multipart/form-data">
<div class="row">
<div class="col-lg-6">
<div class="box-body">
<div class="form-group">
 <input type="hidden" name="id" class="form-control" value="<?php echo $u->id ?>">
</div>
<h2 class="text-center"> Identitas</h2>
<div class="form-group">
<label>Nomor KTP</label> <input type="number" name="ktp" class="form-control" value="<?php echo $u->ktp ?>">
</div>
<div class="form-group">
<label>Nama Lengkap</label> <input type="text" name="nama" class="form-control" value="<?php echo $u->nama ?>">
</div>
<div class="form-group">
<label>Jenis Kelamin</label>
  <?php
                          echo form_dropdown('jk', array('Pilih', 'L'=>'Laki-laki', 'P'=>'Perempuan'), 
                          $u->jk, "class='form-control'");
                        ?>
</div>
<div class="form-group">
 <label>Tempat Lahir</label><input type="text" name="tmpt" class="form-control" value="<?php echo $u->tmpt ?>">
</div>
<div class="form-group">
<label>Tanggal Lahir</label><input type="date" name="tgl_lahir" class="form-control" value="<?php echo $u->tgl_lahir ?>">
</div>
<div class="form-group">
<label>Status Pernikahan</label>
                <?php
                          echo form_dropdown('status_nikah', array('Pilih', 'Kawin'=>'Kawin', 'Belum Kawin'=>'Belum Kawin'), 
                          $u->status_nikah, "class='form-control'");
                        ?>
</div>
<div class="form-group">
<label>Nomor Handphone</label> <input type="number" name="hp" class="form-control" value="<?php echo $u->hp ?>">
</div>
<div class="form-group">
<label>NPWP</label> <input type="text" name="npwp" class="form-control" value="<?php echo $u->npwp ?>">
</div>
<div class="form-group">
<label>Kewarganegaraan</label>
                <?php
                          echo form_dropdown('warga', array('Pilih', 'WNI'=>'WNI', 'WNA'=>'WNA'), 
                          $u->warga, "class='form-control'");
                        ?>
</div>
<div class="form-group">
<label>Kelas</label>
                <?php
                          echo form_dropdown('kelas', array('Pilih', 'Kelas I'=>'Kelas I', 'Kelas II'=>'Kelas II', 'Kelas III'=>'Kelas III'), 
                          $u->kelas, "class='form-control'");
                        ?>
</div>
<div class="form-group">
<label>Email</label> <input type="email" name="email" class="form-control" value="<?php echo $u->email ?>">
</div>
</div>
</div>
<div class="col-lg-6">
<h2 class="text-center">  Alamat</h2>
<div class="form-group">
<label>Alamat</label> <input type="text" name="alamat" class="form-control" value="<?php echo $u->alamat ?>">
</div>
<div class="form-group">
<div class="form-group">
<label>RT/RW</label> <input type="text" name="rt" class="form-control" value="<?php echo $u->rt ?>">
</div>
<div class="form-group">
<label>Kode Pos</label> <input type="number" name="kode_pos" class="form-control" value="<?php echo $u->kode_pos ?>">
</div>
<div class="form-group">
<label>No. Telp Rumah</label> <input type="number" name="telp_rumah" class="form-control" value="<?php echo $u->telp_rumah ?>">
</div>
<div class="form-group">
<label>Keluarahan/Desa</label> <input type="text" name="kelurahan" class="form-control" value="<?php echo $u->kelurahan ?>">
</div>
<div class="form-group">
<label>Nomor Kartu Keluarga</label> <input type="number" name="kk" class="form-control" value="<?php echo $u->kk ?>">
</div>
</div>
<h2 class="text-center"> Tambahan</h2>
<div class="form-group">
<label>Satus Dalam Keluarga</label>

           <?php
                          echo form_dropdown('status_kel', array('Pilih', 'Kepala Keluarga'=>'Kepala Keluarga', 'Suami'=>'Suami', 'Isteri'=>'Isteri', 'Anak'=>'Anak', 'Lainnya'=>'Lainnya'), 
                          $u->status_kel, "class='form-control'");
                        ?>
</div>
<div class="form-group">
<label>Jumlah Anak</label>
                <?php
                          echo form_dropdown('jum_anak', array('Pilih', '0'=>'0', '1'=>'1', '2'=>'2', '3'=>'3', '4'=>'4', '5'=>'5', 'Lainnya'=>'Lainnya'), 
                          $u->jum_anak, "class='form-control'");
                        ?>
</div>
<div class="form-group">
<label>Rekening</label>

   <?php
                          echo form_dropdown('rekening', array('Pilih', 'BNI'=>'BNI', 'BRI'=>'BRI', 'MANDIRI'=>'MANDIRI', 'MEGA'=>'MEGA', 'BJB'=>'BJB', 'BCA'=>'BCA', 'Lainnya'=>'Lainnya'), 
                          $u->rekening, "class='form-control'");
                        ?>
</div>
<div class="form-group">
<label>Nomor Rekening</label> <input type="number" name="no_rek" class="form-control" value="<?php echo $u->no_rek ?>">
</div>
<div class="form-group">
<label>Nama Rekening</label> <input type="text" name="nama_rek" class="form-control" value="<?php echo $u->nama_rek ?>">
</div>
</div>
<div class="box-footer">
<input type="submit" class="btn btn-success"
value="Simpan">
<input type="reset" class="btn btn-warning"
value="Reset">

</form>
 <?php } ?>
</div>


</section>
</div>