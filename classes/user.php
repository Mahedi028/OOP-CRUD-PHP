<?php

require_once './classes/db_class.php';

class User{

    public function __construct()
    {
        //pass 3 parameters
        //1.servername
        //2.username
        //3.password
        //4.select db
       $db=new Db_class();
    }

    public function mysqlQuery($sql){

    }
    public function save_user($data){
        $conn=mysqli_connect('localhost', 'root', '', 'oop_db_user');

   
        $sql="INSERT INTO oop_user_tbl
        (email, name, password, phone_number, address, city, country ,gender, message) VALUES 
        ('$data[email]', '$data[name]', '$data[password]', '$data[phone_number]', '$data[address]','$data[city]', '$data[country]','$data[gender]' ,'$data[message]')";
        
        // $sql="BEGIN TRY
        // INSERT INTO oop_user_tbl
        // (name, email, password, phone_number, address, city, country ,gender, message) VALUES 
        // ('$data[name]', '$data[email]', '$data[password]', '$data[phone_number]', '$data[address]','$data[city]', '$data[country]','$data[gender]' '$data[message]')
        // END TRY
        // BEGIN CATCH
        //     SELECT 
        //     @ErrorMessage =ERROR_MESSAGE()
        // ";
        
        if(!mysqli_query($conn,$sql)){
            die ('Sql error'.mysqli_error($conn)."\n\n");
            //throw new mysqli_sql_exception($sql, mysqli_error($this->$conn));

        }else{
            // echo 'Save data Successfully';
            $message= 'Save data Successfully';
            return $message;
        }
            
    }

    public function select_all_user(){

        $conn=mysqli_connect('localhost', 'root', '', 'oop_db_user');
        $sql="SELECT * FROM oop_user_tbl ";
        $result=mysqli_query($conn,$sql);

        return $result;

    }

    public function delete_user($user_id){
     
        $conn=mysqli_connect('localhost', 'root', '', 'oop_db_user');
        $sql="DELETE FROM oop_user_tbl WHERE user_id='$user_id'";

        if(!mysqli_query($conn, $sql)){
            die ('Sql error'. mysqli_error($conn));

        }
        header('location:all_user.php');

    }
    public function select_user_by_id($id){
        $conn=mysqli_connect('localhost', 'root', '', 'oop_db_user');
        $sql="SELECT * FROM oop_user_tbl WHERE user_id='$id'";


        if(!mysqli_query($conn, $sql)){
            die('Sql Error'.mysqli_error($conn));
        }else{
            $result=mysqli_query($conn, $sql);
            return $result;
        }

    }
}


?>