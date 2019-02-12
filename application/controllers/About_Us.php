<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_Us extends CI_Controller {

		public function __construct()
		{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->library('user_agent');
		$this->load->helper('directory');
		$this->load->helper('cookie');
		$this->load->helper('security');
		$this->load->model('Users_model');

		}


	public function index(){

         $data['logo_details']=$this->Users_model->get_home_logo_details();
				$data['aboutus_details']=$this->Users_model->get_home_aboutus_details();
        $data['contactus_details']=$this->Users_model->get_home_contactus_details();
        $data['active_status']=2;//for About Us  active
				$this->load->view('html/aboutus',$data);


	}
}
