<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\CourseModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;


class CourseController extends BaseController
{
    use ResponseTrait ;
    public function index()
    {
        $model = new CourseModel();
        $data =  $model->findAll();
        return $this-> respond($data);
    }

    public function show($id = null)
    {
        $model = new CourseModel();
        $data = $model->getWhere(['id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }

}
