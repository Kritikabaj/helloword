<?php

defined('BASEPATH') OR exit('No direct script access allowed');

abstract class SP_Model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    protected function sp_free_result($results=null){
        mysqli_next_result($this->db->conn_id);
        $results->free_result();
		return true;
    }

    protected function sp_call_single_result($str){
        if(!$this->db) return false;
        $results = $this->db->query("call ".$str);
        $result = $results->row_array();
        $this->sp_free_result($results);
		return $result;
    }

    protected function sp_call_multiple_results($str){
        if(!$this->db) return false;
        $results = array(); $k = 0;
        mysqli_multi_query($this->db->conn_id, "call ".$str);
        do {
            if($result = mysqli_store_result($this->db->conn_id)) {
                $l = 0;
                while($row = mysqli_fetch_assoc($result)) {
                    $results[$k][$l] = $row;
                    $l++;
                }
                $k++;
                mysqli_free_result($result);
            }
        }
        while(mysqli_more_results($this->db->conn_id) && mysqli_next_result($this->db->conn_id));
        return $results;
    }

}
