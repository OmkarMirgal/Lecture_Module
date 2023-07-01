<?php
namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model{

    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function check_login ($user,$pass) {
        $sql= "SELECT `loginid`,`username`,`user_type` FROM `login` WHERE BINARY `username` = '".$user."' AND BINARY `password` = '".$pass."' ";
        $query = $this->db->query($sql)->getRowArray();
        return $query;
    }
}

?>