<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

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
	public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
	
	public function AddEvent()
    {
    	$info['title'] = isset($_POST['title']) ? $_POST['title'] : "";
		$info['start'] = isset($_POST['start']) ? $_POST['start'] : "";
		$info['end'] = isset($_POST['end']) ? $_POST['end'] : "";
		$info['accept'] = 0;
        $result = $this->User_model->AddInfo($info);
        echo $result;   
    }
	public function FetchEvent()
    {
    	$result = $this->User_model->FetchInfo();
		echo json_encode($result);
    }
	public function DropEvent()
    {
    	$info['id'] = $_POST['id'];
		$info['title'] = $_POST['title'];
		$info['start'] = $_POST['start'];
		$info['end'] = $_POST['end'];
		$info['accept'] = 0;
		$result = $this->User_model->DropInfo($info);
		echo $result;
    }
	public function DelEvent()
    {
    	$info['id'] = $_POST['id'];
		$result = $this->User_model->DelInfo($info);
		echo $result;

    }
	public function AcceptEvent()
    {
    	$info['id'] = $_POST['id'];
    	$info['accept'] = 1;
		$result = $this->User_model->AcceptInfo($info);
		echo $result;

    }
	public function AdminFetchEvent()
    {
    	$result = $this->User_model->AdminFetchInfo();
		echo json_encode($result);
    }
}
