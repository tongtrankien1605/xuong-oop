<?php

namespace Tongtrankien1605\XuongOop\Controllers\Client;

use Tongtrankien1605\XuongOop\Commons\Controller;

class ProductController extends Controller
{
    public function index(){
        echo __CLASS__ . '@' . __FUNCTION__ ;
        
    }

    public function detail($id){
        echo __CLASS__ . '@' . __FUNCTION__ ;

    }
}