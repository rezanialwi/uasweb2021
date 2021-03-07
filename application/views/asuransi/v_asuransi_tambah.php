<div class="content-wrapper">
<section class="content-header">
<h1>
Asuransi
<small>Tambah Asuransi</small>
</h1>
</section>
<section class="content">
<a href="<?php echo base_url().'Asuransi'; ?>" class="btn btnsm
btn-primary"> <i class="fa fa-reply"> </i> Kembali</a>
<br/>
<br/>
<div class="box box-primary">
<div class="box-header">
<h3 class="box-title">Asuransi</h3>
</div>
<div class="box-body">
<form method="post" action="<?php echo base_url('asuransi/tambah_aksi') ?>" enctype="multipart/form-data">
<!-- colom indentitas -->
<div class="row">
<div class="col-lg-6">
<div class="box-body">
<h2 class="text-center"> Identitas</h2>
<div class="form-group">
<label>Nomor KTP</label> <input type="number" name="ktp" class="form-control" placeholder="Masukkan Nomor KTP .." required>
</div>
<div class="form-group">
<label>Nama Lengkap</label> <input type="text" name="nama" class="form-control" placeholder="Masukkan nama anda .." required>
</div>
<div class="form-group">
<label>Jenis Kelamin</label>
<select class="form-control" id="jk"  autocomplete="off" name="jk">
									<option value="">--pilih--</option>
									<option value="L">Laki-laki</option>
									<option value="P">Perempuan</option>
								</select> 
</div>
<div class="form-group">
 <label>Tempat Lahir</label><input type="text" name="tmpt" class="form-control"  placeholder="Masukkan Tempat Lahir anda .." required>
</div>
<div class="form-group">
<label>Tanggal Lahir</label><input type="date" name="tgl_lahir" class="form-control" required>
</div>
<div class="form-group">
<label>Status Pernikahan</label>
<select class="form-control" id="status_nikah"  autocomplete="off" name="status_nikah">
									<option value="">--pilih--</option>
									<option value="Kawin">Kawin</option>
									<option value="Belum Kawin">Belum Kawin</option>
								</select> 
</div>
<div class="form-group">
<label>Nomor Handphone</label> <input type="number" name="hp" class="form-control" placeholder="Masukkan No HP.." required>
</div>
<div class="form-group">
<label>NPWP</label> <input type="text" name="npwp" class="form-control" placeholder="Masukkan NPWP.." required>
</div>
<div class="form-group">
<label>Kewarganegaraan</label>
<select class="form-control" id="warga"  autocomplete="off" name="warga">
									<option value="">--pilih--</option>
									<option value="WNI">WNI</option>
									<option value="WNA">WNA</option>
								</select> 
</div>
<div class="form-group">
<label>Kelas</label>
<select class="form-control" id="kelas"  autocomplete="off" name="kelas">
									<option value="">--pilih--</option>
									<option value="Kelas I">Kelas I</option>
									<option value="Kelas II">Kelas II</option>
									<option value="Kelas III">Kelas III</option>

								</select> 
</div>
<div class="form-group">
<label>Email</label> <input type="email" name="email" class="form-control" placeholder="Masukkan Email.." required>
</div>
</div>
</div>
<!-- colom alamat -->
<div class="col-lg-6">
<h2 class="text-center">  Alamat</h2>
<div class="form-group">
<label>Alamat</label> <input type="text" name="alamat" class="form-control" placeholder="Masukkan Alamat.." required>
</div>
<div class="form-group">
<div class="form-group">
<label>RT/RW</label> <input type="text" name="rt" class="form-control" placeholder="Masukkan RT/RW.." required>
</div>
<div class="form-group">
<label>Kode Pos</label> <input type="number" name="kode_pos" class="form-control" placeholder="Masukkan Kode Pos.." required>
</div>
<div class="form-group">
<label>No. Telp Rumah</label> <input type="number" name="telp_rumah" class="form-control" placeholder="Masukkan No. Telp Rumah.." required>
</div>
<div class="form-group">
<label>Keluarahan/Desa</label> <input type="text" name="kelurahan" class="form-control" placeholder="Masukkan Keluarahan/Desa.." required>
</div>
<div class="form-group">
<label>Nomor Kartu Keluarga</label> <input type="number" name="kk" class="form-control" placeholder="Masukkan Nomor Kartu Keluarga.." required>
</div>
</div>
<!-- colom Tambahan -->
<h2 class="text-center"> Tambahan</h2>
<div class="form-group">
<label>Satus Dalam Keluarga</label>
<select class="form-control" id="status_kel"  autocomplete="off" name="status_kel">
									<option value="">--pilih--</option>
									<option value="Kepala Keluarga">Kepala Keluarga</option>
									<option value="Suami">Suami</option>
									<option value="Isteri">Isteri</option>
									<option value="Anak">Anak</option>
									<option value="Lainnya">Lainnya</option>

								</select> 
</div>
<div class="form-group">
<label>Jumlah Anak</label>
<select class="form-control" id="jum_anak"  autocomplete="off" name="jum_anak">
									<option value="">--pilih--</option>
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="Lainnya">Lainnya</option>

								</select> 
</div>
<div class="form-group">
<label>Rekening</label>
<select class="form-control" id="rekening"  autocomplete="off" name="rekening">
									<option value="">--pilih--</option>
									<option value="BNI">BNI</option>
									<option value="BRI">BRI</option>
									<option value="MANDIRI">MANDIRI</option>
									<option value="MEGA">MEGA</option>
									<option value="BJB">BJB</option>
									<option value="BCA">BCA</option>
									<option value="Lainnya">Lainnya</option>

								</select> 
</div>
<div class="form-group">
<label>Nomor Rekening</label> <input type="number" name="no_rek" class="form-control" placeholder="Masukkan Nomor Rekening.." required>
</div>
<div class="form-group">
<label>Nama Rekening</label> <input type="text" name="nama_rek" class="form-control" placeholder="Masukkan Nama Rekening.." required>
</div>
</div>
<div class="box-footer">
<input type="submit" class="btn btn-success second"
value="Simpan">
<input type="reset" class="btn btn-warning"
value="Reset">
</div>
</form>
</div>

</section>
</div>
