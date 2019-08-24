<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 3/29/2018
 * Time: 8:38 PM
 */
class ModHome extends CI_Model{
    public function mymethod(){
        $data['name'] = 'Alex';
        $data['age'] = 30;
        $data['city'] = 'Karachi';
        return $data;
    }
}