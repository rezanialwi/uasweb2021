<div class="content-wrapper">
<section class="content-header">
<h1>
Asuransi
<small>Data Asuransi </small>
</h1>
</section>
<section class="content">
<div class="row">
        <div class="col-xs-12">
    
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Asuransi </h3><br> <br>
              
                <a href="<?php echo base_url().'asuransi/tambah'; ?>"
class="btn bg-navy btn-flat margin-md"><i class="fa fa-plus"> </i> Tambah Data</a>
                <a href="<?php echo base_url().'asuransi'; ?>"
class="btn bg-yellow btn-flat margin-md"><i class="fa fa-reply"> </i> Kembali</a>

              <div class="box-tools">
              <?php echo form_open('asuransi/search') ?>
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="keyword" class="form-control pull-right" placeholder="Ketik Kata Kunci...">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                  <?php echo form_close() ?>
          
                </div>
              </div>
             
         
   <div class="row ">
		    <div class="col-md-3">
         
             </div>
             </div>
             </div>
            <!-- /.box-header -->

          <div class="table-responsive">
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead>
<tr>
<th width="1%">NO</th>
<th >NIK</th>
<th >Nama</th>
<th >Jenis Kelamin</th>
<th >Status Perkawinan</th>
<th >Kewarganegaraan</th>
<th >OPSI</th>
</tr>
</thead>
<tbody>
<?php
$no = 1;
foreach($asuransi as $k){
?>
<tr>
<td><?php echo $no++; ?></td>
<td><?php echo $k->ktp; ?></td>
<td><?php echo $k->nama; ?></td>
<td><?php echo $k->jk; ?></td>
<td><?php echo $k->status_nikah; ?></td>
<td><?php echo $k->warga; ?></td>
<td>
<a href="<?php echo base_url().'asuransi/edit/'.$k->id; ?>" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"></i> </a>
<a href="<?php echo base_url().'asuransi/delete/'.$k->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin Hapus Data ini ?');"> <i class="fa fa-trash"></i> </a>
<a href="<?php echo base_url().'asuransi/detail/'.$k->id; ?>" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i> </a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
 
</div>
</div>
</section>
</div>