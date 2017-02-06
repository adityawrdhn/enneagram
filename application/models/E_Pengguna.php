<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_Pengguna extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function getPengguna()
	{
		$this->db->order_by('WAKTU_TES','ASC');
		$query = $this->db-> get('TB_PENGGUNA');
		return $query->result();	
	}

	public function insertDataPengguna(){
		$data = $this->input->post();
		$nama  = $this->input->post('nama');	
		$nim  = $this->input->post('nim');
		$notelp  = $this->input->post('notelp');	
		$jenisKelamin  = $this->input->post('jenisKelamin');	
		$umur  = $this->input->post('umur');	
		$Divisi1  = $this->input->post('Divisi1');	
		$Divisi2  = $this->input->post('Divisi2');	

		$data = array (
			'nama'  => $nama,
			'nim'  => $nim,
			'notelp' => $notelp,
			'Jenis_Kelamin'  => $jenisKelamin,
			'umur'  => $umur,
			'Divisi1' => $Divisi1,
			'Divisi2' => $Divisi2
			);  
		$this->db->insert('TB_PENGGUNA',$data);
		$query = $this->db->select('ID_PENGGUNA,NAMA')
				->where(array('nama' => $nama,'nim'=> $nim,'notelp' => $notelp,'jenis_kelamin'=> $jenisKelamin,'umur'=> $umur,'Divisi1' => $Divisi1,'Divisi2' => $Divisi2)) 
				->from('TB_PENGGUNA')                     
				->get();                         
		$user = $query->row();
		$data = array('pengguna' => $user->NAMA, 'id_pengguna' => $user->ID_PENGGUNA);
		$this->session->set_userdata($data);
	}
	
	
	public function getDataTipe($id)
	{
		$query = $this->db-> query("SELECT * FROM TB_TIPE WHERE ID_TIPE='$id'");
		return $query->result();	
	}

	public function allTipe()
	{
		$query=$this->db->query("select * from tb_macamtipe");
		return $query->result();
	}

	public function single($id)
	{
		$query = $this->db->query("select * from tb_macamtipe where id = '$id'");
		return $query->result();
	}

	public function updatePengguna($id, $data)
	{	
		$tipe= $data['tipe'];
		$sayap= $data['sayap'];
		
		if($tipe=="1"){
			$tipe="The Reformer";
		}else if($tipe=="2"){
			$tipe="The Helper";
		}else if($tipe=="3"){
			$tipe="The Achiever";
		}else if($tipe=="4"){
			$tipe="The Individualist";
		}else if($tipe=="5"){
			$tipe="The Investigator";
		}else if($tipe=="6"){
			$tipe="The Loyalist";
		}else if($tipe=="7"){
			$tipe="The Enthusiast";
		}else if($tipe=="8"){
			$tipe="The Challenger";
		}else if($tipe=="9"){
			$tipe="The Peacemaker";
		}

		if($sayap=="1"){
			$sayap="The Reformer";
		}else if($sayap==2){
			$sayap="The Helper";
		}else if($sayap==3){
			$sayap="The Achiever";
		}else if($sayap==4){
			$sayap="The Individualist";
		}else if($sayap==5){
			$sayap="The Investigator";
		}else if($sayap==6){
			$sayap="The Loyalist";
		}else if($sayap==7){
			$sayap="The Enthusiast";
		}else if($sayap==8){
			$sayap="The Challenger";
		}else if($sayap==9){
			$sayap="The Peacemaker";
		}
		// echo $sayap;

		$data = array (			
			'TIPE_KEPRIBADIAN'  => $tipe,			
			'SAYAP'  => $sayap		
			);  
		$this->db->update('TB_PENGGUNA',$data, array('ID_PENGGUNA'=>$id));
	}
	public function updateData($ID)
	{
		$tipe = $this->input->post('tipe');	
		// $pilihan_a  = $this->input->post('pilihan_a');	
		// $pilihan_b  = $this->input->post('pilihan_b');	
		$data = array (
			'tipe'  => $tipe);
		$this->db->query("update TB_PENGGUNA SET tipe='$tipe' where NAMA = '$ID'");
	}


}

/* End of file E_Pengguna.php */
/* Location: ./application/models/E_Pengguna.php */