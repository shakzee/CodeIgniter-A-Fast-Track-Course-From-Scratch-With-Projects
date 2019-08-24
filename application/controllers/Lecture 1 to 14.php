<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 3/29/2018
 * Time: 7:55 PM
 */
class Home extends  CI_Controller{

    public function index()
    {

        $sessionData = array(
            'id'=>35,
            'name'=>'Shakzee',
            'city'=>'Karachi'
        );
        $this->session->set_userdata($sessionData);

        var_dump($this->session->all_userdata());
    }

    public function sessionDestroy()
    {

        $this->session->sess_destroy();
    }

    public function formvalidation2()
    {

        $this->load->helper('form');
        $this->load->view('muform');

    }

    public function signup23()
    {

        $this->load->helper('url');
        $data['name'] = $this->input->post('name',true);
        $data['password'] =$this->input->post('password',true);
        $data['confPassword'] =$this->input->post('confPassword',true);
        if (empty( $data['name']) || empty( $data['password']) || empty( $data['confPassword'])) {
            $this->session->set_flashdata('error','Please check the requreid fields');
            redirect('home/formvalidation2');
        }
        else{
            echo 'fine';
        }
    }
    public function signup()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','Name','required|min_length[12]|numeric');
        $this->form_validation->set_rules('password','Password ','required');
        $this->form_validation->set_rules('confPassword','Confirm Password ','required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $this->formvalidation2();
        }
        else{
            echo 'fine';
        }
    }
    public function formValidation()
    {
        $this->load->helper('form');
        echo form_open('home/mysubmit','','');
        echo form_input('name','',array('class'=>'myClass','id'=>'myid'));
        $myCities = array('karachi'=>'karachi','islamabad'=>'islamabad');
        echo form_dropdown('city',$myCities,'islamabad',array('class'=>'myClass','id'=>'myid'));
        echo form_password('mypassword','','class="myClass"');
        echo form_hidden('myHidden','xyz');
        echo form_upload('myFile','','calss="muClass"');
        echo form_textarea('myTextArea','','class="myClass"');
        echo form_multiselect('MyFiels',$myCities,'','');
        echo form_checkbox('mycheckbox','',false,'class="myclass"');
        echo form_radio('myradio','',false,'');
        echo form_label('label here','myId','');
        echo form_submit('upload','Upload');

        echo form_close();
    }


    public function Myupload()
    {
        $this->load->helper('url');
        $this->load->view('ImageUpload');
    }
    public function uploadNow()
    {

        $config['upload_path'] =  realpath(APPPATH.'../assets/');
        $config['allowed_types'] =  'gif|png|jpg|jpeg';
        //$config['max_size'] = 100;
        //$config['max_width'] =  1024;
        //$config['max_height'] = 800;
        $this->load->library('upload',$config);
        if (!$this->upload->do_upload('myImage')) {
            echo $this->upload->display_errors();
        }
        else{
            echo 'you have Uploaded.';
        }

    }
    public function urlHelper()
    {
        $this->load->helper('url');
        //echo current_url();
        //$this->load->view('home');
        $arraVar = array(
            'width'=>200,
            'height'=>200,
            'scrollbars'=>'yes',
            'status'=>'yes',
            'resizable'=>'yes',
            'width'=>200,

        );
        echo anchor_popup('home/anotherMethod','ClickMe',$arraVar);
        //echo anchor('home/anotherMethod','Click Me',array('class'=>'myclasss','id'=>'myId'));
    }

    public function anotherMethod()
    {
        echo 'working.';
    }
    public function login()
    {
        echo  $this->input->get_post('email',true);
        echo '<br>';
        echo $this->input->get_post('password',true);
    }

    public function pagination()
    {
        /*$this->load->helper('url');
        $this->load->view('home');*/
        $this->load->helper('url');
        $this->load->library('pagination');
        $config['baser_url'] = site_url('home');
        $config['total_rows'] = 700;
        $config['per_page'] = 50;
        $this->pagination->initialize($config);
        echo $this->pagination->create_links();
    }

    public function Example1()
    {
        /*$this->load->library('calendar');
        $option = array(
            3=>'https://www.shakzee.com/',
            7=>'https://www.google.com/',
            21=>'https://www.facebook.com/',
        );
        echo $this->calendar->generate(2018,3,$option);*/
        /*$this->load->library('email');

        $config['protocol'] = 'protocol here';
        $config['mailpath'] = '';
        $this->email->initialze($config);
        $this->email->from('your@hotmail.com','Shakzee');
        $this->email->to('client@htomail.com');
        $this->email->subject('mysubject');
        $this->email->message('testing');
        $this->email->send();*/

        $this->load->library('encryption');
        $this->load->library('encrypt');
        $this->encrypt->encode('shakzee');
        $this->encrypt->decode('shakzee');

        $Name = 3;
        echo $this->encryption->encrypt($Name);
        echo '<br>';
        echo $this->encryption->decrypt('280453852cd1102e42d1fb6af547dae5c9c2b917b4be3dd10d1a83c455a8b22b9c0e60abe77c65e79d394757b39d47177d767190134c9bbaf6690b6082506155QzniyRD6excsGg7KwtrJexdef9AWuOdHdeKLUltjCuQ=');
    }
}