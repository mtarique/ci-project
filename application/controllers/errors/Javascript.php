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
        $page_data['title'] = 'Javascript Disabled';
        $page_data['descr'] = 'It looks like javascript not running and set to disabled in your browser. <br>
        Please enable javascript in your browser\'s settings in order to access this site.';

        $this->load->view('errors/html/error_js', $page_data); 
    }
}
?>