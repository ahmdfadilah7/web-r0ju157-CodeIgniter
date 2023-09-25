<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengeluaran extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengeluaran_model', 'pemo');
		$this->load->model('Main_model', 'mm');
		$this->load->model('Menu_model', 'memo');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->mm->check_login();
		$data['dataUser'] = $this->mm->dataUser();
		$data['pengeluaran'] = $this->pemo->getAllPengeluaran();
		$data['title'] = "Halaman Pengeluaran";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('pengeluaran/index', $data);
		$this->load->view('templates/tutup_sidebar', $data);
		$this->load->view('templates/footer', $data);
	}

	public function addPengeluaran()
	{
		$this->form_validation->set_rules('jumlah_pengeluaran', 'Jumlah pengeluaran', 'required|numeric');
		$this->form_validation->set_rules('keterangan_pengeluaran', 'Keterangan pengeluaran', 'required');
		$this->form_validation->set_message('required', '{field} wajib diisi !!!');
		$this->form_validation->set_message('numeric', '{field} harus berupa angka !!!');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url('pengeluaran'));
		} else {
			$this->pemo->addPengeluaran();
		}
	}

	public function editPengeluaran($kode_invoice)
	{
		$this->form_validation->set_rules('jumlah_pengeluaran', 'Jumlah pengeluaran', 'required|numeric');
		$this->form_validation->set_rules('keterangan_pengeluaran', 'Keterangan pengeluaran', 'required');
		$this->form_validation->set_message('required', '{field} wajib diisi !!!');
		$this->form_validation->set_message('numeric', '{field} harus berupa angka !!!');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('errors', validation_errors());
			redirect(base_url('pengeluaran'));
		} else {
			$this->pemo->editPengeluaran($kode_invoice);
		}
	}

	public function deletePengeluaran($kode_invoice)
	{
		$this->pemo->deletePengeluaran($kode_invoice);
	}
}