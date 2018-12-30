<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Buku_Model');
		$this->load->model('Buku_Model');
		$this->load->model('Kategori_Model');
	}

	public function index()
	{
	$data = 
	[
		'title' => 'Kategori',
		'sub_title' => 'Kategori',
		'content' => 'kategori/index',
		'show' => $this->Kategori_Model->index()->result()
	];
	$this->load->view('template/my_template', $data);
	}

	/*fungsi add untuk memanggil form input data kategori*/

	public function add()
	{
	$data = 
	[
		'title' => 'Kategori',
		'sub_title' => 'Tambah Kategori',
		'content' => 'kategori/add',
		'show_kategori' => $this->Kategori_Model->index()->result()
	];
	$this->load->view('template/my_template', $data);
	}
	/**/

	public function create()
	{

		
		$id_kategori = $this->input->post('id_kategori');
		$nama_kategori = $this->input->post('nama_kategori');
		
		$data = array(

			'id_kategori' => $id_kategori,
			'nama_kategori' => $nama_kategori
			

					);

		$create = $this->Kategori_Model->create($data);
		if ($create) {
			$this->session->set_flashdata('pesan_create', true);
			redirect('kategori');
		}else{
			$this->session->set_flashdata('pesan_create', false);
			redirect('kategori');
		}
	
	}


}