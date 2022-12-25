<?php   

    include('functions_new.php');
    $cards = ($_POST['cards']);
    $cards = array_map('intval', $_POST['cards']);
    $cards_string = implode(',', $cards);

    $sql = "UPDATE cards SET cardData='$cards_string' WHERE id=1";
    $result = mysqli_query($conn,$sql);

    $sql = "SELECT cardData FROM cards WHERE id=1";
    $result = mysqli_query($conn,$sql);
    $data = mysqli_fetch_row($result);
    mysqli_free_result($result);    
    mysqli_close($conn);

    echo json_encode($data);

?>