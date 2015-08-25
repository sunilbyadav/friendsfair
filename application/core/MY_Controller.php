<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require(APPPATH.'libraries/REST_Controller.php');

class MY_Controller extends REST_Controller {

  public function __construct()
  {
    parent::__construct();

   /*//redirect('comming_soon');
    if($this->session->userdata('is_logged_in')!=true)
    {
    	redirect('landing_page');

    }
    */

    //$this->load->view('not_working','refresh');
  }
}

  ?>