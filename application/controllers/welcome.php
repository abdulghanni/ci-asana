<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        
        $this->load->helper('url');
        
        
    }

	public function index()
	{
		$params = array('api_key' => '5cn6fplQ.FLQTUKtRbQMOrFcYreJIuLX', 'format' => 'array');
		$this->load->library('asana', $params);

		$data = array();

		// Get all projects
		$data['projects'] = $this->asana->get('projects');

		// Get all users
		$data['users'] = $this->asana->get('users');

		// Get specific user
		$data['user'] = $this->asana->get('user', '3954779918032');

		// Get specific project
		$data['project'] = $this->asana->get('project', 'xxxxxxxxxxxx');

		$data['task'] = $this->asana->get('task', '24431223231135');
		//$data['task2'] = $this->asana->get('task2', '3954779918032');

		// Create new task
		$params = array(
			'workspace' => 'xxxxxxxxxxxx',
			'name' => 'New Task by Codeigniter',
			'notes' => 'Hi, this is my first task created by codeigniter',
			'assignee' => 'mailtoassign@domain.com',
			'assignee_status' => 'upcoming',
			"followers" => array()
			);

		// return all data of new task
		$data['new'] = $this->asana->post('task', $params);
		// var_export($data['new']);

		$this->load->view('welcome_message', $data);
	}

	public function get_task(){
		$params = array('api_key' => 'KdKB9bF.hQorlaM1RgmlsMbVg0270XPD', 'format' => 'array');
		$this->load->library('asana', $params);

		$data = array();
		
		$data['users'] = $this->asana->get('users');
		$data['user'] = $this->asana->get('user', $this->input->post('user'));
		$data['task2'] = $this->asana->get('task2', $this->input->post('user'));
		$this->load->view('sample_table', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */