<?php

// ================================ CONNECTION ================================

include_once "../../shared/db_connection.php";

// ================================== SHARED ==================================

include_once "../../shared/head.php";
include_once "../../shared/navbar.php";

// ================================== QUERIES ==================================

// get the order id from database to URL
if (isset($_GET['show'])) {
    $one_data_id = $_GET['show'];   // GET the data from URL

    $select_one_data_query = "SELECT * FROM `orders_data` WHERE order_id = $one_data_id;";
    $select_one_data = mysqli_query($conn, $select_one_data_query);

    $one_data = mysqli_fetch_assoc($select_one_data);   // Fetching data as associative array
}


?>





<main>
    <div class="container col-md-8 my-5">

        <div class="row my-2">
            <div class="col-md-6">
                <h3>Order ID = <?= $one_data['order_id'] ?></h3>
            </div>
            <div class="col-md-6">
                <div class="d-grid">
                    <a href="./list.php" class="flaot-end btn btn-info"><i class="fa-solid fa-backward"></i> Back</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5>Customer ID: <?= $one_data['customer_id'] ?></h5>
                <hr>
                <h5>Customer Name: <?= $one_data['customer_firstName'] . " " . $one_data['customer_lastName'] ?></h5>
                <hr>
                <h5>Product Name: <?= $one_data['product_name'] ?></h5>
                <hr>
                <h5>Product Price: <?= $one_data['product_price'] ?></h5>
                <hr>
                <h5>Amount: <?= $one_data['amount'] ?></h5>
            </div>
        </div>
    </div>
</main>






<?php
include_once "../../shared/script.php";
?>