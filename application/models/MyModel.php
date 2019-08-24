<?php
/**
 * Created by PhpStorm.
 * User: dell
 * Date: 4/1/2018
 * Time: 2:54 PM
 */
 class MyModel extends CI_Model{

     public function myJoins()
     {
         $this->db->select('*')
             ->from('users')
             ->where('id',3)
             ->where('id',4)
             ->join('post','users.id = post.userId')
             ->get();
     }
     public function chaining()
     {
         return $this->db->select('id,userName,age')
             ->from('users')
             ->where('id',1)
             ->or_where('id',3)
             ->get();
    }
     public function mylike($user)
     {
         return $this->db->like('userName',$user)->get('users');

        // return

     }
     
     public function deleteUser($userId)
     {
         $this->db->where('id',$userId);
         return $this->db->delete('users');
     }
     public function bulkUpdate($users)
     {
         return $this->db->update_batch('users',$users,'id');
    }
     public function updateUser($data,$userId)
     {
         $this->db->where('id',$userId);
        return  $this->db->update('users',$data);
     }
     
     public function newBatch($user)
     {
         return $this->db->insert_batch('users',$user);
     }
     public function newUser($user)
     {
         return $this->db->insert('users',$user);
     }
     
     public function myquery()//query buildedr
     {
        return $this->db->get('users');
     }

     public function myGetWhere()
     {
         return $this->db->get_where('users',array('id'=>1));
         //select * from users where id=1
     }

     public function mixQuery()
     {
         $this->db->select('*');
         $this->db->from('users');
         $this->db->where('id',1);
         $this->db->where('userName','shakzee');
         $this->db->get();
         echo $this->db->last_query();
         //return $this->db->get();
        //select * from users where id=1 and userName='shakzee'
     }

     public function Aggri()
     {
         $this->db->select_sum('age');
         return $this->db->get('users');
     }
 }