<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\ReviewModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;


class ReviewController extends BaseController
{
    use ResponseTrait ;
    public function index()
    {
        $model = new ReviewModel();
        $data =  $model->findAll();
        return $this-> respond($data);
    }

    public function show($id = null)
    {
        $model = new ReviewModel();
        $data = $model->getWhere(['id' => $id])->getResult();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }
    }

}
