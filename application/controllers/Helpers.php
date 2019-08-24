<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 4/1/2018
 * Time: 12:07 PM
 */
class Helpers extends CI_Controller{
    public function index()
    {
        $this->load->helper('captcha');
        $this->load->helper('string');

        $myArray = array(
             'word'=>random_string('alpha',4),
             'img_path'=>APPPATH.'../assets/',
             'img_url'=>base_url('assets/'),
             'img_width'=>'170',
             'img_height'=>50,
             'expiration'=>82000,
             'word_length'=>9,
             'font_size'=>19,
             'color'=>array(
                'background'=>array(200,400,300),
                 'broder'=>array(255,255,255),
                 'text'=>array(0,1,0)
             )

        );
        $myResult = create_captcha($myArray);
        var_dump($myResult);

    }

    public function cookieHelper()
    {
        $this->load->helper('cookie');
        $name = "shakzee";
        $value = "shakzee.com";
        $expi = time() + 1000;
        //setcookie($name,$value,$expi);
        get_cookie('shakzee');
    }
    public function textHelper()
    {
        $this->load->helper('text');
        $string =  "Here is my string from shakzee.com";
        //echo word_limiter($string,5);
        //echo character_limiter($string,10);
        $myArray =  array('red','green','blue','olive');
        echo word_censor('HI i am shkzee olive and blue',$myArray,'beap!');
    }
    public function stingHelper()
    {
        $this->load->helper('string');
        echo random_string('sha1',30);
    }
    public function security()
    {
        $this->load->helper('security');
        //echo do_hash('shakzee','md5');
        echo hash('md5','shakzee');

    }
    public function inflector()
    {
        $this->load->helper('inflector');
        //echo singular('dogs');
        //echo plural('dog');
        //echo camelize('dog here for you');
        //echo underscore('dog here for you');
        echo humanize('dog_here_for_you');
    }
    public function HTMLHelper()
    {
        $this->load->helper('html');
        $myOption = array(
            'red',
            'blue',
            'green',
            'olive',
        );
        echo  ul($myOption);
        echo  ol($myOption,'class="myclass"');
        // echo img('assets/car.jpeg','','');
        //echo heading('This is data',1,array('class'=>'xyz','Id'=>'xyz'));
    }
    public function downloadHelper()
    {/*       $this->load->helper('download');
       $data = 'This is CI fast course';
       $name = 'shakzee.text';
       echo force_download($name,$data);*/
        $myRealLink = realpath(APPPATH.'../assets/car.jpeg');
        $this->load->helper('download');
        /*        $myImg = base_url('assets/car.jpeg');*/
        force_download($myRealLink,null);
        
    }



    public function ArrayHelper()
    {
        $this->load->helper('array');
        $myArray = array(
            'City'=>'Islamabad',
            'Country'=>'India',
            'Phone'=>''
        );
        //echo element('mykey',$myArray,'Islamabad');
        $anotherArray = array(
            'here is my section 1',
            'here is my section 2',
            'here is my section 3',
            'here is my section 4',
            'here is my section 5',
        );
        echo  random_element($anotherArray);
    }
}