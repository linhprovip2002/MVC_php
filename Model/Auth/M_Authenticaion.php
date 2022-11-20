<?php 
      //require_once('../../Controller/C_nhanvien.php');
      class Model_Authentication{
        public function __construct()
        {
            
        }
        // public function login($username,$password)
        // {
        //   $link= mysqli_connect('localhost','root','') or die("ko the ket noi");
        //   mysqli_select_db($link, "DULIEU");
        //   $sql="select * from admin where Username = '$username' and Password = '$password'";
        //   $res= mysqli_query($link, $sql);
        //   if (mysqli_num_rows($res) != 0){
        //         $_SESSION["Login"]= 1;
        //         echo "daco session";
        //     }
        //     else{
        //         $_SESSION["Login"]= 2;
                
        // }
        // }
        public function login($username,$password){
          // config 
          $link= mysqli_connect('localhost','root','') or die("ko the ket noi");
          mysqli_select_db($link, 'dulieu');
          $sql="select * from admin where username = '$username' and password = '$password'";
          $res= mysqli_query($link, $sql);
          return mysqli_num_rows($res) ;
     
      }
    }
     
?>