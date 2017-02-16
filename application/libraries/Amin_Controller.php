<?php

class Admin_Controller extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library(array('form_validation', 'ion_auth'));

	}

}

/*-------------------------*/
/*AUTHOR: DEEPEN BAJRACHARYA
FILE : Admin_Controller.php
/*-------------------------*/
