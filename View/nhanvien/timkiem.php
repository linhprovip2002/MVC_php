<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tìm kiếm</h1>
    <form action="/MVC_QLPB/Controller/C_nhanvien.php?action=Search"  method="post">
        <!-- create 3 radio buttons -->
        <input type="radio" name="select" id="IDNV" value="IDNV" checked />IDNV
        <input type="radio" name="select" id="HoTen" value="HoTen" />Họ tên
        <input type="radio" name="select" id="IDPB" value="IDPB" />IDPB
        <input type="radio" name="select" id="DiaChi" value="DiaChi" />Địa Chỉ
        <br>
        <input type="text" name="value" placeholder="Thông tin cần tìm kiếm">
        <input type="submit" value="Tìm kiếm">
    </form>
</body>
</html>
