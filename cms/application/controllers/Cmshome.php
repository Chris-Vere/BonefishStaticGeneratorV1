<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmshome extends CMS_Controller {
	public function index(){
		echo 'homepage';
		//$this->buildPage();
	}

	public function test(){
		$sql = "select * from CONTENT where PAGE_ID = ?";
		$q   = $this->db->query($sql, array(1));
		$contentData = $q->result_array();

		$content = array();
		foreach($contentData as $contentItem){
			array_push($content, array(
				'CONTENT'    => $contentItem['CONTENT'],
				'CONTENT_ID' => $contentItem['CONTENT_ID']
			));
		}

		$viewData = array('content' => $content);
		echo '<pre>';
		print_r($viewData['content']);
		echo '</pre>=======================<br>';

		$this->load->view('templates/global/view-module-test', $viewData);
	}
}
