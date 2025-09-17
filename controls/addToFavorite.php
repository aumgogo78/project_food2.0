<?php 
    session_start();

    if(isset($_POST['productsId'],
        $_POST['productsName'],
        $_POST['productsPrice'],
        $_POST['productsImage']
    )){
        $productId = $_POST['productsId'];
        $productName = $_POST['productsName'];
        $productPrice = $_POST['productsPrice'];
        $productImage = $_POST['productsImage'];

        //พื้นที่สร้างตระกร้าสินค้่า
        if(!isset($_SESSION['favor'])){
            $_SESSION['favor'] = [];
        }

        //ตรวจสอบว่าในตระกร้ามีสินค้าชนิดเดียวกันไหม?
        $found = false;
        foreach($_SESSION['favor'] as &$item ) {
            if($item['productId'] == $productId) {
                $item['quantity'] += 1;
                $found = true;
                break;
            }
        }

        //ถ้าไม่มีสินค้าชนิดเดียวกันอยู่ในตระกล้า, เพิ่มสินค้าใหม่เข้าตระกล้าแทน
        if(!$found) {
            $_SESSION['favor'][] = [
                'productId' => $productId,
                'productName' => $productName,
                'productPrice' => $productPrice,
                'productImage' => $productImage,
                'quantity' => 1
            ];
        }
    }
?>