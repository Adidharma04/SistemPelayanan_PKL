<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class singkronisasi extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/singkronisasi_model');
    }

    public function index()
    {
        
        //-- Title Halaman
        $data ['title'] = 'Form Singkronisasi/Aktivasi NIK dan KK ';
        //----------------------------

        $data['tbl_singkron'] = $this->singkronisasi_model->tampilSingkronisasi();

        $this->load->view('Template/Admin/sidebar',$data);
        $this->load->view('Template/Admin/navbar',$data);
        $this->load->view('Admin/singkronisasi/index',$data);
        $this->load->view('Template/Admin/footer',$data);
    }

    //-- Menambah Data Alumni--//
    public function tambah(){
        //-- rule--//
        $this->form_validation->set_rules('no_induk', 'No Induk', 'required|trim|is_unique[admin.no_induk]',[
            'required' => 'Masukkan No Induk Pegawai',
            'is_unique' => 'No Induk Pegawai telah terdaftar',
        ]);

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim',[
            'required' => 'Masukkan Nama Pegawai',
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim',[
            'required' => 'Masukkan Alamat Pegawai',
        ]);

        $this->form_validation->set_rules('no_telpon', 'No Telpon', 'required|trim',[
            'required' => 'Masukkan No Telpon Pegawai',
        ]);
        //----------------------------------------------------------------------
        
        //-- Memanggil session login
        $data['user'] = $this->db->get_where('user',['username' =>
        $this->session->userdata('username')])->row_array();
        //----------------------------------------------------------------------

        //-- Title Halaman
        $data ['title'] = 'Form Tambah Pegawai';
        //----------------------------------------------------------------------
        
        $this->load->library('form_validation');
        $data['user_role'] = $this->user_role_model->tampilUserRole();
        
        if($this->form_validation->run() == FALSE){
            $this->load->view('Template/Admin/sidebar',$data);
            $this->load->view('Template/Admin/navbar',$data);
            $this->load->view('Admin/pegawai/tambah',$data);
            $this->load->view('Template/Admin/footer',$data);  
        }
        else{
            $this->pegawai_model->tambahDataPegawai();
            $this->session->set_flashdata('berhasil_tambah','<center> Data Pegawai Berhasil Di tambah.</center>');
            redirect('Admin/pegawai','refresh');
            echo "Data berhasil ditambah";
        }	
    }

}

/* End of file Controllername.php */
?>