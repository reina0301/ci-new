<?php
//mailing_list.php is a codeigniter controller

class Mailing_list extends CI_Controller
{
	public function index()
	{//here we're making data available to our header and footer
		$this->load->model('Mailing_list_model');
		$data['query'] = $this->Mailing_list_model->get_mailing_list();
		
		$data['title'] = "Here is our title tag!";
		$this->load->view('header',$data);
		$this->load->view('mailing_list/view_mailing_list',$data);
		$this->load->view('footer',$data);
	}
}
?>