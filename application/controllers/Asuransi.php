<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asuransi extends CI_Controller {

	function __construct()
{
    parent::__construct();
    // cek session yang login,
// jika session status tidak sama dengan session telah_login, berarti pengguna belum login
// maka halaman akan di alihkan kembali ke halaman login.
if($this->session->userdata('status')!="telah_login"){
redirect(base_url().'login?alert=belum_login');
}
    $this->load->model('m_asuransi');
     $this->load->library('pagination');
      $this->load->helper('url');
       $this->load->helper('tgl_indo');
     
         $this->load->library('upload');	
}

	 function index()
	{
         $cari = $this->input->get('cari');
      $page = $this->input->get('per_page');
      

      $search = array('nama'=> $cari );

      $batas =  5; // 9 data per page
      if(!$page):
          $offset = 0;
      else:
          $offset = $page;
      endif;

      $config['page_query_string'] = TRUE;
  		$config['base_url'] 				 = base_url().'asuransi/?cari='.$cari;
  		$config['total_rows'] 			 = $this->m_asuransi->jumlah_row($search);

  		$config['per_page'] 				 = $batas;
  		$config['uri_segment'] 			 = $page;

  		$config['full_tag_open'] 		= '<ul class="pagination">';
  		$config['full_tag_close'] 	= '<ul>';

  		$config['first_link'] 			= 'first';
  		$config['first_tag_open'] 	= '<li><a>';
  		$config['first_tag_close'] 	= '</a></li>';

  		$config['last_link'] 				= 'last';
  		$config['last_tag_open']	 	= '<li><a>';
  		$config['last_tag_close'] 	= '</a></li>';

  		$config['next_link'] 				= '&raquo;';
  		$config['next_tag_open'] 		= '<li><a>';
  		$config['next_tag_close'] 	= '</a></li>';

  		$config['prev_link'] 				= '&laquo;';
  		$config['prev_tag_open'] 		= '<li><a>';
  		$config['prev_tag_close'] 	= '</a></li>';

  		$config['cur_tag_open'] 		= '<li class="active"><a>';
  		$config['cur_tag_close'] 		= '</a></li>';

  		$config['num_tag_open'] 		= '<li><a>';
  		$config['num_tag_close'] 		= '</a></li>';

      $this->pagination->initialize($config);
      $data['pagination']	 = $this->pagination->create_links();
      $data['jumlah_page'] = $page;
			

      $data['asuransi'] = $this->m_asuransi->get($batas,$offset,$search);
  		// $this->load->view('admin/v_peminjaman',$data);
		$this->load->view('dashboard/v_header');
		$this->load->view('asuransi/v_asuransi',$data);
		$this->load->view('dashboard/v_footer');
    }
    
    function tambah(){
		$this->load->view('dashboard/v_header');
        $this->load->view('asuransi/v_asuransi_tambah');
        $this->load->view('dashboard/v_footer');
    }
    
    function tambah_aksi(){
      	$ktp = $this->input->post('ktp');
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jk');
        $tmpt = $this->input->post('tmpt');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $status_nikah = $this->input->post('status_nikah');
        $hp = $this->input->post('hp');
        $npwp = $this->input->post('npwp');
        $warga = $this->input->post('warga');
        $kelas = $this->input->post('kelas');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $rt = $this->input->post('rt');
        $kode_pos = $this->input->post('kode_pos');
        $telp_rumah = $this->input->post('telp_rumah');
        $kelurahan = $this->input->post('kelurahan');
        $kk = $this->input->post('kk');
        $status_kel = $this->input->post('status_kel');
        $jum_anak = $this->input->post('jum_anak');
        $rekening = $this->input->post('rekening');
        $no_rek = $this->input->post('no_rek');
        $nama_rek = $this->input->post('nama_rek');
 
		$data = array(
			'ktp' => $ktp,
            'nama' => $nama,
            'jk' => $jk,
            'tmpt' => $tmpt,
            'tgl_lahir' => $tgl_lahir,
            'status_nikah' => $status_nikah,
            'hp' => $hp,
            'npwp' => $npwp,
            'warga' => $warga,
            'kelas' => $kelas,
            'email' => $email,
            'alamat' => $alamat,
            'rt' => $rt,
            'kode_pos' => $kode_pos,
            'telp_rumah' => $telp_rumah,
            'kelurahan' => $kelurahan,
            'kk' => $kk,
            'status_kel' => $status_kel,
            'jum_anak' => $jum_anak,
            'rekening' => $rekening,
            'no_rek' => $no_rek,
            'nama_rek' => $nama_rek,
			);
		$cek=$this->m_asuransi->input_data($data,'asuransi');
     if($cek != true){
	redirect(base_url().'asuransi/index/?alert=sukses');
  }else{
    redirect(base_url().'asuransi/index/?alert=gagal');
  }
		
	
    }

      function edit($id){
   $where = array('id' => $id);
     $data['asuransi'] = $this->m_asuransi->edit_data($where,'asuransi')->result();
    $this->load->view('dashboard/v_header');
    $this->load->view('asuransi/v_asuransi_edit',$data);
    $this->load->view('dashboard/v_footer');
    }

    function update(){
	$id = $this->input->post('id');
		$ktp = $this->input->post('ktp');
        $nama = $this->input->post('nama');
        $jk = $this->input->post('jk');
        $tmpt = $this->input->post('tmpt');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $status_nikah = $this->input->post('status_nikah');
        $hp = $this->input->post('hp');
        $npwp = $this->input->post('npwp');
        $warga = $this->input->post('warga');
        $kelas = $this->input->post('kelas');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $rt = $this->input->post('rt');
        $kode_pos = $this->input->post('kode_pos');
        $telp_rumah = $this->input->post('telp_rumah');
        $kelurahan = $this->input->post('kelurahan');
        $kk = $this->input->post('kk');
        $status_kel = $this->input->post('status_kel');
        $jum_anak = $this->input->post('jum_anak');
        $rekening = $this->input->post('rekening');
        $no_rek = $this->input->post('no_rek');
        $nama_rek = $this->input->post('nama_rek');

	$data = array(
			'ktp' => $ktp,
            'nama' => $nama,
            'jk' => $jk,
            'tmpt' => $tmpt,
            'tgl_lahir' => $tgl_lahir,
            'status_nikah' => $status_nikah,
            'hp' => $hp,
            'npwp' => $npwp,
            'warga' => $warga,
            'kelas' => $kelas,
            'email' => $email,
            'alamat' => $alamat,
            'rt' => $rt,
            'kode_pos' => $kode_pos,
            'telp_rumah' => $telp_rumah,
            'kelurahan' => $kelurahan,
            'kk' => $kk,
            'status_kel' => $status_kel,
            'jum_anak' => $jum_anak,
            'rekening' => $rekening,
            'no_rek' => $no_rek,
            'nama_rek' => $nama_rek
	);

	$where = array(
		'id' => $id
	);

	$cek = $this->m_asuransi->update_data($where,$data,'asuransi');
  if($cek != true){
	redirect(base_url().'asuransi/index/?alert2=sukses');
  }else{
    redirect(base_url().'asuransi/index/?alert2=gagal');
  }
}

    function delete($id){
		$where = array('id' => $id);
		$cek=$this->m_asuransi->hapus_data($where,'asuransi');
		if($cek != true){
	redirect(base_url().'asuransi/index/?alert3=sukses');
  }else{
    redirect(base_url().'asuransi/index/?alert3=gagal');
  }
  }
  
  function search(){
		$keyword = $this->input->post('keyword');
		$data['asuransi']=$this->m_asuransi->get_product_keyword($keyword);
		$this->load->view('dashboard/v_header');
    $this->load->view('asuransi/v_asuransi_cari',$data);
    $this->load->view('dashboard/v_footer');
  }
  
  function detail($id){

		$detail = $this->m_asuransi->get_detail($id);
    $data['detail'] = $detail;
    $this->load->view('dashboard/v_header');
    $this->load->view('asuransi/v_asuransi_detail', $data);
    $this->load->view('dashboard/v_footer');
 
  }
}