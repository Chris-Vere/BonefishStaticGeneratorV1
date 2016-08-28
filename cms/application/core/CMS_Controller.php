<?php
class CMS_Controller extends CI_Controller {
    public function __construct() {
       parent::__construct();
    }

    public function buildPage($data){
        $insertionData = $data;
         if(!array_key_exists('bodyContent', $data)){
            $data['bodyContent'] = '';
        }
        $this->load->view('cms/sections/v--cms-header');
        $this->load->view('cms/' . $data['view'], $data['bodyContent']);
        $this->load->view('cms/sections/v--cms-footer');
    }
}
