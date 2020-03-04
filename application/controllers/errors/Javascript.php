<?php 
/**
 * Javascript errors
 *
 * @package 	CI
 * @subpackage 	Controller 
 * @author 		MD TARIQUE ANWER | mtarique@outlook.com
 */
defined('BASEPATH') or exit('No direct script access allowed'); 

class Javascript extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); 
    }

    public function index()
    {
        $page_data['title'] = 'Javascript error!';
        $page_data['descr'] = '';

        $this->load->view('errors/javascript_view', $page_data); 
    }
}
?>