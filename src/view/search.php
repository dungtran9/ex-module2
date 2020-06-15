
<body>
<h3>Kết quả tìm kiếm</h3>
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

