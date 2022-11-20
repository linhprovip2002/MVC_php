<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
<?php
        echo"
        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
        <h2> Cập nhật sinh viên </h2>
        <table>
         <tr>
         <th>STT</th>
           <th>ID Nhan vien</th>
           <th>Tên nhan viên</th>
           <th>IDPB</th>
           <th>Dia Chi</th>
           <th>Cap nhat</th>
         </tr>";
         $i = 1;
         foreach($listNV as $NV)
        {
          echo  "<tr>
            <td>".$i++."</td>
            <td>".$NV->IDNV."</td>
            <td>".$NV->HoTen."</td>
            <td>".$NV->IDPB."</td>
            <td>".$NV->DiaChi."</td>"
            ."<td><a href='C_nhanvien.php?action=Update&stid=" . $NV->IDNV . "'>...</a></td>"."
          </tr>";
        }

    echo"</table>";
    ?>
</body>
</html>