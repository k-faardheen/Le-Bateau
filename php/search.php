<?php
$row = "";
$string;
$i = 0;
if(isset($_POST['search'])){
    $search = $_POST['search'];
    include('connection.php');

    $sql = "select * from postContent where title like '%$search%'";
    $rs = mysqli_query($conn, $sql);
    if(mysqli_num_rows($rs)<1){
        echo json_encode("Not Found");
    }else{
        while($row = mysqli_fetch_assoc($rs)){
$string[$i]=$row;
        $i++;
    }
    echo json_encode($string);
}
}

mysqli_close($conn);
?>