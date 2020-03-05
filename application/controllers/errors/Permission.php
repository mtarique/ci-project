<?php 
/**
 * Permission errors
 *
 * @package 	CI
 * @subpackage 	Controller 
 * @author 		MD TARIQUE ANWER | mtarique@outlook.com
 */
defined('BASEPATH') or exit('No direct script access allowed'); 

class Permission extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); 
    }

    public function index()
    {
        $page_data['title'] = 'Access denied!';
        $page_data['descr'] = 'You do not have enough privileges to access this page or function.<br>
                               Kindly contact system administrator.';

        $this->load->view('errors/html/error_perms', $page_data); 
    }
}
?>