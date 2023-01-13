<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Network extends CI_Controller
{
	public $session_key = "network_key_check";

	public function index()
	{
		$this->MemberModel->check($this->session_key);
		$data = array();
		$data['title'] = "[[LABEL_MY_TEAM]]";
		userTemplate("member/network/index", $data);
	}

	public function sponsored($userid = "")
	{
		$this->MemberModel->check($this->session_key);
		$req['access_token'] = $_SESSION['userSession'];
		$req['target'] = $userid;
		if (isset($_POST['txtSearch'])) {
			$req['target'] = $data['txtSearch'] = $_POST['txtSearch'];
		}
		$response = post_curl("network/sponsored", $req);
		$data['members'] = $response['data'];
		$data['title'] = "[[LABEL_NETWORK_SPONSORED]]";
		$data['header_back_url'] = "network";
		userTemplate("member/network/sponsored", $data);
	}

	public function placement($userid = "")
	{
		$this->MemberModel->check($this->session_key);
		$req['access_token'] = $_SESSION['userSession'];
		$req['target'] = $userid;
		if (isset($_POST['txtSearch'])) {
			$req['target'] = $data['txtSearch'] = $_POST['txtSearch'];
		}
		$data['title'] = "[[LABEL_NETWORK_SPONSORED]]";
		$data['header_back_url'] = "network";
		userTemplate("member/network/placement", $data);
	}
}
