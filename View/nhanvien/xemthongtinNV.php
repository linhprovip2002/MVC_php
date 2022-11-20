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
    <h1>Thong tin nhan vien</h1>
  <?php 
  echo "
  <table>
         <tr>
         <th>STT</th>
           <th>ID Nhan vien</th>
           <th>Tên Nhan vien</th>
           <th>IDPB</th>
           <th>Dia Chi</th>
        
         </tr>";
    $i=1;
    foreach($listnv as $nv)
    {
        echo  "<tr>
            <td>".$i++."</td>
            <td>".$nv->IDNV."</td>
            <td>".$nv->HoTen."</a></td>
            <td>".$nv->IDPB."</td>
            <td>".$nv->DiaChi."</td>            
          </tr>";
    }
    echo"</table>";
  ?>
</body>
</html>