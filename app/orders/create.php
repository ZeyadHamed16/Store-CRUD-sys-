<?php

// ================================ CONNECTION ================================

include_once "../../shared/db_connection.php";

// ================================== SHARED ==================================

include_once "../../shared/head.php";
include_once "../../shared/navbar.php";

// ================================== QUERIES ==================================

// show all customers from database
$select_customers_query = "SELECT * FROM customers";
$customers_data = mysqli_query($conn, $select_customers_query);

// show all products from database
$select_products_query = "SELECT * FROM products";
$products_data = mysqli_query($conn, $select_products_query);

// add order to database
$message = null; // Message appears when the operation create is successful

if (isset($_POST['Create_order'])) {

    $customer_id = $_POST['customer_id'];
    $product_id = $_POST['product_id'];
    $amount = $_POST['amount'];

    $insert_order_query = "INSERT INTO orders (customer_id, product_id, amount) VALUES ($customer_id, $product_id, $amount);";
    $insert_order = mysqli_query($conn, $insert_order_query);

    // Check if it success or not
    if ($insert_order) {
            $message = "Create order successful";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    
}


?>






<main>
    <div class="container col-md-8 my-5">

        <div class="row my-2">
            <div class="col-md-6">
                <h3>Create Order</h3>
            </div>
            <div class="col-md-6">
                <div class="d-grid">
                    <a href="./list.php" class="flaot-end btn btn-info"><i class="fa-solid fa-backward"></i> Back</a>
                </div>
            </div>
        </div>

        <div class="card">
            <!-- ==================================== Successful Message ====================================  -->

            <?php if ($message != NULL): ?>
                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>

            <!-- ======================================= Adding Order =======================================  -->

            <div class="card-body">
                <form method="post">
                    <div class="row mb-3">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <select name="customer_id" class="form-control" required>
                                    <option value="" selected disabled hidden>Select Customer</option>
                                    <?php foreach ($customers_data as $customer_data): ?>
                                        <!-- Selecte customers data from there IDs -->
                                        <option value="<?= $customer_data['customer_id']; ?>"> <?= $customer_data['customer_firstName'] . " " . $customer_data['customer_lastName']; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select name="product_id" class="form-control" required>
                                    <option value="" selected disabled hidden>Select Product</option>
                                    <?php foreach ($products_data as $product_data): ?>
                                        <!-- Selecte product data from there IDs -->
                                        <option value="<?= $product_data['product_id']; ?>"> <?= $product_data['product_name']; ?> </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="amount" class="form-control" placeholder="Amount" required>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-info" name="Create_order"><i class="fa-solid fa-plus"></i> Create now</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>






<?php
include_once "../../shared/script.php";
?>