<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <?php
            // $strC_Name=$_GET["C_Name"];

            require "connect.php";
            $sql = "SELECT * FROM customer";


            $stmt = $conn->prepare($sql);
            $stmt->execute();
            

    ?>
    <table width="800" border="1">
  <tr>
    <th width="140">รายชื่อลูกค้า</th>
    <th width="90">เบอร์โทร</th>
    <th width="240">ที่อยู่</th>
    <th width="50">หลักฐาน</th>
  </tr>

        <?php
            while ($result = $stmt->fetch(PDO::FETCH_NUM)) {

            
        ?>
            <tr>
                <td><?php echo $result[0]; ?></td>
                <td><?php echo $result[1]; ?></td>
                <td><?php echo $result[2]; ?></td>
                <td><img src="<?php echo $result[3]; ?>" width="50px" height="50" alt="i" ></td>
            </tr>

            <?php
            }
            ?>
        </table>

        <?php
        $conn = null;
        ?>
</body>
</html>