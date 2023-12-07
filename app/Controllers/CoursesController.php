<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CourseModel;



class CoursesController extends BaseController
{
    private $courses ;

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
}
