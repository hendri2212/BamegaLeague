<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Content extends MY_Controller {

	public function __construct(){
		parent::__construct();
        $this->load->library('pagination');
		$this->load->model('Model'); // Load model ke controller ini
	}

	// ----------------
	// Data Game
	// ----------------
	public function index() {
		$data['dataGame']		= $this->model->dataGame();
		$data['AllTurnamenAktif']= $this->model->AllTurnamenAktif();
		$this->page('module/home/home', $data);
	}

	public function game() {
		$data['dataAllGame'] = $this->model->dataAllGame();
		$this->page('module/game/game', $data);
	}

	public function inputGame() {
		$this->page('module/game/inputGame');
	}

	public function editGame($id_game) {
		$data['editGame'] = $this->model->editGame($id_game);
		$this->page('module/game/editGame', $data);
	}

	public function updateGame($id_game) {
		$config['upload_path']   = './assets/gambar/game/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar_game');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			$this->model->updateGame($id_game);
		} else {
			$cek = $this->model->changeGambar($id_game);

			$remove_image = "./assets/gambar/game/".$cek->gambar_game;
			unlink($remove_image);
			
			$this->model->updateGame1($id_game, $gambar);
		}
	}

	public function group($id_game) {
		$data['dataGame']			= $this->model->dataGame();
		$data['AllTurnamenDetail']	= $this->model->AllTurnamenDetail($id_game);
		$this->page('module/group/group', $data);
	}

	public function saveGame() {
		$config['upload_path']   = './assets/gambar/game/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('gambar_game');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			echo "<script>alert('gambar wajib ada'); window.location.href='./inputGames'</script>";
		} else {
			$this->model->saveGame($gambar);
		}
	}
	public function deleteGame($id_game){
		$cek = $this->model->changeGambar($id_game);
		$remove_image = "./assets/gambar/game/".$cek->gambar_game;
		unlink($remove_image);
		$this->model->deleteGame($id_game);
	}

	public function enableGame($id_game) {
		$data = $this->model->enableGame($id_game);
	}

	public function disableGame($id_game) {
		$data = $this->model->disableGame($id_game);
	}

	// ----------------
	// Data Turnamen
	// ----------------
	public function turnamen() {
		$data['dataAllTurnamen']= $this->model->dataAllTurnamen();
		$this->page('module/turnamen/turnamen', $data);
	}

	public function inputTurnamen() {
		$data['dataAllGame'] = $this->model->dataAllGame();
		$this->page('module/turnamen/inputTurnamen', $data);
	}

	public function detailTurnamen($id_turnamen, $id_game) {
		$data['dataTeam']				= $this->model->dataTeam($id_game);
		$data['dataAllTeamTurnamen'] 	= $this->model->dataAllTeamTurnamen($id_game);
		$data['cekDataTeamTurnamen'] 	= $this->model->cekDataTeamTurnamen($id_turnamen);
		$this->page('module/turnamen/detailTurnamen', $data);
	}

	public function ikutiTurnamen($id_turnamen, $id_game) {
		$this->model->ikutiTurnamen($id_turnamen, $id_game);
	}

	public function tidakIkutiTurnamen($id_turnamen, $id_team, $id_game){
		$this->model->tidakIkutiTurnamen($id_turnamen, $id_team, $id_game);
	}

	public function detailOneTurnamen($id_turnamen) {
		$data['detailOneTurnamenTeam']= $this->model->detailOneTurnamenTeam($id_turnamen);
		$data['detailOneTurnamenLimit']= $this->model->detailOneTurnamenLimit($id_turnamen);
		$data['detailOneTurnamen']= $this->model->detailOneTurnamen($id_turnamen);
		$data['dataAllTeam'] = $this->model->dataAllTeam();
		$this->page('module/detail/detail',$data);
	}

	public function saveTurnamen() {
		$config['upload_path']   = './assets/gambar/prize/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';
		$this->load->library('upload', $config);

		$this->upload->do_upload('gambar_prize_pool');
		$gbr = $this->upload->data();
		$gambar = $gbr['file_name'];

		$this->upload->do_upload('gambar_turnamen');
		$gbr1 = $this->upload->data();
		$gambar1 = $gbr1['file_name'];

		if (empty($gambar) OR empty($gambar1)) {
			echo "<script>alert('gambar wajib ada'); window.location.href='./inputTurnamen'</script>";
		} else {
			$this->model->saveTurnamen($gambar, $gambar1);
		}
	}

	public function editTurnamen($id_turnamen) {
		$data['editTurnamen'] = $this->model->editTurnamen($id_turnamen);
		$data['dataAllGame'] = $this->model->dataAllGame();
		$this->page('module/turnamen/editTurnamen', $data);
	}

	public function updateTurnamen($id_turnamen) {
		$config['upload_path']   = './assets/gambar/prize/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('gambar_prize_pool')){
			$this->upload->do_upload('gambar_turnamen');

			$gbr1 = $this->upload->data();
			$gambar_turnamen = $gbr1['file_name'];
		}elseif(!$this->upload->do_upload('gambar_turnamen')){
			$this->upload->do_upload('gambar_prize_pool');
			$gbr = $this->upload->data();

			$gambar_prize_pool = $gbr['file_name'];
		}else{
			$this->upload->do_upload('gambar_prize_pool');
			$gbr = $this->upload->data();
			
			$gambar_prize_pool = $gbr['file_name'];
			
			$this->upload->do_upload('gambar_turnamen');
			$gbr1 = $this->upload->data();
			
			$gambar_turnamen = $gbr1['file_name'];
		}

		if (empty($gambar_prize_pool) AND empty($gambar_turnamen)) :
			$this->model->updateTurnamen($id_turnamen);
		elseif (empty($gambar_turnamen)) :
			$gbr = $this->upload->data();

			$gambar_prize_pool = $gbr['file_name'];
			$cek = $this->model->changeGambarPrizePoolTurnamen($id_turnamen);

			$remove_image = "./assets/gambar/prize/".$cek->gambar_prize_pool;
			unlink($remove_image);

			$this->model->updateTurnamen1($id_turnamen, $gambar_prize_pool);
		elseif (empty($gambar_prize_pool)) :
			$cek = $this->model->changeGambarTurnamen($id_turnamen);

			$remove_image1 = "./assets/gambar/prize/".$cek->gambar_turnamen;
			unlink($remove_image1);

			$this->model->updateTurnamen2($id_turnamen, $gambar_turnamen);
		else :
			$cek = $this->model->changeAllGambarTurnamen($id_turnamen);

			$remove_image = "./assets/gambar/prize/".$cek->gambar_prize_pool;
			unlink($remove_image);
			$remove_image1 = "./assets/gambar/prize/".$cek->gambar_turnamen;
			unlink($remove_image1);
			
			$this->model->updateTurnamen3($id_turnamen, $gambar_prize_pool, $gambar_turnamen);
		endif ;
	}

	public function deleteTurnamen($id_turnamen){
		$cek = $this->model->changeGambarTurnamen($id_turnamen);
		$remove_image = "./assets/gambar/prize/".$cek->gambar_prize_pool;
		unlink($remove_image);
		$remove_image1 = "./assets/gambar/prize/".$cek->gambar_turnamen;
		unlink($remove_image1);
		$this->model->deleteTurnamen($id_turnamen);
	}

	// ----------------
	// Data Team
	// ----------------
	public function team() {
		$data['dataAllTeam'] = $this->model->dataAllTeam();
		$this->page('module/team/team', $data);
	}

	public function detailTeam($id_team) {
		$data['dataAllCommunities'] 	= $this->model->dataAllCommunities();
		$data['detailOneTeamPemain'] 	= $this->model->detailOneTeamPemain($id_team);
		$this->page('module/team/detailTeam', $data);
	}

	public function ikutiTeam($id_team) {
		$this->model->ikutiTeam($id_team);
	}

	public function tidakIkutiTeam($id_team, $id_pemain){
		$this->model->tidakIkutiTeam($id_team, $id_pemain);
	}

	public function inputTeam() {
		$data['dataAllGame'] = $this->model->dataAllGame();
		$this->page('module/team/inputTeam', $data);
	}

	public function saveTeam() {
		$config['upload_path']   = './assets/gambar/team/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('logo_team');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			echo "<script>alert('gambar wajib ada'); window.location.href='./inputTeam'</script>";
		} else {
			$this->model->saveTeam($gambar);
		}
	}

	public function editTeam($id_team) {
		$data['editTeam'] = $this->model->editTeam($id_team);
		$data['dataAllGame'] = $this->model->dataAllGame();
		$this->page('module/team/editTeam', $data);
	}

	public function updateTeam($id_team) {
		$config['upload_path']   = './assets/gambar/team/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('logo_team');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			$this->model->updateteam($id_team);
		} else {
			$cek = $this->model->changeGambarTeam($id_team);

			$remove_image = "./assets/gambar/team/".$cek->logo_team;
			unlink($remove_image);
			
			$this->model->updateTeam1($id_team, $gambar);
		}
	}

	public function deleteTeam($id_team){
		$cek = $this->model->changeGambarTeam($id_team);
		$remove_image = "./assets/gambar/team/".$cek->logo_team;
		unlink($remove_image);
		$this->model->deleteTeam($id_team);
	}
	// ----------------
	// Login
	// ----------------
	public function login(){
		$this->page('module/login/login');
	}

	public function cekLogin(){
		$this->model->cekLogin();
	}

	public function logOut(){
		$this->session->sess_destroy();
		redirect (base_url('./'));
	}
	
	// ----------------
	// Data Komunitas
	// ----------------
	public function communities(){
		$data['dataAllCommunities'] = $this->model->dataAllCommunities();
		$this->page('module/communities/communities', $data);
	}

	public function detailCommunities($id_pemain) {
		$data['cekDataTeamPemain'] = $this->model->cekDataTeamPemain($id_pemain);
		$data['detailCommunities'] = $this->model->detailCommunities($id_pemain);
		$data['detailCommunitiesNoTeam'] = $this->model->detailCommunitiesNoTeam($id_pemain);
		$this->page('module/communities/detailCommunities', $data);
	}

	public function search(){
		$data['dataAllCommunities'] = $this->model->search();
		$this->page('module/communities/communities', $data);
	}
	// ----------------
	// Data Pemain
	// ----------------
	public function pemain(){
		$data['dataAllCommunities'] = $this->model->dataAllCommunities();
		$this->page('module/pemain/pemain', $data);
	}

	public function inputPemain() {
		$this->page('module/pemain/inputPemain');
	}

	public function savePemain() {
		$config['upload_path']   = './assets/gambar/pemain/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name']  = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('foto_pemain');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			echo "<script>alert('gambar wajib ada'); window.location.href='./inputPemain'</script>";
		} else {
			$this->model->savePemain($gambar);
		}
	}

	public function editPemain($id_pemain) {
		$data['editPemain'] = $this->model->editPemain($id_pemain);
		$this->page('module/pemain/editPemain', $data);
	}

	public function updatePemain($id_pemain) {
		$config['upload_path']  = './assets/gambar/pemain/';
		$config['allowed_types']= 'gif|jpg|png|jpeg|bmp';
		$config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
		$config['max_size']		= '1000000';
		$config['max_width']	= '1024000';
		$config['max_height']	= '768000';

		$this->load->library('upload', $config);
		$this->upload->do_upload('foto_pemain');
		$gbr = $this->upload->data();

		$gambar = $gbr['file_name'];

		if (empty($gambar)) {
			$this->model->updatePemain($id_pemain);
		} else {
			$cek = $this->model->changeGambarPemain($id_pemain);

			$remove_image = "./assets/gambar/pemain/".$cek->foto_pemain;
			unlink($remove_image);
			
			$this->model->updatePemain1($id_pemain, $gambar);
		}
	}

	public function deletePemain($id_pemain){
		$cek = $this->model->changeGambarPemain($id_pemain);
		$remove_image = "./assets/gambar/pemain/".$cek->foto_pemain;
		unlink($remove_image);
		$this->model->deletePemain($id_pemain);
	}

	// ----------------
	// Data Nilai
	// ----------------

	public function nilai(){
		$data['dataNilai'] = $this->model->dataNilai();
		$this->page('module/nilai/nilai', $data);
	}

	public function inputNilai() {
		$data['dataAllTurnamen']  	= $this->model->dataAllTurnamen();
		$data['dataAllMatch'] 		= $this->model->dataAllMatch();
		$data['dataAllGroup'] 		= $this->model->dataAllGroup();
		$data['dataAllTeam']  		= $this->model->dataAllTeam();
		$this->page('module/nilai/inputNilai', $data);
	}

	public function saveNilai(){
		$this->model->saveNilai();
	}
	public function editNilai($id_nilai) {
		$data['editNilai'] 			= $this->model->editNilai($id_nilai);
		$data['dataAllTurnamen']	= $this->model->dataAllTurnamen();
		$data['dataAllTeam']  		= $this->model->dataAllTeam();
		$data['dataAllGroup'] 		= $this->model->dataAllGroup();
		$data['dataAllMatch'] 		= $this->model->dataAllMatch();
		$this->page('module/nilai/editNilai', $data);
	}

	public function updateNilai($id_nilai){
		$this->model->updateNilai($id_nilai);
	}

	public function deleteNilai($id_nilai){
		$this->model->deleteNilai($id_nilai);
	}

	
	// ----------------
	// Data Admin
	// ----------------
	
	public function admin(){
		$data['dataAllLogin'] = $this->model->dataAllLogin();
		$this->page('module/admin/admin', $data);
	}

	public function inputAdmin(){
		$this->page('module/admin/inputAdmin');
	}

	public function saveAdmin(){
		$this->model->saveAdmin();
	}

	public function editAdmin($id_user) {
		$data['editAdmin'] = $this->model->editAdmin($id_user);
		$this->page('module/admin/editAdmin', $data);
	}

	public function updateAdmin($id_user){
		$password = $this->input->post('password');
		if($password == ""){
			$this->model->updateAdmin($id_user);
		} else{
			$this->model->updateAdminPassword($id_user);
		}
	}

	public function deleteAdmin($id_user){
		$this->model->deleteAdmin($id_user);
	}
}