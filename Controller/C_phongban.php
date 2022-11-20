<?php 
    include_once("../Model/nhanvien/M_nhanvien.php");
    include_once("../Model/phongban/M_phongban.php");
    class C_phongban
    {
        public function __construct()
        {
            
        }
        public function __invoke()
        {
            $modelnv = new M_Nhanvien();
            $listnv = $modelnv->getallNV();
            $modelpb= new M_phongban();
            
            if(isset($_GET['IDPB']))
            {
                
            }
            else
            {
                $listpb = $modelpb->getallphongban();
                include_once("../View/phongban/xemthongtinphongban.php");
            }
        }
    }
    $C_phongban = new C_phongban();
    if(isset($_GET['action']))
      { 
         
      }
      else
      {
        $C_phongban ->__invoke();
      }

?>