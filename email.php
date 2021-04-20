<!DOCTYPE html>
<html>
<head>
    <title>send email</title>
</head>
<body>
    <?php 
        $to = "nguyenxuanthom15tclc1@gmail.com";
        $subject = "test";
        $message = "24 tuoi";

        $send = mail($to,$subject,$message);
        if(!$send== true){
            echo "thanh cong";
        }else{
            echo "loi";
        }
    ?>  
</body>    
</html>