<?php

namespace App\Controllers;

class PaymentNotifHandling extends BaseController{
    public function index($orderid = null){
        $post = $this->request->getPost();
        print_r($post);
    }
}