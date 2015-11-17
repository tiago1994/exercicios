<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{
	public function autenticar(){
		$this->load->model("usuarios_model");
		$email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));
		$usuario = $this->usuarios_model->buscaPorEmaileSenha($email, $senha);
		if($usuario){
			$dados = array("mensagem" => "Logado com sucesso!");
		}else{
			$dados = array("mensagem" => "Não logado com sucesso!");
		}
		$this->load->view("login/autenticar", $dados);
	}
}
?>