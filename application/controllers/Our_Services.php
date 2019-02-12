<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Our_Services extends CI_Controller {

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
			$data['gallery_details']=$this->Users_model->get_home_gallery_details();
        $data['contactus_details']=$this->Users_model->get_home_contactus_details();
          $data['active_status']=4;//for Our Services  active
				$this->load->view('html/our-services',$data);


	}
}
