<?php
namespace App\Controllers;
class error extends BaseController{
    public function errorCode($code){
		if($code == "400"){
			return $this->response->setStatusCode($code)->setBody(view("errors/html/errorCode",["code"=>$code,"reason"=>"Bad Request"]));
		}
		else if($code == "401"){
			return $this->response->setStatusCode($code)->setBody(view("errors/html/errorCode",["code"=>$code,"reason"=>"Unauthorized"]));
		}
		else if($code == "402"){
			return $this->response->setStatusCode($code)->setBody(view("errors/html/errorCode",["code"=>$code,"reason"=>"Payment Required"]));
		}
		else if($code == "403"){
			return $this->response->setStatusCode($code)->setBody(view("errors/html/errorCode",["code"=>$code,"reason"=>"Access to that resource is forbidden"]));
		}
		else if($code == "404"){
			return $this->response->setStatusCode($code)->setBody(view("errors/html/errorCode",["code"=>$code,"reason"=>"The requested resource was not found"]));
		}
		else if($code == "405"){
			return $this->response->setStatusCode($code)->setBody(view("errors/html/errorCode",["code"=>$code,"reason"=>"The requested resource was not found"]));
		}
	}
}