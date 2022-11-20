<?php
    include_once("E_phongban.php");
    $link = mysqli_connect("localhost", "root", "") or die("khong the ket noi den CSDL MySQL");
    mysqli_select_db($link, "DULIEU");
    class M_phongban
    {
        public function __construct()
        {
        }
        public function getallphongban()
        {
            $sql = "SELECT * FROM phongban";
            $result = mysqli_query($GLOBALS['link'], $sql);
            $i = 0;
            $pb = array();
            while ($row = mysqli_fetch_array($result)) {
                while($i != $row['IDPB']) $i++;
                          $pb[$i++] = new E_phongban($row['IDPB'],$row['Tenpb'],$row['Mota']);
              }
              return $pb;
        }
    }
?>