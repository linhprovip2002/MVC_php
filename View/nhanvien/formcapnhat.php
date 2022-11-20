<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="../../MVC_QLPB/Controller/C_nhanvien.php?action=Update&stid= <?php echo $st->IDNV;?>" style="display: flex; justify-content: center;" method="POST">
    <table>
      <tr>
        <td><h1>Cập nhật nhan vien</h1></td>
      </tr>
      <tr>
        <td>IDNV</td>
      <?php echo " <td><input name='IDNV' type='text' value='$st->IDNV'></td> ";?>
      </tr>
      <tr>
        <td>name</td>
        <?php echo " <td><input name='HoTen' type='text' value='$st->HoTen'></td> ";?>
      </tr>
      <tr>
        <td>IDBP</td>
        <?php echo " <td><input name='IDPB' type='text' value='$st->IDPB'></td> ";?>
      </tr>
      <tr>
        <td>DIACHi</td>
        <?php echo " <td><input name='DiaChi' type='text' value='$st->DiaChi'></td> ";?>
      </tr>
      <tr>
      <?php echo " <td><input name='Update' type='submit' value='Update'></td> ";?>
      </tr>
    </table>
  </form>
</body>
</html>