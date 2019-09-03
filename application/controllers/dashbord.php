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
                alert('Permintaan terkirim!, Silahkan Ambil 3 hari lagi');
                </script>";
		echo '<script>window.location="index";</script>';
	}

	public function inputsktm()
    {
        $this->load->view('templates/header' );
        $this->load->view('templates/input_topbar');
        $this->load->view('user/inputsktm');
        $this->load->view('templates/footer');
    }
	public function inputkk()
    {
        $this->load->view('templates/header' );
        $this->load->view('templates/input_topbar');
        $this->load->view('user/inputkk');
        $this->load->view('templates/footer');
	}
	public function inputktp()
    {
        $this->load->view('templates/header' );
        $this->load->view('templates/input_topbar');
        $this->load->view('user/inputktp');
        $this->load->view('templates/footer');
	}
	public function inputakta()
    {
        $this->load->view('templates/header' );
        $this->load->view('templates/input_topbar');
        $this->load->view('user/inputakta');
        $this->load->view('templates/footer');
	}
	public function inputsurattanah()
    {
        $this->load->view('templates/header' );
        $this->load->view('templates/input_topbar');
        $this->load->view('user/inputakta');
        $this->load->view('templates/footer');
	}
	public function inputdomisili()
    {
        $this->load->view('templates/header' );
        $this->load->view('templates/input_topbar');
        $this->load->view('user/inputdomisili');
        $this->load->view('templates/footer');
	}
	public function inputpengantarpindah()
    {
        $this->load->view('templates/header' );
        $this->load->view('templates/input_topbar');
        $this->load->view('user/inputpengantarpindah');
        $this->load->view('templates/footer');
	}
	public function inputpengantarnikah()
    {
        $this->load->view('templates/header' );
        $this->load->view('templates/input_topbar');
        $this->load->view('user/inputpengantarnikah');
        $this->load->view('templates/footer');
	}
	public function inputpengantarcerai()
    {
        $this->load->view('templates/header' );
        $this->load->view('templates/input_topbar');
        $this->load->view('user/inputpengantarcerai');
        $this->load->view('templates/footer');
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
		alert('Permintaan terkirim!, Silahkan Ambil 3 hari lagi');
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
		alert('Permintaan terkirim!, Silahkan Ambil 3 hari lagi');
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
		
	
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'tempatlahir' => $tempatlahir,
			'tgllahir' => $tgllahir,
			'agama' => $agama,
			
			
		);
		$this->M_data->add_akta($data, 'akta');
		echo "<script>
		alert('Permintaan terkirim!, Silahkan Ambil 3 hari lagi');
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
		$luas_tanah = $this->input->post('luas_tanah');
		$harga_petak = $this->input->post('harga_petak');
	
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'alamat' => $alamat,
			'tempatlahir' => $tempatlahir,
			'tgllahir' => $tgllahir,
			'luas_tanah' => $luas_tanah,
			'harga_petak' => $harga_petak,
			
		);
		$this->M_data->add_surattanah($data, 'surattanah');
		echo "<script>
		alert('Permintaan terkirim!, Silahkan Ambil 3 hari lagi');
                </script>";
		echo '<script>window.location="index";</script>';
	}

	function add_domisili()
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
		$this->M_data->add_domisili($data, 'domisili');
		echo "<script>
		alert('Permintaan terkirim!, Silahkan Ambil 3 hari lagi');
                </script>";
		echo '<script>window.location="index";</script>';
	}
	function add_pengantarpindah()
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
		$this->M_data->add_pengantarpindah($data, 'pengantarpindah');
		echo "<script>
		alert('Permintaan terkirim!, Silahkan Ambil 3 hari lagi');
                </script>";
		echo '<script>window.location="index";</script>';
	}
	function add_pengantarnikah()
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
		$this->M_data->add_pengantarnikah($data, 'pengantarnikah');
		echo "<script>
		alert('Permintaan terkirim!, Silahkan Ambil 3 hari lagi');
                </script>";
		echo '<script>window.location="index";</script>';
	}
	function add_pengantarcerai()
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
		alert('Permintaan terkirim!, Silahkan Ambil 3 hari lagi');
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
