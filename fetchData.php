<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Headers: *');

    include 'includes/session.php';
    
    $conn = $pdo->open();

    $stmt = $conn->query("SELECT * FROM products where not category_id =2 and not category_id >=11");

    $emparray = array();
    while (($row = $stmt->fetch(PDO::FETCH_ASSOC)) !== false) {
        $emparray[] = $row;
    }
    echo json_encode($emparray);
?>