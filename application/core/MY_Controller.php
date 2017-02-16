<?php

class MY_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->user_id = $this->session->userdata('user_id');
		//$this->permission->is_logged_in();

		$data = new stdClass();

		$data->the_user = $this->user_data();
		$this->the_user = $data->the_user;
		//$this->load->vars($data);
		$this->current_datetime = date("Y-m-d H:i:s");
	}

	function load_language()
	{
        $this->lang->load('site', $this->the_user->site_language);
	}

	function get_header_meta()
	{
		$meta = array();

		/*

		$this->load->model('mail_incoming_model');

		$row = $this->mail_incoming_model->get_many_by(array('user_id'=>$this->user_id, 'read_status'=>'N'));


		if($row)
		{
			$meta['new_message'] = sizeof($row);
		}*/

		return $meta;
	}

}

?>
