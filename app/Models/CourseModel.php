<?php

namespace App\Models;
use CodeIgniter\Model;

class CourseModel extends model
{
    protected $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function saveCourse($data) {
        $this->db->transStart();

        try {
            // Insert into courses table
            $courseSql = "INSERT INTO `courses` (name, level, description, image_path) VALUES (?, ?, ?, ?)";
            $courseParams = [$data['name'], $data['level'], $data['description'], $data['image_path']];
            $this->db->query($courseSql, $courseParams);
            $courseId = $this->db->insertId();

            // Insert into batches table
            $batchSql = "INSERT INTO `batches` (batch_name, batch_date, course_id) VALUES (?, ?, ?)";
            $batchParams = [$data['batch'], $data['batchDate'], $courseId];
            $this->db->query($batchSql, $batchParams);
            $batchId = $this->db->insertId();

            // Insert into assign table
            $assignSql = "INSERT INTO `assign` (course_id, batch_id, user_id, batch_date) VALUES (?, ?, ?, ?)";
            $assignParams = [$courseId, $batchId, $data['instructor'], $data['batchDate']];
            $this->db->query($assignSql, $assignParams);

            $this->db->transCommit();

            return ['status' => 'success', 'message' => 'Course saved successfully!'];
        } catch (Exception $e) {
            $this->db->transRollback();

            return ['status' => 'fail', 'message' => 'Failed to save the course.'];
        }
    }

    public function saveAddAssign($course, $instructor, $batch, $batchDate) {
        $this->db->transStart();

        $batchSql = "INSERT INTO `batches` (batch_name, batch_date, course_id) VALUES (?, ?, ?)";
        $batchParams = [$batch, $batchDate, $course];
        $this->db->query($batchSql, $batchParams);

        if ($this->db->affectedRows() > 0) {
            $batchId = $this->db->insertId();

            $assignSql = "INSERT INTO `assign` (course_id, batch_id, user_id, batch_date) VALUES (?, ?, ?, ?)";
            $assignParams = [$course, $batchId, $instructor, $batchDate];
            $this->db->query($assignSql, $assignParams);

            if ($this->db->affectedRows() > 0) {
                $this->db->transCommit();
                return ['status' => 'success', 'message' => 'Lecture assigned successfully!'];
            } else {
                $this->db->transRollback();
                return ['status' => 'fail', 'message' => 'Failed to assign the lecture.'];
            }
        } else {
            $this->db->transRollback();
            return ['status' => 'fail', 'message' => 'Failed to add the batch.'];
        }
    }

    public function list_instructors () {
        $sql = "SELECT `loginid` , `username` FROM `login` WHERE `user_type` = 'U'";
        $res = $this->db->query($sql)->getResultArray();
        return $res;
    }

    public function list_courses () {
        $sql = "SELECT `id`, `name` FROM `courses`";
        $res = $this->db->query($sql)->getResultArray();
        return $res;
    }

    public function checkAssigned ($course,$instructor,$batch,$batchDate) {
        $sql = "SELECT * FROM `assign` WHERE `batch_date` = '".$batchDate."' AND `user_id` = '".$instructor."' ";
        $res = $this->db->query($sql);

        if($res->getNumRows() == 0) {
            return ['status' => 'unique'];
        } else {
            return ['status' => 'duplicate']; 
        }

    }
    
}
