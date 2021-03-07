<div class="content-wrapper">
<section class="content-header">
<h1>
Asuransi
<small>Data Asuransi</small>
</h1>
</section>

<section class="content">
    <a href="<?php echo base_url().'asuransi'; ?>" class="btn btnsm
btn-primary"><i class="fa fa-reply"> </i> Kembali</a>
<div class="row">
  <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Detail Data Asuransi</h3><br>
<section class="center">
    
 <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
<tr>
<th align="left">No KTP</th>
<th>:</th>
<th align="left" width="80%"><?php echo $detail->ktp ?></th>
</tr>
<tr>
<th align="left">Nama Lengkap</th>
<th>:</th>
<th align="left" width="80%"><?php echo $detail->nama ?></th>
</tr>
<tr>
<th align="left">Jenis Kelamin</th>
<th>:</th>
<th align="left" width="80%"><?php echo $detail->jk ?></th>
</tr>
<tr>
<th align="left">Tempat Lahir</th>
<th>:</th>
<th align="left" width="80%"><?php echo $detail->tmpt ?></th>
</tr>
<tr>
<th align="left">Tanggal Lahir</th>
<th>:</th>
<th align="left"><?php echo shortdate_indo($detail->tgl_lahir) ?></th>
</tr>
<tr>
<th align="left">Status Pernikahan</th>
<th>:</th>
<th align="left"><?php echo $detail->status_nikah ?></th>
</tr>
<tr>
<th align="left">No Handphone</th>
<th>:</th>
<th align="left"><?php echo $detail->hp ?></th>
</tr>
<tr>
<th align="left">NPWP</th>
<th>:</th>
<th align="left"><?php echo $detail->npwp ?></th>
</tr>
<tr>
<th align="left">Kewarganegaraan</th>
<th>:</th>
<th align="left"><?php echo $detail->warga ?></th>
</tr>
<tr>
<th align="left">Kelas</th>
<th>:</th>
<th align="left"><?php echo $detail->kelas ?></th>
</tr>
<tr>
<th align="left">Email</th>
<th>:</th>
<th align="left"><?php echo $detail->email ?></th>
</tr>
<tr>
<th align="left">Alamat</th>
<th>:</th>
<th align="left"><?php echo $detail->alamat ?></th>
</tr>
<tr>
<th align="left">RT/RW</th>
<th>:</th>
<th align="left"><?php echo $detail->rt ?></th>
</tr>
<tr>
<th align="left">Kode Pos</th>
<th>:</th>
<th align="left"><?php echo $detail->kode_pos ?></th>
</tr>
<tr>
<th align="left">No. Telp Rumah</th>
<th>:</th>
<th align="left"><?php echo $detail->telp_rumah ?></th>
</tr>
<tr>
<th align="left">Keluarahan/Desa</th>
<th>:</th>
<th align="left"><?php echo $detail->kelurahan ?></th>
</tr>
<tr>
<th align="left">No Kartu Keluarga</th>
<th>:</th>
<th align="left"><?php echo $detail->kk ?></th>
</tr>
<tr>
<th align="left">Status Dalam Keluarga</th>
<th>:</th>
<th align="left"><?php echo $detail->status_kel ?></th>
</tr>
<tr>
<th align="left">Jumlah Anak</th>
<th>:</th>
<th align="left"><?php echo $detail->jum_anak ?></th>
</tr>
<tr>
<th align="left">Rekening</th>
<th>:</th>
<th align="left"><?php echo $detail->rekening ?></th>
</tr>
<tr>
<th align="left">Nomor Rekening</th>
<th>:</th>
<th align="left"><?php echo $detail->no_rek ?></th>
</tr>
<tr>
<th align="left">Nama Rekening</th>
<th>:</th>
<th align="left"><?php echo $detail->nama_rek ?></th>
</tr>
								</tbody>
							</table>
                           
                            </section>
                            
  </div>
</div>
 
</div>
</div>
</section>
</div>