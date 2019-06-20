<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<body>
<table border="0">
    <caption><h1>Danh sách khách hàng</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
    </tr>
</table>
<?php
    $customerlist = array(
        "1" => array("ten"=>"Mai Van Hoan",
            "ngaysinh"=>"1983-08-20",
            "diachi" => "hanoi"
            ),
        "2" => array("ten"=>"Mai Van Hoan",
            "ngaysinh"=>"1983-08-20",
            "diachi" => "hanoi"
        ),
        "3" => array("ten"=>"Mai Van Hoan",
            "ngaysinh"=>"1983-08-20",
            "diachi" => "hanoi"
        ),
        "4" => array("ten"=>"Mai Van Hoan",
            "ngaysinh"=>"1983-08-20",
            "diachi" => "hanoi"
        ),
        "5" => array("ten"=>"Mai Van Hoan",
            "ngaysinh"=>"1983-08-20",
            "diachi" => "hanoi"
        ),
    )
?>
<?php
    foreach ($customerlist as $key => $value){
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value['ten']."</td>";
        echo "<td>".$value['ngaysinh']."</td>";
        echo "<td>".$value['diachi']."</td>";
        echo "</tr>";
    }
?>
</body>
</html>