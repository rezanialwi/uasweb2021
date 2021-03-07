<?php 

class M_asuransi extends CI_Model{
	//crud kontak
	public function lihat_data()
	{
        return $this->db->get('asuransi')->result();
    }

    function tampil_data(){
		return $this->db->get('asuransi');
    }
    
     function get_pegawai()
	{
        return $this->db->get('asuransi')->result();
    }
    
    function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    
    function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
    }

    function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
 
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

     function get_product_keyword($keyword){
      // $this->db->join('pegawai', 'pegawai.id_pegawai = peminjaman.id_pegawai', 'left');
    	$this->db->select('*');
			$this->db->from('asuransi');
			$this->db->like('ktp',$keyword);
      $this->db->or_like('nama',$keyword);
      $this->db->or_like('jk',$keyword);
      $this->db->or_like('tmpt',$keyword);
      $this->db->or_like('tgl_lahir',$keyword);
      $this->db->or_like('status_nikah',$keyword);
      $this->db->or_like('hp',$keyword);
      $this->db->or_like('npwp',$keyword);
      $this->db->or_like('warga',$keyword);
      $this->db->or_like('kelas',$keyword);
      $this->db->or_like('email',$keyword);
      $this->db->or_like('alamat',$keyword);
      $this->db->or_like('rt',$keyword);
      $this->db->or_like('kode_pos',$keyword);
      $this->db->or_like('telp_rumah',$keyword);
      $this->db->or_like('kelurahan',$keyword);
      $this->db->or_like('kk',$keyword);
      $this->db->or_like('status_kel',$keyword);
      $this->db->or_like('jum_anak',$keyword);
      $this->db->or_like('rekening',$keyword);
      $this->db->or_like('no_rek',$keyword);
      $this->db->or_like('nama_rek',$keyword);
			return $this->db->get()->result();
		}
	

	//cari & pagging
	function get($batas=NULL,$offset=NULL,$cari=NULL)
  {
      if ($batas != NULL) {
        $this->db->limit($batas,$offset);
      }
      
    return $this->db->get('asuransi')->result();
  }
  
     function jumlah_row($search)
  {
    $this->db->or_like($search);
    $query = $this->db->get('asuransi');

    return $query->num_rows();
  }

   function get_by_id($kondisi)
  {
      $this->db->from('asuransi');
      $this->db->where($kondisi);
      $query = $this->db->get();
      return $query->row();
  }

  public function get_detail($id = NULL){
		
		$query = $this->db->get_where('asuransi', array('id' => $id))->row();
		return $query;
 
	}
	
}