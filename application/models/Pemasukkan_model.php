<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemasukkan_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Main_model', 'mm');
		$this->load->model('Log_model', 'lm');
	}

	public function getPemasukkanById($id_pemasukkan)
	{
		return $this->db->get_where('tb_pemasukkan', ['id_pemasukkan' => $id_pemasukkan])->row_array();
	}

	public function getAllPemasukkan()
	{
        $this->db->select('tb_menu.nama_menu, tb_pemasukkan.*');
        $this->db->join('tb_menu', 'tb_pemasukkan.id_menu=tb_menu.id_menu');
		$this->db->order_by('id_pemasukkan', 'desc');
		return $this->db->get('tb_pemasukkan')->result_array();
	}

	public function getpemasukkanTgl($tanggal_awal, $tanggal_akhir)
	{
		$query = "SELECT * FROM tb_pemasukkan
			LEFT JOIN tb_user ON tb_pemasukkan.id_user = tb_user.id_user
            INNER JOIN tb_menu ON tb_pemasukkan.id_menu = tb_menu.id_menu
			WHERE tb_pemasukkan.tanggal_pemasukkan BETWEEN '$tanggal_awal' AND '$tanggal_akhir'
			ORDER BY tb_pemasukkan.id_pemasukkan DESC
		";
		return $this->db->query($query)->result_array();
	}
	
	public function addPemasukkan()
	{
		$data = [
			'id_menu' => $this->input->post('id_menu', true),
			'harga_beli' => $this->input->post('harga_beli', true),
			'harga_jual' => $this->input->post('harga_jual', true),
			'jumlah' => $this->input->post('jumlah', true),
			'laba_kotor' => $this->input->post('jumlah', true)*$this->input->post('harga_jual', true),
			'laba_bersih' => $this->input->post('jumlah', true)*$this->input->post('harga_beli', true),
			'tanggal_pemasukkan' => time(),
			'id_user' => $this->mm->dataUser()['id_user']
		];
		
		$nama_user = $this->mm->dataUser()['nama_user'];
		$this->db->insert('tb_pemasukkan', $data);
		$this->session->set_flashdata('message-success', 'pemasukkan berhasil ditambahkan oleh ' . $nama_user);
		$this->lm->addLog('pemasukkan berhasil ditambahkan oleh <b>' . $nama_user . '</b>', $this->mm->dataUser()['id_user']);
		// $this->lpm->addLogpemasukkan('pemasukkan berhasil ditambahkan oleh <b>' . $nama_user . '</b>');
		redirect('pemasukkan');
	}

	public function editPemasukkan($id_pemasukkan)
	{
		$data = [
			'id_menu' => $this->input->post('id_menu', true),
			'harga_beli' => $this->input->post('harga_beli', true),
			'harga_jual' => $this->input->post('harga_jual', true),
			'jumlah' => $this->input->post('jumlah', true),
			'laba_kotor' => $this->input->post('jumlah', true)*$this->input->post('harga_jual', true),
			'laba_bersih' => $this->input->post('jumlah', true)*$this->input->post('harga_beli', true),
			'tanggal_pemasukkan' => time(),
			'id_user' => $this->mm->dataUser()['id_user']
		];
		
		$nama_user = $this->mm->dataUser()['nama_user'];
		$this->db->update('tb_pemasukkan', $data, ['id_pemasukkan' => $id_pemasukkan]);
		$this->session->set_flashdata('message-success', 'pemasukkan berhasil diubah oleh ' . $nama_user);
		$this->lm->addLog('pemasukkan berhasil diubah oleh <b>' . $nama_user . '</b>', $this->mm->dataUser()['id_user']);
		redirect('pemasukkan');
	}

	public function deletePemasukkan($id_pemasukkan)
	{
		$data = $this->getpemasukkanById($id_pemasukkan);
		$this->db->delete('tb_pemasukkan', ['id_pemasukkan' => $id_pemasukkan]);
		$this->session->set_flashdata('message-success', 'pemasukkan berhasil dihapus oleh ' . $this->mm->dataUser()['nama_user']);
		$this->lm->addLog('pemasukkan berhasil dihapus oleh ' . $this->mm->dataUser()['nama_user'], $this->mm->dataUser()['id_user']);
		redirect('pemasukkan');
	}
}