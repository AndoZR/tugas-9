<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HtmltoPDF extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('htmltopdf_model');
		$this->load->library('pdf');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['users_data'] = $this->htmltopdf_model->fetch();
		$this->load->view('htmltopdf', $data);
	}

	public function details()
	{
		if($this->uri->segment(3))
		{
			$user_id = $this->uri->segment(3);
			$data['users_details'] = $this->htmltopdf_model->fetch_single_details($user_id);
			$this->load->view('htmltopdf', $data);
		}
	}

	public function pdfdetails()
	{
		if ($this->uri->segment(3)) {
			$customer_id = $this->uri->segment(3);
	
			// Mengambil data dari database menggunakan model atau metode yang sesuai
			$customer_data = $this->htmltopdf_model->fetch_single_details($customer_id);
	
			// Mengambil data gambar dari file
			$imageFilePath = 'public/ando.jpg';
			if (file_exists($imageFilePath)) {
				$imageData = file_get_contents($imageFilePath);
			} else {
				$imageData = "";
			}
	
			$imageMimeType = mime_content_type($imageFilePath);
	
			$imageDataUri = 'data:' . $imageMimeType . ';base64,' . base64_encode($imageData);
	
			// Menggabungkan data dari database ke dalam HTML
			$html_content = '
			<!DOCTYPE html>
			<html>
			<head>
				<title>PDF Report</title>
				<style>
					body {
						font-family: Arial, sans-serif;
						background-color: #87ceea;
						margin-bottom: 350;
						padding: 0;
					}
	
					.container {
						position: relative;
						height: 100vh;
					}
	
					img {
						position: absolute;
						top: 50%;
						right: 10%;
						transform: translate(0, -50%);
						max-width: 40%;
						max-height: 40%;
					}

					.attribute {
						width: 145px; /* Sesuaikan lebar sesuai kebutuhan */
						display: inline-block;
					}
				
					.value {
						margin-left: 2px; /* Sesuaikan jarak dari tanda ":" */
					}
				</style>
			</head>
			<body>
				<div class="container">
					<div>
						<h1></h1>
					</div>
					<img src="' . $imageDataUri . '" alt="Ando Z. R.">
					<div style="margin-top: 40px; margin-left:30px">' . $customer_data . '</div> <!-- Menambahkan data dari database ke dalam HTML -->
				</div>
			</body>
			</html>
			';
	
			$this->pdf->loadHtml($html_content);
			$this->pdf->render();
			$this->pdf->stream("" . $customer_id . ".pdf", array("Attachment" => 0));
		}
	}
}

?>
