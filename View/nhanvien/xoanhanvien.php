<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
    <title>Document</title>
</head>

<body>
<?php
    echo "<form action='/C_nhanvien.php?action=delete' method='post'>";
    echo   " <table>";
    echo "        <tr>";
    echo "      <th>STT</th>";
    echo "      <th>ID</th>";
    echo "      <th>Name</th>";
    echo "      <th>IDPB</th>";
    echo "      <th>Address</th>";
    echo "      <th>Xóa</th>";
    echo "      <th>Lựa chọn</th>";
    echo "  </tr>";
            $i=1;
           
            foreach($listNV as $student)
            {                                                                                                                                           
                echo "  <tr>";
                echo "  <td>".$i++."</td>";
                echo "  <td>".$student->IDNV."</td>";
                echo "  <td>".$student->HoTen."</td>";
                echo "  <td>".$student->IDPB."</td>";
                echo "  <td>".$student->DiaChi."</td>";
                echo "  <td><a href='C_nhanvien.php?action=delete&stid=".$student->IDNV."'>Xóa</td>";
                echo "  <td><input type='checkbox'  name='id[]' value='".$student->IDNV."'></td>";

                echo "  </tr>";
            }
       
            
            echo " </table>";
            echo " <input type='submit' value='Xóa tất cả'>";
            echo "</form> ";
?> 
</body>


</html>