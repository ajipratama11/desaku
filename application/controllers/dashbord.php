<?php
defined('BASEPATH') or exit('No direct script access allowed');

class dashbord extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_data');
	
	}

	public function index()
	{
	
		$this->load->view('user/dashbord');
		
	}
	function add_akta()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tempatlahir = $this->input->post('tempatlahir');
		$tgllahir = $this->input->post('tgllahir');
		$agama = $this->input->post('agama');
		$keperluan = $this->input->post('keperluan');
	
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'tempatlahir' => $tempatlahir,
			'tgllahir' => $tgllahir,
			'agama' => $agama,
			'keperluan' => $keperluan,
			
		);
		$this->M_data->add_akta($data, 'akta');
		echo "<script>
                alert('Permintaan terkirim!');
                </script>";
		echo '<script>window.location="index";</script>';
	}

	function add_sktm()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$ttl = $this->input->post('ttl');
		$jenis_kel = $this->input->post('jenis_kel');
		$agama = $this->input->post('agama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
		$keperluan = $this->input->post('keperluan');
	
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'ttl' => $ttl,
			'jenis_kel' => $jenis_kel,
			'agama' => $agama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan,
			'keperluan' => $keperluan,
			
		);
		$this->M_data->add_sktm($data, 'sktm');
		echo "<script>
                alert('Permintaan terkirim!');
                </script>";
		echo '<script>window.location="index";</script>';
	}

	function add_kk()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tempatlahir = $this->input->post('tempatlahir');
		$tgllahir = $this->input->post('tgllahir');
		$agama = $this->input->post('agama');
		$keperluan = $this->input->post('keperluan');
	
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'tempatlahir' => $tempatlahir,
			'tgllahir' => $tgllahir,
			'agama' => $agama,
			'keperluan' => $keperluan,
			
		);
		$this->M_data->add_akta($data, 'akta');
		echo "<script>
                alert('Permintaan terkirim!');
                </script>";
		echo '<script>window.location="index";</script>';
	}

	function add_ktp()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tempatlahir = $this->input->post('tempatlahir');
		$tgllahir = $this->input->post('tgllahir');
		$agama = $this->input->post('agama');
		$keperluan = $this->input->post('keperluan');
	
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'tempatlahir' => $tempatlahir,
			'tgllahir' => $tgllahir,
			'agama' => $agama,
			'keperluan' => $keperluan,
			
		);
		$this->M_data->add_akta($data, 'akta');
		echo "<script>
                alert('Permintaan terkirim!');
                </script>";
		echo '<script>window.location="index";</script>';
	}

	function add_surattanah()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tempatlahir = $this->input->post('tempatlahir');
		$tgllahir = $this->input->post('tgllahir');
		$agama = $this->input->post('agama');
		$keperluan = $this->input->post('keperluan');
	
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'tempatlahir' => $tempatlahir,
			'tgllahir' => $tgllahir,
			'agama' => $agama,
			'keperluan' => $keperluan,
			
		);
		$this->M_data->add_akta($data, 'akta');
		echo "<script>
                alert('Permintaan terkirim!');
                </script>";
		echo '<script>window.location="index";</script>';
	}
	
	function add_rekom()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$tempatlahir = $this->input->post('tempatlahir');
		$tgllahir = $this->input->post('tgllahir');
		$agama = $this->input->post('agama');
		$keperluan = $this->input->post('keperluan');
	
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'tempatlahir' => $tempatlahir,
			'tgllahir' => $tgllahir,
			'agama' => $agama,
			'keperluan' => $keperluan,
			
		);
		$this->M_data->add_akta($data, 'akta');
		echo "<script>
                alert('Permintaan terkirim!');
                </script>";
		echo '<script>window.location="index";</script>';
	}
}
