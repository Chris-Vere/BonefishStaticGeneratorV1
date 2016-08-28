<?php
class CMS_model extends CI_Model {
    public function getAllPages(){
        $sql = "
            select * from PAGES
            order by URL
        ";
        $q = $this->db->query($sql);
        return $q->result_array();
    }

    public function getAllPageData($pageID = ""){
        $sql = "select * from PAGES where PAGES.PAGE_ID = ?";
        $q = $this->db->query($sql, array($pageID));
        $main = $q->row_array();

        $sql = "select * from CONTENT where CONTENT.PAGE_ID = ?";
        $q = $this->db->query($sql, array($pageID));
        $contentResults = $q->result_array();

        $content = array();
        for($i = 0; $i< count($contentResults); $i++){
            $content[$contentResults[$i]['SECTION_ID']] = $contentResults[$i];
        }
        $main['CONTENT_ITEMS'] = $content;

        return $main;
    }
}
