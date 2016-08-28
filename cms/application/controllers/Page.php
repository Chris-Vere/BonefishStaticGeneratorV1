<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CMS_Controller {
	public function index(){
        echo 'index';
    }

    public function edit($pageID=""){
		$EDIT_MODE = true;
        $dbResults = $this->CMS_model->getAllPageData($pageID);

		$data = array();
		foreach ($dbResults as $key => $value){
			if($key !== 'CONTENT_ITEMS'){
				$data[$key] = $value;
			}
		}

		$data['PAGE_CONTENT_DATA'] = array(
			'PAGE_ID'       => $pageID,
			'CONTENT_ITEMS' => $dbResults['CONTENT_ITEMS'],
			'EDIT_MODE'     => $EDIT_MODE
		);

        $data['EDIT_MODE'] = $EDIT_MODE;

		echo("<pre>"); print_r($data); echo ("</pre>");

        $this->buildPage(array(
            'view' => 'v--page--edit',
            'bodyContent' => $data
        ));

    }
}
