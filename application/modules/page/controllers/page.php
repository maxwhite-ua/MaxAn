<?php
/**
 * Created by JetBrains PhpStorm.
 * User: maxwhite_ua
 * Date: 11.04.12
 * Time: 23:53
 * To change this template use File | Settings | File Templates.
 */
class page extends CI_Controller {
    function index(){
        $this->load->view('view', array('method' => "Index Page Action"));
    }
}