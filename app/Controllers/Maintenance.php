<?php
namespace App\Controllers;

class Maintenance extends BaseController{
    public function mt(){
        if(getenv("MAINTENANCE") == TRUE){
			return view('login');
		}
    }
}