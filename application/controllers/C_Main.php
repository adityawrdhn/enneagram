<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_Main extends CI_Controller
{
    public function __construct(){
      parent::__construct();
      $this->load->model('E_Soal');
      $this->load->model('E_Pengguna');
  }

    public function index(){
        $this->load->view('home');
    }

    public function home(){
        $this->load->view('home');
    }

    public function introduction(){
        $this->load->view('introduction');
    }

    public function macamTipe(){
        $data['tipe'] = $this->E_Pengguna->allTipe();
        $this->load->view('macamTipe', $data);
    }

    public function single($id)
    {
        $data['tipeD'] = $this->E_Pengguna->single($id);
        $this->load->view('macamTipeDetail', $data);
    }

     // public function macamInsting(){
     //     $this->load->view('macamInsting');
     // }

    public function systemWork(){
        $this->load->view('systemWork');
    }

    public function misidentification(){
        $this->load->view('misidentification');
    }

    // public function hubunganTipe(){
    //     $this->load->view('hubunganTipe');
    // }

    public function team(){
        $this->load->view('team');
    }

    public function preTest(){
        $this->load->view('preTest');
    }

    public function TampilHasil(){
        $data['q']=$this->E_Training->getData();
        
        $this->load->view('hasil',$data);

    }
    public function mulaiTest(){
        $this->E_Pengguna->insertDataPengguna();
        $dataa['query']=$this->E_Soal->getSoal();
        $this->load->view('test',$dataa);
    }

    public function updatedata($ID){
        $this->E_Pengguna->updateData($ID);
        redirect('C_Main/');
    }
    public function updatedatatraining($ID_TRAINING){
        $this->E_Training->updateData($ID_TRAINING);
        redirect('C_Main/');
    }
    public function TambahData(){
        for($count=1; $count <= 36 ; $count++) {
            $soal[$count]=$this->input->post('opsino'.$count); 
        }
        $file=array(
        'pengguna'=>$this->session->userdata('pengguna'),
            'SOAL1'  => $soal[1],
            'SOAL2'  => $soal[2],
            'SOAL3'  => $soal[3],
            'SOAL4'  => $soal[4],
            'SOAL5'  => $soal[5],
            'SOAL6'  => $soal[6],
            'SOAL7'  => $soal[7],
            'SOAL8'  => $soal[8],
            'SOAL9'  => $soal[9],
            'SOAL10'  => $soal[10],
            'SOAL11'  => $soal[11],
            'SOAL12'  => $soal[12],
            'SOAL13'  => $soal[13],
            'SOAL14'  => $soal[14],
            'SOAL15'  => $soal[15],
            'SOAL16'  => $soal[16],
            'SOAL17'  => $soal[17],
            'SOAL18'  => $soal[18],
            'SOAL19'  => $soal[19],
            'SOAL20'  => $soal[20],
            'SOAL21'  => $soal[21],
            'SOAL22'  => $soal[22],
            'SOAL23'  => $soal[23],
            'SOAL24'  => $soal[24],
            'SOAL25'  => $soal[25],
            'SOAL26'  => $soal[26],
            'SOAL27'  => $soal[27],
            'SOAL28'  => $soal[28],
            'SOAL29'  => $soal[29],
            'SOAL30'  => $soal[30],
            'SOAL31'  => $soal[31],
            'SOAL32'  => $soal[32],
            'SOAL33'  => $soal[33],
            'SOAL34'  => $soal[34],
            'SOAL35'  => $soal[35],
            'SOAL36'  => $soal[36]
            );
        $data['q']=$this->E_Training->INSERTDATA($file);
        redirect('C_Main/TampilHasil',$data);

    }

}
/* End of file login.php */
/* Location: ./application/controllers/login.php */