<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ui extends CMS_Controller {
    public function index(){
        $this->load->view('cms/ui-v1');
    }
}
