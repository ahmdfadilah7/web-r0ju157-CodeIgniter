<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanPemasukkan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Log_model', 'lm');
		$this->load->model('Main_model', 'mm');
		$this->load->model('Pembayaran_model', 'pm');
		$this->load->model('Pemasukkan_model', 'pemo');
	}
	public function index()
	{
		$this->mm->check_login();
		$data['dataUser'] = $this->mm->dataUser();
		$data['title'] = 'Halaman Laporan Pemasukkan';
		$data['pemasukkan'] = $this->pemo->getPemasukkanTgl(date('Y-m-d'), date('Y-m-d'));
		if (isset($_POST['cari_tanggal'])) {
			$tanggal_awal = date('Y-m-d', strtotime($this->input->post('tanggal_awal', true)));
			$tanggal_akhir = date('Y-m-d', strtotime($this->input->post('tanggal_akhir', true)));
			$data['pemasukkan'] = $this->pemo->getPemasukkanTgl($tanggal_awal, $tanggal_akhir);
			// kirim data tanggal untuk riwayat penelusuran
			$data['tanggal_awal'] = $this->input->post('tanggal_awal');
			$data['tanggal_akhir'] = $this->input->post('tanggal_akhir');
		}

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('laporan/pemasukkan', $data);
		$this->load->view('templates/tutup_sidebar', $data);
		$this->load->view('templates/footer', $data);
	}
}