<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukkan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pemasukkan_model', 'pemo');
		$this->load->model('Main_model', 'mm');
		$this->load->model('Menu_model', 'memo');
	}

	public function index()
	{
		$this->mm->check_login();
		$data['dataUser'] = $this->mm->dataUser();
		$data['pemasukkan'] = $this->pemo->getAllPemasukkan();
        $data['menu'] = $this->memo->getAllMenuByOutletUserLogin();
        $data['title'] = "Halaman Pemasukkan";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('pemasukkan/index', $data);
		$this->load->view('templates/tutup_sidebar', $data);
		$this->load->view('templates/footer', $data);
	}

    public function menu($id)
    {
        $menu = $this->db->query(
            "SELECT * FROM tb_menu WHERE id_menu = '$id'" 
        )->row();

        echo json_encode($menu);
    }

	public function addPemasukkan()
	{
		$this->pemo->addPemasukkan();
	}

	public function editPemasukkan($kode_invoice)
	{
		$this->pemo->editPemasukkan($kode_invoice);
	}

	public function deletePemasukkan($kode_invoice)
	{
		$this->pemo->deletePemasukkan($kode_invoice);
	}
}