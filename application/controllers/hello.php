<?php
/**
 * Created by PhpStorm.
 * User: SHOHRUX
 * Date: 13.09.16
 * Time: 23:31
 */

class Hello extends CI_Controller {

    public function index () {
        $this->load->view('hello_message');
    }

} 