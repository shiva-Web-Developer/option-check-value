<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}

	public function add()
	{
		$input_arr = $this->input->post('car'); 

        $comma_separation = implode (", ", $input_arr); 
	// implode use for array get 

		// echo $comma_separation;
		
		// load model 
		$this->load->model('Check_model');

        $array=array(

            'check_value'=> $comma_separation
          
                );

                if($this->Check_model->gb($array))
         {
             
             redirect('http://localhost/multi-select-option/'); 
         }
         else
         {
           
             redirect('http://localhost/multi-select-option/'); 
         } 
	}
}
