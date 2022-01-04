<?php
// include 'config/constants.php';

function get_ip(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function countItems(){
    global $conn;
    $ip= get_ip();
        $run_items = mysqli_query($conn,"SELECT * FROM cart WHERE ip = '$ip'");
        echo $count_items = mysqli_num_rows($run_items);
    
}
function total_price(){
    global $conn;
    $total =0;
    $ip = get_ip();
    $run_cart = mysqli_query($conn,"SELECT * FROM cart WHERE ip ='$ip'");
    while($fetch_cart=mysqli_fetch_array($run_cart)){
        $p_id = $fetch_cart['p_id'];
        $result_product = mysqli_query($conn,"SELECT * FROM tbl_product WHERE p_id = '$p_id'");
        while($fetch_product =mysqli_fetch_array($result_product)){
            $product_price = array($fetch_product['p_price']);
            $product_name = array($fetch_product['p_name']);
            $product_company = array($fetch_product['p_company']);
            $product_image = array($fetch_product['p_image']);
            $sing_price = array($fetch_product['p_price']);
            $values = array_sum($product_price);
            $total += $values;
        }
    }
    echo $total;
}

?>