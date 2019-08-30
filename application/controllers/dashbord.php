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
	
	function add_suratdomisili()
	{
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$tempatlahir = $this->input->post('tempatlahir');
		$tgllahir = $this->input->post('tgllahir');
		$agama = $this->input->post('agama');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat_lama = $this->input->post('alamat_lama');
		$alamat_baru = $this->input->post('alamat_baru');
		$keperluan = $this->input->post('keperluan');
	
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'tempatlahir' => $tempatlahir,
			'tgllahir' => $tgllahir,
			'agama' => $agama,
			'pekerjaan' => $pekerjaan,
			'alamat_lama' => $alamat_lama,
			'alamat_baru' => $alamat_baru,
			'keperluan' => $keperluan,
			
		);
		$this->M_data->add_suratdomisili($data, 'suratdomisili');
		echo "<script>
                alert('Permintaan terkirim!');
                </script>";
		echo '<script>window.location="index";</script>';
	}
}
function add_suratpengantarpindah()
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