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

		
		echo CI_VERSION;
		die();

        $myresult = $this->myModel->chaining();
        var_dump($myresult->result());
        //$myresult = $this->myModel->mylike('a');
        //var_dump($myresult->result());
        /*$myresult = $this->myModel->deleteUser('dfdfdfdf');
        var_dump($myresult);*/


        /*$bulkUpdate = array(
            array(
                'id'=>1,
                'userName'=>'shakzee',
                'age'=>22
            ),
            array(
                'id'=>2,
                'userName'=>'shakzee 2',
                'age'=>22
            )
        );

        $myresult = $this->myModel->bulkUpdate($bulkUpdate);
        var_dump($myresult);*/

            /*$myresult = $this->myModel->updateUser(array('userName'=>'Shakzee Again'),1);
           var_dump($myresult);*/
            /* $newUser = array(
                array(
                    'userName'=>'alex',
                    'email'=>'alex@hotmail.com',
                    'password'=>'onetwo',
                    'age'=>40
                ),
                array(
                    'userName'=>'john',
                    'email'=>'john@hotmail.com',
                    'password'=>'onetwo',
                    'age'=>70
                ),
                array(
                    'userName'=>'john',
                    'email'=>'john@hotmail.com',
                    'password'=>'onetwo',
                    'age'=>70
                )

            );
        $myResult = $this->myModel->newBatch($newUser);
           // $myResult = $this->myModel->newUser($newUser);
            var_dump($myResult);*/

        //$myresul = $this->myModel->Aggri();
        //var_dump($myresul->result());
        //$myresul = $this->myModel->mixQuery();
        //var_dump($myresul->result());
        /*$myresult = $this->myModel->myGetWhere();
        foreach ($myresult->result() as $user) {
            echo $user->id.'<br>';
        }*/

        /*$queryResult = $this->myModel->myquery();
        foreach ($queryResult->result() as $user) {
            echo $user->id.'<br>';
            echo $user->userName.'<br>';
            echo $user->password.'<br>';
        }*/

    }

    public function cart()
    {
        $mydata = array(
            'id'=>'ssss343',
            'qty'=>23,
            'price'=>100,
            'name'=>'T-Shirt',
            'options'=>array('size'=>'S','color'=>'Blue')
        );
        $this->cart->insert($mydata);
    }
    public function mydata()
    {
        var_dump($this->cart->contents());
    }

}