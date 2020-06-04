<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
                'title' => 'Template',
                'welcome' => 'Bienvenido',
                'navbrand' => 'Template'
        ];
		echo view('templates/head',$data);
		echo view('templates/header',$data);
		echo view('templates/navbar',$data);
		echo view('templates/carousel');
		//echo view('html2pdf'); 
		echo view('templates/cards');
		echo view('templates/contact');
		echo view('templates/footer');
	}
}