<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

date_default_timezone_set("Asia/Muscat");


if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $days = $_POST['days'];
    $operation = $_POST['operation'];

    $errors = [];

    if(empty($operation)){

        $errors[] = 'يجب إختيار العملية المطلوبة';
    }

       if(empty($days)){

        $error[] = 'يجي إدخال عدد الأيام';
    }

        if(!is_numeric($days)){

        $error[] = 'يجب إدخال قيمة رقمية';
    }

   
    if(empty($errors))
    {
                            
    if($operation === "+")
    {
       $timestamps =  strtotime("+$days days");
    } else {
       $timestamps =  strtotime("-$days days");

    }

    if($operation === "+"){

        echo "التاريخ بعد 
        إضافة $days أيام هو ". date("Y-m-d", $timestamps);
    }else {

                echo "التاريخ بعد 
        خصم $days أيام هو ". date("Y-m-d", $timestamps);


    }
}else {

    
}

}




?>

<form action="" method="post">
    <label for="days">Enter Number of Days :</label>
    <input type="text" name="days">
    <?= $error[0] ?? ''?>
    <select name="operation" id="">
        <option>Select Operation</option>
        <option value="+">Add</option>
        <option value="-">Sub</option>
    </select>
    <?= $error[1] ?? ''?>

    <button type="submit">Add</button>
</form>

 
    
</body>
</html>