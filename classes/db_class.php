<?php

class Db_class{
    public function __construct()
    {
        $host_name='localhost';
        $user_name='root';
        $password='';
        $db_name='oop_db_user';
        
        $conn=mysqli_connect($host_name, $user_name, $password, $db_name);
        if(!$conn){
            die ('Database Server Not Connected');
        }else{
            echo 'Database Server Connected';
            //select Database
            mysqli_select_db($conn, 'oop_db_user');
        }
    }

}






?>