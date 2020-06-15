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
<h3>Chỉnh sửa mặt hàng <?php echo $product['name'] ?></h3>
<form method="post">
    <table class="table table-hover">
        <tr>
            <td>Tên hàng</td>
            <td><input type="text" name="name" value="<?php echo $product['name'] ?>"></td>
        </tr>
        <tr>
            <td>Loại hàng</td>
            <td><select name="type">
                    <option
                        <?php if ($product['type'] == 'Điện thoại'): ?>
                            selected
                        <?php endif; ?>
                            value="Điện thoại">Điện thoại
                    </option>
                    <option
                        <?php if ($product['type'] == 'Điều hòa'): ?>
                            selected
                        <?php endif; ?>
                            value="Điều hòa">Điều hòa
                    </option>
                    <option
                        <?php if ($product['type'] == 'Tủ lạnh'): ?>
                            selected
                        <?php endif; ?>
                            value="Tủ lạnh">Tủ lạnh
                    </option>
                </select>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="price" value="<?php echo $product['price'] ?>"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="quantity" value="<?php echo $product['quantity'] ?>"></td>
        </tr>
        <tr>
            <td>Mô tả</td>
            <td><input type="text" name="description" value="<?php echo $product['description'] ?>"></td>
        </tr>
    </table>
    <button type="submit" class="btn btn-success">Sửa mặt hàng</button>
    <a href="index.php" class="btn btn-success">Thoát</a>

</form>
</body>
</html>
