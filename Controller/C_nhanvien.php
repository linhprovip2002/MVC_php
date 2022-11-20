<?php   
      session_start();  
      include_once("../Model/nhanvien/M_nhanvien.php");
    
      class C_nhanvien{
          
 
 
         public function __construct(){}
         public function __invoke()
         {
              $modelnv = new M_Nhanvien();
              if(isset($_GET['IDPB']))
              { 

                //echo $_GET['IDPB'];
                $listnv = $modelnv->getNVbyIDPB($_GET['IDPB']);
                include_once("../View/nhanvien/xemthongtinNV.php");
              }
              else
              {
                $listnv = $modelnv->getallNV();
                include_once("../View/nhanvien/xemthongtinNV.php");
              }
         }    
         public function search()
         {
          $modelnv = new M_Nhanvien();
            if(isset($_POST['value']) && isset($_POST['select']))
            {   
              // echo $_POST['value'];
              // echo $_POST['select'];
                 $listnv = $modelnv->timkiem($_POST['select'],$_POST['value']);
                 //echo json_encode($listnv);
                 include_once("../View/nhanvien/xemthongtinNV.php");
            }
            else
            {   
                  //echo "view search";
                include_once("../View/nhanvien/timkiem.php");
            }
         }
         public function update()
         {  
          if ($_SESSION["Login"] != 1) 
          {
            header("Location:C_Authentication.php");
          }
          else
          {

            $ModelNV = new M_Nhanvien();
            $listNV = $ModelNV->getallNV();    
            if (isset($_GET['stid']))
            {  
              echo "co id";
                if(isset($_POST['HoTen']) && isset($_POST['IDPB']) && isset($_POST['DiaChi']))
                {   
                  echo "capnhat thanh cong";
                   $result= $ModelNV->capnhat($_GET['stid'],$_POST['HoTen'],$_POST['IDPB'],$_POST['DiaChi']);
                    if($result)
                    {
                        include_once("../Controller/C_nhanvien.php");
                    }
                    else
                    {
                        echo "update fail";
                    }
                }else
                {   
                    echo " danh sach";
                    $st = $ModelNV->getSTdetail($_GET['stid']);
                   include_once("../View/nhanvien/formcapnhat.php");
                }
            }
            else
            {    
                 echo "danh sach";
                 include_once("../View/nhanvien/capnhat.php");
            }
          }
         }
         public function delete(){
          if ($_SESSION["Login"] != 1) 
          {
            header("Location:C_Authentication.php");
          }
          else
          {  
            $modelStudent = new M_Nhanvien();
            $listNV = $modelStudent->getallNV();
            //echo json_encode( $listNV);
            if(isset($_GET['stid']) || isset($_POST['id']) )
            {
               if(isset($_GET['stid']))
               {
                $modelStudent->deleteSV($_GET['stid']);
                echo "dax oas";
               }
               else
               { 
                $uri = $_SERVER['REQUEST_URI'];
                echo $uri;
                echo json_encode(($_GET['stid']));
                echo json_encode($_POST['id']);
                // $modelStudent->deleteall($_POST['id']);
                // echo"da xoa";
               }
            }
            else
            { 
              
              include_once("../View/nhanvien/xoanhanvien.php");   
            }
          }
         }
      }
      $C_nhanvien = new  C_nhanvien();
      if(isset($_GET['action']))
      { 
         if($_GET['action']=='Search')
         {
          //echo "action search";
          $C_nhanvien->search();
         }
         if($_GET['action']=='Update')
         {
          //echo "action search";
          $C_nhanvien->update();
         }
         if($_GET['action']=='delete')
         {
          //echo "action search";
          $C_nhanvien->delete();
         }    
      }
      else
      {
        $C_nhanvien ->__invoke();
      }
 
?>
