<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Thêm mặt hàng</h3>
<form method="post" class="table table-hover">
    <table>
        <tr>
            <td>Tên hàng</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Loại hàng</td>
            <td> <select name="type">
                    <option
                        value="Điện thoại">Điện thoại</option>
                    <option
                        value="Điều hòa">Điều hòa</option>
                    <option
                        value="Tủ lạnh">Tủ lạnh</option>
                </select></td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="price"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="quantity"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><input type="text" name="description"></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-success">Nhập mặt hàng</button>
    <a href="index.php" class="btn btn-success">Thoát</a>

</form>
</body>
</html>