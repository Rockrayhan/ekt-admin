<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReviewModel;


class ReviewControleller extends BaseController
{
    private $reviews ;
    protected $helpers = ['form', 'file', 'url'];


    public function __construct()
    {
        $this->reviews = new ReviewModel();
    }

    // show data
    public function index()
    {
        $data['testimonials'] = $this->reviews->findAll();
        // print_r($data);
        return view('reviews/allReviews', $data);
    }

        // delete
        public function delete($id){
            $this->reviews->where('id', $id);
            $this->reviews->delete();
            $this->response->redirect('/reviews');
        }
}
