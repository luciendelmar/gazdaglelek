<?php   

    include('functions_new.php');

    $sql = "SELECT cardData FROM cards WHERE id=1";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_row($result);
    mysqli_free_result($result);    
    mysqli_close($conn);

    echo json_encode($data);

?>