<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <h1>Thông tin phòng ban</h1>
  <?php 
  echo "
  <table>
         <tr>
         <th>STT</th>         
           <th>Tên Phong</th>
           <th>Mo Ta</th>
           <th>Chi Tiet phong ban</th>
        
         </tr>";
    $i=1;
    foreach($listpb as $pb)
    {
        echo  "<tr>
            <td>".$i++."</td>
            <td>".$pb->Tenpb."</a></td>
            <td>".$pb->Mota."</td>
            <td>"."<a href='C_nhanvien.php?IDPB=". $pb->IDPB . "'>xxx</a>"."</td>            
          </tr>";
    }
    echo"</table>";
  ?>
</body>
</html>

