<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CMS_Controller {
	public function index(){
        $contentBody['PAGES'] = $this->CMS_model->getAllPages();
        // echo("<pre>"); print_r($contentBody); echo ("</pre>");
        $pageData = array(
            'content--body' => $contentBody,
            'view'          => 'v--pages'
        );
        $this->buildPage($pageData);
    }
}
