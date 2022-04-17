<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public $jumlah_soal = 0;

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Model");
	}

	public function index()
	{
		$files_in_root = scandir( APPPATH . '/..' );
		foreach ($files_in_root as $key => $val) {
			if ( strpos($val, 'soal') !== false ) {
				$this->jumlah_soal++;
			}
		}

		$data['jumlah_soal'] = $this->jumlah_soal;

		if ( empty($this->session->userdata('email')) ) {
			redirect( base_url('login') . '?balik=' . base64_encode( base_url(uri_string()) ) );
			die;
		}
		$this->load->view('welcome_message', $data);
	}

	public function submit($nomor_soal)
	{

		$filters = [
			'exec',
			'passthru',
			'system',
			'shell_exec',
			'popen',
			'proc_open',
			'pcntl_exec',

			'assert',
			'preg_replace',
			'create_function',
			'include',
			'require',
			'$_GET',
			'invoke',

			'ob_start',
			'array_diff_uassoc',
			'array_diff_ukey',
			'array_filter',
			'array_intersect_uassoc',
			'array_intersect_ukey',
			'array_map',
			'array_reduce',
			'array_udiff_assoc',
			'array_udiff_uassoc',
			'array_udiff',
			'array_uintersect_assoc',
			'array_uintersect_uassoc',
			'array_uintersect',
			'array_walk_recursive',
			'array_walk',
			'assert_options',
			'uasort',
			'uksort',
			'usort',
			'preg_replace_callback',
			'spl_autoload_register',
			'iterator_apply',
			'call_user_func',
			'call_user_func_array',
			'register_shutdown_function',
			'register_tick_function',
			'set_error_handler',
			'set_exception_handler',
			'session_set_save_handler',
			'sqlite_create_aggregate',
			'sqlite_create_function',

			'phpinfo',
			'posix_mkfifo',
			'posix_getlogin',
			'posix_ttyname',
			'getenv',
			'get_current_user',
			'proc_get_status',
			'get_cfg_var',
			'disk_free_space',
			'disk_total_space',
			'diskfreespace',
			'getcwd',
			'getlastmo',
			'getmygid',
			'getmyinode',
			'getmypid',
			'getmyuid',

			'extract',
			'parse_str',
			'putenv',
			'ini_set',
			'mail',
			'header',
			'proc_nice',
			'proc_terminate',
			'proc_close',
			'pfsockopen',
			'fsockopen',
			'apache_child_terminate',
			'posix_kill',
			'posix_mkfifo',
			'posix_setpgid',
			'posix_setsid',
			'posix_setuid',

			'fopen',
			'tmpfile',
			'bzopen',
			'gzopen',
			'SplFileObject',
			'chgrp',
			'chmod',
			'chown',
			'copy',
			'file_put_contents',
			'lchgrp',
			'lchown',
			'link',
			'mkdir',
			'move_uploaded_file',
			'rename',
			'rmdir',
			'symlink',
			'tempnam',
			'touch',
			'unlink',
			'imagepng',
			'imagewbmp',
			'image2wbmp',
			'imagejpeg',
			'imagexbm',
			'imagegif',
			'imagegd',
			'imagegd2',
			'iptcembed',
			'ftp_get',
			'ftp_nb_get',
			'file_exists',
			'file_get_contents',
			'file',
			'fileatime',
			'filectime',
			'filegroup',
			'fileinode',
			'filemtime',
			'fileowner',
			'fileperms',
			'filesize',
			'filetype',
			'glob',
			'is_dir',
			'is_executable',
			'is_file',
			'is_link',
			'is_readable',
			'is_uploaded_file',
			'is_writable',
			'is_writeable',
			'linkinfo',
			'lstat',
			'parse_ini_file',
			'pathinfo',
			'readfile',
			'readlink',
			'realpath',
			'stat',
			'gzfile',
			'readgzfile',
			'getimagesize',
			'imagecreatefromgif',
			'imagecreatefromjpeg',
			'imagecreatefrompng',
			'imagecreatefromwbmp',
			'imagecreatefromxbm',
			'imagecreatefromxpm',
			'ftp_put',
			'ftp_nb_put',
			'exif_read_data',
			'read_exif_data',
			'exif_thumbnail',
			'exif_imagetype',
			'hash_file',
			'hash_hmac_file',
			'hash_update_file',
			'md5_file',
			'sha1_file',
			'highlight_file',
			'show_source',
			'php_strip_whitespace',
			'get_meta_tags',


			'<script>',
			'</script>',

			// sumber: https://gist.github.com/mccabe615/b0907514d34b2de088c4996933ea1720
		];

		// simpan jawaban
		$jawaban = $this->Model->get_jawaban( $this->session->userdata('user_id'),  $nomor_soal);
		if (!empty($jawaban)) {
			$this->Model->update_jawaban( $this->session->userdata('user_id'), $nomor_soal, $_POST['code'] );
		}else{
			$this->Model->add_jawaban( $this->session->userdata('user_id'), $nomor_soal, $_POST['code'] );
		}

		foreach ($filters as $key => $value) {
			if ( strpos($_POST['code'], $value) !== false ) {
					die('String <b style="color:red">'.$value.'</b> dideteksi sebagai upaya peretasan. <br> Mohon gunakan function atau command lain.');
			}
		}

		try {
			$data['hasil'] = eval($_POST['code']);
			$data['soal_berlanjut'] = (
					file_exists( base_url() . 'soal'.$_POST['nomor_soal'].'/soal.php' )
					AND file_exists( base_url() . 'soal'.$_POST['nomor_soal'].'/jawaban.php')
					AND file_exists( base_url() . 'soal'.$_POST['nomor_soal'].'/instruksi.php' )
			);
			if ( $data['hasil'] ) {
					echo json_encode($data);
					die();
			}
		}
		//catch exception
		catch(\Throwable $e) {
			echo $e->getMessage(), " at line ", $e->getLine(), "\n";
			die();
		}


	}

	public function set_sebagai_benar($nomor_soal)
	{
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->where('nomor_soal', $nomor_soal);
		echo $this->db->update('perang_coding_jawaban', ['salah_benar' => 'benar']);
	}

	public function set_sebagai_salah($nomor_soal)
	{
		$this->db->where('user_id', $this->session->userdata('user_id'));
		$this->db->where('nomor_soal', $nomor_soal);
		echo $this->db->update('perang_coding_jawaban', ['salah_benar' => 'salah']);
	}
}
