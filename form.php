<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form address</title>
</head>
<body>
    <h2>Add Name and Address</h2>
    <form action="form.php" method = "POST">
        <input type="text"placeholder='Enter your name' name ="C_Name">
        <br><br>
        <input type="text" placeholder='Enter your phone number' name = "PhoneNumber">
        <br>
        <H3>กรอกที่อยู่ของคุณ</H3>
        <br>
        <textarea id="address" name="address"
          rows="5" cols="33"></textarea>
          <br>
          <h3>แนบรูปภาพ</h3>
          <br>
          <input type="file" name="sleeper" id="sleeper">
          <br><br>
          <input type="submit">
    </form>
</body>
</html>

<?php 
    if (!empty($_POST['C_Name'])&& !empty($_POST['PhoneNumber'])&& !empty($_POST['address'])&& !empty($_POST['sleeper'])):
        require'connect.php';
            $sql_insert="insert into customer values (:C_Name,:PhoneNumber,:address,:sleeper)";

            $stmt = $conn->prepare($sql_insert);
            $stmt->bindParam(':C_Name',$_POST['C_Name']);
            $stmt->bindParam(':PhoneNumber',$_POST['PhoneNumber']);
            $stmt->bindParam(':address',$_POST['address']);
            $stmt->bindParam(':sleeper',$_POST['sleeper']);
            

            if($stmt->execute()):
                $message = 'Sucessfully add new country';

                 header("Location:/sendabc/alertimg.php");

            else:
                    $message='Fail to add new country';
            endif;
            echo $message;
            $conn=null; 
        endif; 
        ?>