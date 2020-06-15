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
<h3>Danh sách mặt hàng</h3>
<form method="post" action="index.php?page=search">
    <input type="text" name="search">
    <button type="submit" class="btn btn-success">Search</button>
</form>
<table class="table table-hover">
    <tr>
        <th>#</th>
        <th>Tên hàng </th>
        <th>Loại hàng </th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($products as $key=> $item):?>
    <tr>
        <td><?php echo ++$key?></td>
        <td><?php echo $item['name'] ?></td>
        <td><?php echo $item['type'] ?></td>
        <td><a class="btn btn-success" href="index.php?page=update&id=<?php echo $item['code'] ?>">Chỉnh sửa</a></td>
        <td><a  class="btn btn-success" href="index.php?page=delete&id=<?php echo $item['code'] ?>">Xóa</a></td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</html>