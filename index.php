<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    input[type=text] {
        width: 300px;
        font-size: 16px;
        border: 2px solid #ccc;
        border-radius: 4px;
        padding: 12px 10px 12px 10px;
    }
    #submit {
        border-radius: 2px;
        padding: 10px 32px;
        font-size: 16px;
    }
</style>
<body>
<h2 style = "color: pink">Từ điển Anh Việt</h2>
<form method = post>
    <input type ="text" name ="search" placeholder="Nhập từ cần tìm" />
    <input type ="submit" id="submit" value="find"/>
</form>
<?php
$dictionary = array("hello"=>"xin chào","goodbye"=>"tạm biệt","dog" =>"chó","cat"=>"mèo","cow"=>"con bò");
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $searchWord = $_POST["search"];
    $flag = 0;
    foreach ($dictionary as $word => $description){
        if($word == $searchWord){
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " .$description;
            echo "<br/>";
            $flag =1;
        }
    }
    if($flag == 0){
     echo "Không tìm thấy từ cần tra.";
  }
}
?>


</body>
</html>
