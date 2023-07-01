<?php

namespace App\Controllers;

use App\Models\LoginModel;
use App\Models\CourseModel;
use App\Models\HomeModel;

class Home extends BaseController
{
    protected $loginModel;
    protected $courseModel;
    protected $homeModel;

    public function __construct()
    {
        $this->loginModel = new LoginModel();
        $this->courseModel = new CourseModel();
        $this->homeModel = new HomeModel();
    }

    public function index()
    {
        helper(['form']);
        return view('login');
    }

    public function adminlogin () {        
        $result = $this->loginModel->check_login($this->request->getVar('username'),$this->request->getVar('password'));
        
        $session=session();
        if($result != null && $result['user_type'] == 'A') { 
            $session->set('logged_user', $result['username']);
            $session->set('user_type', $result['user_type']); 
            $session->set('user_id', $result['loginid']); 

            return redirect()->to(base_url('dashboard'));

        }
        else if($result != null && $result['user_type'] == 'U') {
            $session->set('logged_user', $result['username']);
            $session->set('user_type', $result['user_type']);
            $session->set('user_id', $result['loginid']); 

            return redirect()->to(base_url('show_lectures'));
        }
        else {
            return redirect()->to(base_url('/'))->with('msg', 'Invalid Username or Password');
        }
    }

    public function userdashboard()
    {
        $session=session();
        $user_id = $session->get('user_id'); 
        $data['assigned'] =  $this->homeModel->count_Assigned($user_id);
        $data['tasks'] =  $this->homeModel->assigned_tasks($user_id);
        return view('userdashboard',$data);
    }

    public function logout(){

        $session=session();
        $session->destroy();
        return redirect()->to(base_url('/'));
    }

    public function dashboard()
    {
        $session=session();
        if($session->has('logged_user') && $session->get('user_type') == 'A' ) {
            $data['courses'] =  $this->homeModel->count_Courses();
            $data['courses'] =  $this->homeModel->count_Courses();
            $data['assigned'] =  $this->homeModel->ass_count();
            $data['instructor'] =  $this->homeModel->instructor_count();
            return view('dashboard', $data);
        }
        else{
            return view('login');
        }
    }


    public function addCourse () {
        return view('Courses/addCourse');
    }

    public function saveCourse () {
          $name = $this->request->getPost('cname');
          $level = $this->request->getPost('level');
          $description = $this->request->getPost('desc');
          $instructor = $this->request->getPost('inst');
          $batchDate = $this->request->getPost('batchDate');
  
          $check = $this->courseModel->checkAssigned($course ="",$instructor,$batch="",$batchDate);
          if($check['status'] == 'unique') {

            // Handle file upload
            $uploadDir = 'uploads/';
            $image = $this->request->getFile('Image');
    
            if ($image->isValid() && ! $image->hasMoved()) {
                $filename = $image->getRandomName();  
                $image->move($uploadDir, $filename);

                  $batch = $this->request->getPost('batch');

                $data = [
                    'name' => $name,
                    'level' => $level,
                    'description' => $description,
                    'image_path' => $uploadDir . $filename,
                    'instructor' => $instructor,
                    'batch' => $batch,
                    'batchDate' => $batchDate,
                ];
                $res = $this->courseModel->saveCourse($data);
                echo json_encode($res);
            }
        } else {
            echo json_encode(['status' => 'Failed', 'message' => 'Instructor is occupied for the day!']);
        }
    }

    public function get_Instructors () {
        $res = $this->courseModel->list_instructors();
        echo json_encode($res);
    }

    public function get_Courses () {
        $res = $this->courseModel->list_courses();
        echo json_encode($res);
    }

    public function addAssignLecture () {
        return view('Courses/addAssignLecture');
    }

    public function saveAddAssign () {
        $course = $this->request->getPost('course');
        $instructor = $this->request->getPost('inst');
        $batch = $this->request->getPost('batch');
        $batchDate = $this->request->getPost('batchDate');   

        $check = $this->courseModel->checkAssigned($course,$instructor,$batch,$batchDate);

        if($check['status'] == 'unique'){
            $res = $this->courseModel->saveAddAssign($course,$instructor,$batch,$batchDate);//trial
            echo json_encode($res);
        } else {
            echo json_encode(['status' => 'Failed', 'message' => 'Instructor is occupied for the day!']);
        }       
    }

    public function listCourse () {
        $data['courses'] =  $this->homeModel->courses_List();
        return view('Courses/coursesList',$data);
    }

    public function listInstructors () {
        $data['instructors'] =  $this->homeModel->instructor_List();
        return view('Instructors/instructorList',$data);
    }

    public function assigned_list () {
        $data['assigned'] =  $this->homeModel->assigned_List();
        return view('Instructors/assignedList',$data);
    }
}