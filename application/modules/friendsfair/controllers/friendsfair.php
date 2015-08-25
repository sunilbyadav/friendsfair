<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friendsfair extends REST_Controller {

	 public function __construct()
  {
    parent::__construct();

   include APPPATH . 'third_party/Facebook/autoload.php';
    
  }

	public function index_get()
	{
		$this->load->view('friendsfair_view');

		$fb = new Facebook\Facebook(['app_id' => '1009973879053286', 'app_secret' => '0822af5ebcae25a7cdc27412fb029855', 'default_graph_version' => 'v2.4']);        

		$helper = $fb->getRedirectLoginHelper();
            
        $permissions = ['email'];
        
        // Optional permissions
        $scope = ['email', 'user_likes', 'email', 'public_profile'];
        $loginUrl = $helper->getLoginUrl('http://staging.vpc.viral9.com/login_page/facebook_redirect_handler', $scope);
        
        print_r($loginUrl);
	}
}

?>