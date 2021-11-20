<?php

namespace App\Controllers;

class prueba extends BaseController
{
    public function index()
    {
       // return view('welcome_message');
		echo "esta es la pagina index";
		
    }
	public function test(){
		
		echo "esta es la pagina test";
	}
	public function test2(){
		
		echo "esta es la pagina test2";
	}
}