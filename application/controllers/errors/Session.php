<?php 
/**
 * Session errors
 *
 * @package 	CI
 * @subpackage 	Controller 
 * @author 		MD TARIQUE ANWER | mtarique@outlook.com
 */
defined('BASEPATH') or exit('No direct script access allowed'); 

class Session extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); 
    }

    public function index()
    {
        $page_data['title'] = 'Session expired!';
        $page_data['descr'] = 'Your session has expired.';

        $this->load->view('errors/html/error_session', $page_data); 
    }
}
?>