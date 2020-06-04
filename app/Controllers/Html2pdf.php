<?php namespace App\Controllers;

class Html2pdf extends BaseController
{
	public function index()
	{
		
		$html2pdf = new \Spipu\Html2Pdf\Html2Pdf('P', 'A4', 'en');
		$html2pdf->writeHTML('<h1>HelloWorld</h1>This is my first page');
		$html2pdf->output();
	}
}