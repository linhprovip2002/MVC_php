<?php
    include_once("E_nhanvien.php");
    $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi den CSDL MySQL");
    mysqli_select_db($link, "DULIEU");
    class M_Nhanvien
    {
        public function __construct()
        {
        }
        public function getallNV()
        {
            $sql = "SELECT * FROM nhanvien";
            $result = mysqli_query($GLOBALS['link'], $sql);
            $i = 0;
            $nv = array();
            while ($row = mysqli_fetch_array($result)) {
                while($i != $row['IDNV']) $i++;
                          $nv[$i++] = new E_nhanvien($row['IDNV'],$row['HoTen'],$row['IDPB'],$row['DiaChi']);
              }
              return $nv;
        }
        public function getSTdetail($ID)
        {
            $allstudent = $this->getallNV();
            return $allstudent[$ID];
        }
        public function getNVbyIDPB($IDPB)
        {
            $sql = "SELECT * FROM nhanvien where IDPB = '$IDPB'";
            $result = mysqli_query($GLOBALS['link'], $sql);
            $i = 0;
            $nv = array();
            while ($row = mysqli_fetch_array($result)) {
                while($i != $row['IDNV']) $i++;
                          $nv[$i++] = new E_nhanvien($row['IDNV'],$row['HoTen'],$row['IDPB'],$row['DiaChi']);
              }
              return $nv;
        }
        public function timkiem($radio, $value)
            {
                
                $sql="SELECT * FROM nhanvien WHERE $radio LIKE '%$value%'";
                $result=mysqli_query($GLOBALS["link"],$sql);
                $i = 0;
                $listnv = array();
                while($row=mysqli_fetch_array($result)){
                    $nv = new E_nhanvien($row['IDNV'],$row['HoTen'],$row['IDPB'],$row['DiaChi']);
                    $listnv[$i] = $nv;
                    $i++;
                }
                return $listnv;
            }
            public function capnhat($id, $name, $age, $university)
            {
             
              $sql = "UPDATE `nhanvien` SET `Hoten`='$name',`IDPB`='$age',`DiaChi`='$university' WHERE `IDNV`=$id";
              $rs = mysqli_query($GLOBALS['link'], $sql);
              return true;
            } 
            public function deleteSV($id)
            {
             
              $sql = "DELETE FROM `nhanvien` WHERE IDNV=$id";
              $rs = mysqli_query($GLOBALS['link'], $sql);
            }  
            public function deleteall($id)
            {
              
              foreach($id as $a) {
                $sql = "DELETE from nhanvien where IDNV = '$a' ";
                // echo $sql."<br>";
                //echo $sql;
                mysqli_query($GLOBALS['link'], $sql);
            }
            }
    }
?>