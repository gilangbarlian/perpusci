<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Buku_Model');

		$this->load->model('Anggota_Model');
	}

	public function index()
	{
	$data = 
	[
		'title' => 'Anggota',
		'sub_title' => 'Anggota',
		'content' => 'anggota/index',
		'show' => $this->Anggota_Model->index()->result()
	];
	$this->load->view('template/my_template', $data);
	}

	/*fungsi add untuk memanggil form input data anggota*/

	public function add()
	{
	$data = 
	[
		'title' => 'Anggota',
		'sub_title' => 'Tambah Anggota',
		'content' => 'anggota/add',
		'show_anggota' => $this->Anggota_Model->index()->result()
	];
	$this->load->view('template/my_template', $data);
	}
	/**/

	public function create()
	{

		
		$id_anggota = $this->input->post('id_anggota');
		$nama_anggota = $this->input->post('nama_anggota');
		$gender = $this->input->post('gender');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$data = array(

			'id_anggota' => $id_anggota,
			'nama_anggota' => $nama_anggota,
			'gender' => $gender,
			'no_telp' => $no_telp,
			'alamat' => $alamat,
			'email' => $email,
			'password' => $password
			

					);

		$create = $this->Anggota_Model->create($data);
		if ($create) {
			$this->session->set_flashdata('pesan_create', true);
			redirect('anggota');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('anggota');
		}
	
	}


}