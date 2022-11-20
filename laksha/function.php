<?php

include "dp.php";

//money update
function money_update($s_an,$r_an,$ammount){
    global $conn;
    // ammount
    $sql = "SELECT * FROM `users` WHERE account_number = $s_an";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    $a =$row['current_balance'];
    // maths
    $c = $a - $ammount;

    // sender

    $sql1 = "UPDATE `users` SET `current_balance` = '$c' WHERE `users`.`account_number` = $s_an;";
    mysqli_query($conn,$sql1);

    // Receiver 
    $sql3 = "SELECT * FROM `users` WHERE account_number = $r_an";
    $res1 = mysqli_query($conn,$sql3);
    $row1 = mysqli_fetch_assoc($res1);
    $ra = $row1['current_balance'];
    // maths
    $ar = $ra + $ammount;

    $sql4 = "UPDATE `users` SET `current_balance` = '$ar' WHERE `users`.`account_number` = $r_an;";
    mysqli_query($conn,$sql4);
    
}




function show_all_user(){
    global $conn;
    $query = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $posts = [];
        while($row = mysqli_fetch_assoc($result)){
            $posts[] = $row;
        }
        return $posts;
    } else{
        return [];
    }

     
}


function show_users($id){
    global $conn;
    $query = "SELECT * FROM `users` WHERE `id`='$id';";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        $posts = [];
        while($row = mysqli_fetch_assoc($result)){
            $posts[] = $row;
        }
        return $posts;
    } else{
        return [];
    }
}




?>

