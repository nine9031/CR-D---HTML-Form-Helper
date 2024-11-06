<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Manage_product extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		echo "Database";
	}

	public function getProducts()
	{
		$data['query'] = $this->pm->getAllv2();
		//print_r($data);
		$this->load->view('show_product', $data);
	}

	public function viewProducts($cd = 'C2499')
	{
		$data['query'] = $this->pm->getByCodev2($cd);
		$this->load->view('show_product', $data);
	}

	public function deleteProducts($cd)
	{
		$this->pm->removeByCode($cd);
		$this->getProducts();
	}

	public function htmlhelper()
    {
        $this->load->view('show_view');
    }

	public function showform()
    {
        $this->load->view('show_form');
    }

	public function create()
    {
		$data = array(
		'code' => $this->input->post('code'),
		'name' => $this->input->post('pname'),
		'price' => $this->input->post('price')
		);
       
		$this->pm->insertProduct($data);
    }

	public function show_form_delete(){
		$this->load->view('show_form_delete');
	}

	public function delete(){
		$code = $this->input->post('code');
		echo "deleted";
		$this->pm->deleteProduct($code);
	}
}
