<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserManual extends CI_Controller {

    function __construct(){
        parent::__construct();
    }
    
	public function index()
	{
		force_download('assets/file/user manual.pdf',NULL);

	}
}