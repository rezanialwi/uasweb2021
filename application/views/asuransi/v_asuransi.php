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
    
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Asuransi </h3><br> <br>
              
                <a href="<?php echo base_url().'asuransi/tambah'; ?>"
            class="btn bg-navy btn-flat margin-md"><i class="fa fa-plus"> </i> Tambah Data</a>

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
<a href="<?php echo base_url().'asuransi/delete/'.$k->id; ?>" class="btn btn-danger btn-sm third" onclick="return confirm('Yakin ingin Hapus Data <?php echo $k->nama; ?> ? ');"> <i class="fa fa-trash"></i> </a>
<a href="<?php echo base_url().'asuransi/detail/'.$k->id; ?>" class="btn btn-primary btn-sm"> <i class="fa fa-eye"></i> </a>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<div class="container">
      <?php echo $pagination ?>
    </div>
</div>

</div>
 <?php
if(isset($_GET['alert'])){
if($_GET['alert']=="gagal"){
echo "<center><div class='alert alert-danger font-weight-bold text-center col-md-3 al'><i class='icon fa fa-warning'></i>Data Gagal Disimpan!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button></div> </center>";
}else if($_GET['alert']=="sukses"){
echo "<center><div class='alert alert-success font-weight-bold text-center col-md-3 al'><i class='icon fa fa-check'></i>
Data Berhasil Disimpan!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button></div></center>";

}
}
?>

<?php
if(isset($_GET['alert2'])){
if($_GET['alert2']=="gagal"){
echo "<center><div class='alert alert-danger font-weight-bold text-center col-md-3 al'><i class='icon fa fa-warning'></i>Data Gagal Diupdate!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button></div> </center>";
}else if($_GET['alert2']=="sukses"){
echo "
<center><div class='alert alert-success font-weight-bold text-center col-md-3 al' ><i class='icon fa fa-check'></i> 
Data Berhasil Diubah!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button></div></center>";

}
}
?>

<?php
if(isset($_GET['alert3'])){
if($_GET['alert3']=="gagal"){
echo "<center><div class='alert alert-danger font-weight-bold text-center col-md-3 al'><i class='icon fa fa-warning'></i> Data Gagal Dihapus!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button></div> </center>";
}else if($_GET['alert3']=="sukses"){
echo "<center><div class='alert alert-success font-weight-bold text-center col-md-3 al'><i class='icon fa fa-check'></i> 
Data Berhasil Dihapus!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span></button></div></center>";

}
}
?>
</div>

</div>

</section>

</div>

