<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrderModel;



class OrderController extends BaseController
{
    private $orders ;
    protected $helpers = ['form', 'file', 'url'];

    public function __construct()
    {
        $this->orders = new OrderModel();
    }


    public function index()
    {
        $data['orders'] = $this->orders->findAll();
        // print_r($data);
        return view('orders/orders', $data);
    }

        // delete
        public function delete($id){
            $this->orders->where('id', $id);
            $this->orders->delete();
            $this->response->redirect('/orders');
        }
}
