<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E_Soal extends CI_Model {

	public $variable;

	public function __construct()
	{
		// parent::__construct();
		$this->load->database();
	}

	public function getSoal()
	{
		$this->db->order_by('ID_SOAL','ASC');
		$query = $this->db-> get('tb_soal');
		return $query->result();	
	}

	public function ambilSoalSatu($id)
	{
		$query = $this->db-> query("SELECT * FROM TB_SOAL WHERE ID_SOAL='$id' ");
		return $query->result();	
	}
	public function hapusSatu($id)
	{
		$query = $this->db-> query("DELETE FROM TB_SOAL WHERE ID_SOAL='$id' ");
	}
	
	public function updateSoal($id)
	{
		$data = $this->input->post();
		$soal  = $this->input->post('soal');	
		// $pilihan_a  = $this->input->post('pilihan_a');	
		// $pilihan_b  = $this->input->post('pilihan_b');	
		$data = array (
			'SOAL'  => $soal
			// 'PILIHAN_A' => $pilihan_a,
			// 'PILIHAN_B' => $pilihan_b			
			);  
		$this->db->update('TB_SOAL',$data, array('ID_SOAL'=>$id));
	}

	public function addSoal($id)
	{
		$data = $this->input->post();
		$soal  = $this->input->post('soal');	
		// $pilihan_a  = $this->input->post('pilihan_a');	
		// $pilihan_b  = $this->input->post('pilihan_b');	
		$data = array (
			'SOAL'  => $soal
			// 'PILIHAN_A' => $pilihan_a,
			// 'PILIHAN_B' => $pilihan_b			
			);  
		$this->db->insert('TB_SOAL',$data);
	}
	public function hitungtipe($tipe){
		$query = $this->db->query("select count(*) ID_SOAL from TB_SOAL where TIPE_A='$tipe'or TIPE_B='$tipe'");
	}

}

/* End of file E_Soal.php */
/* Location: ./application/models/E_Soal.php */