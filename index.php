<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href = "./css/bootstrap.css" />
    <script src = "./js/popper.js"> </script>
    <script src = "./js/bootstrap.js"> </script>
</head>
<body>
    <?php
    include "./navbar.php";
    echo "ยินดีต้อนรับเข้าสู่เว็บไซด์";
    echo "<h1> Welcome to website </h1>";
    echo "<a href ='./about.php'> เกี่ยวกับเรา </a>";

    $year = 2565;
    $crish = $year-543;
    echo "ปี พ.ศ. $year ค.ศ. $crish <br/>";
    echo "ปั พ.ศ.". $year;
    $salary = 25000;
    echo "เงินเดือน $salary บาท <br/>";
    echo "เงินเดือน". $salary . "บาท";
    echo $year;

    $name = "พิมาน รัตนโชติ";
    $age = 26;
    echo "<br/>สวัสดี" . $name ;
    echo "<br/>คุณมีอายุ" . $age. "ปี";
    $birth = $year-$age;
    echo "พ.ศ.เกิด". $year - $age;

    
    

    ?>

    
</body>
</html>