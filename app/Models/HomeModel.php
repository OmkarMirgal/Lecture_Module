<?php
namespace App\Models;
use CodeIgniter\Model;

class HomeModel extends Model{

    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function count_Courses(){
        $sql= "SELECT COUNT(`id`) as course_count FROM `courses`";
        $query = $this->db->query($sql)->getRowArray();
        return $query;
    }

    public function courses_List(){
        $sql= "SELECT `id`,`name`,`level`,`description`,`image_path` FROM `courses`;";
        $query = $this->db->query($sql)->getResultArray();
        return $query;
    }

    public function instructor_List () {
        $sql= "SELECT `loginid`, `username`,`user_type` FROM `login` WHERE `user_type` = 'U'";
        $query = $this->db->query($sql)->getResultArray();

        return $query;
    }

    public function count_Assigned($user_id){
        $sql= "SELECT COUNT(`id`) as assign_count FROM `assign` WHERE `user_id` = '".$user_id."' ";
        $query = $this->db->query($sql)->getRowArray();
        // echo "<pre>";print_r($query);exit;
        return $query;
    }

    public function assigned_List(){
        $sql= "SELECT a.`course_id`, c.`name`,a.`batch_id`, b.`batch_name` ,a.`batch_date`,a.`user_id`,e.`username` FROM `assign` as a
                INNER JOIN courses as c on c.`id` = a.`course_id`
                INNER JOIN batches as b on b.`id` = a.`batch_id`
                INNER JOIN login as e on e.`loginid` = a.`user_id`";
        $query = $this->db->query($sql)->getResultArray();
        // echo "<pre>";print_r($query);exit;
        return $query;
    }
    

    public function assigned_tasks($user_id){
        $sql = "SELECT a.`course_id`, c.`name`,a.`batch_id`, b.`batch_name` ,a.`batch_date`,a.`user_id`,e.`username` FROM `assign` as a 
                INNER JOIN courses as c on c.`id` = a.`course_id`
                INNER JOIN batches as b on b.`id` = a.`batch_id`
                INNER JOIN login as e on e.`loginid` = a.`user_id`
                WHERE `user_id` = '".$user_id."'";
        $query = $this->db->query($sql)->getResultArray();
        return $query;
    }


    public function ass_count(){
        $sql= "SELECT COUNT(`id`) as assign_count FROM `assign`";
        $query = $this->db->query($sql)->getRowArray();
        return $query;
    }

    public function instructor_count () {
        $sql= "SELECT COUNT(`loginid`) as inst_count FROM `login` WHERE `user_type` = 'U'";
        $query = $this->db->query($sql)->getRowArray();
        return $query;
    }
    
}

?>