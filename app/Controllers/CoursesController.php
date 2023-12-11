<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CourseModel;




class CoursesController extends BaseController
{
    private $courses ;
    protected $helpers = ['form'];

    public function __construct()
    {
        $this->courses = new CourseModel();
    }

    //show data
    public function index()
    {
        $data['courses'] = $this->courses->findAll();
        // print_r($data);
        return view('courses/allCourses', $data);
    }

    // insert data
    public function create(){
        return view('courses/insert');
    }

    public function store(){
        $data = [
            'course' => $this->request->getVar('name'),
            'category' => $this->request->getVar('cat'),
            'price' => $this->request->getVar('price'),
            'desc' => $this->request->getVar('desc'),
            // 'photo' => $this->request->getFile('photo')->getName('photo'),
        ];

        $rules = [
            'name' => 'required|max_length[30]',
            // 'photo' => 'uploaded[photo]|max_size[photo,1024]|ext_in[photo,jpg,jpeg]',
            // 'password' => 'required|max_length[255]|min_length[10]',
            // 'passconf' => 'required|max_length[255]|matches[password]',
            // 'email'    => 'required|max_length[254]|valid_email',
        ];

        if (!$this->validate($rules)){
            return view('/courses/insert');
        } else {
            $this->courses->insert($data);
            $session= session();
            $session->setFlashdata('msg', 'Inserted Successfully');
            $this->response->redirect('/courses');
        }
    }
}
