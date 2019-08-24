<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 3/29/2018
 * Time: 8:30 PM
 */

class NewController extends CI_Controller{
    public function index()
    {
        /*$data['name'] = 'Alex';
        $data['age'] = 30;
        $data['city'] = 'Karachi';

        $this->load->view('home',$data);*/
        $this->load->model('modHome');

        $myData = $this->modHome->mymethod();
        $this->load->view('home',$myData);

    }
}