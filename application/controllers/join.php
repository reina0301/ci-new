<?php
//join.php is a codeigniter controller

class Join extends CI_Controller
{
	public function index()
	{//here we're making data available to our header and footer
		$data['title'] = "Here is our title tag!";
		$this->load->view('header',$data);
		$this->load->view('footer',$data);
	}
}
?>