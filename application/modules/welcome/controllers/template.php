<?php
/**
 * Created by JetBrains PhpStorm.
 * User: An
 * Date: 14.04.12
 * Time: 19:52
 * To change this template use File | Settings | File Templates.
 */
class template extends CI_Controller
{
    public function index()
    {
        $this->load->view('head');
        $this->load->view('body');
        $this->load->view('footer');
    }

}
