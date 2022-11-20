<?php
    session_start();
    include_once("../Model/Auth/M_Authenticaion.php");
    class C_test
    {   
        
        public function __construct()
        {}
        public function   invoke()
          { 
          if(isset($_POST['username']) && isset($_POST['password']))
          {    

                echo "dang nhap thanh cong";
        
                 $username = $_POST['username'];
                 $password = $_POST['password'];
                $model = new Model_Authentication();
                $rs = $model->login($username,$password);
                if($rs!=0)
                {
                    $_SESSION["Login"]= 1;
                    header("Location: C_nhanvien.php");
                }
                
          }
          else
          {    echo " qua form dang nhap";
      
              header("Location:../View/nhanvien/login.php");
          }
          }
        
  
    }
    $C_Auth = new C_test();
    $C_Auth->invoke();
    //include_once("../View/nhanvien/login.php");
    //echo "phai dang nhap";
?>