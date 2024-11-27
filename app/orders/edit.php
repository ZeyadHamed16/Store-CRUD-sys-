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

// Get the order ID from URL to pre-fill the form fields
if (isset($_GET['edit'])) {
    $update_one_data_id = $_GET['edit'];   // GET the data from URL
    $update_one_data_query = "SELECT * FROM orders WHERE order_id = $update_one_data_id;";
    $update_one_data = mysqli_query($conn, $update_one_data_query);

    $one_data = mysqli_fetch_assoc($update_one_data);   // Fetching data as associative array

}


// update order in database
$message = null; // Message appears when the operation create is successfulF
if (isset($_POST['update'])) {
    $customer_id = $_POST['customer_id'];
    $product_id = $_POST['product_id'];
    $amount = $_POST['amount'];

    $update_order_query = "UPDATE orders SET customer_id = $customer_id, product_id = $product_id, amount = $amount WHERE order_id = $update_one_data_id";

    $update_order = mysqli_query($conn, $update_order_query);


    // Check if it success or not
    if ($update_order) {
        $message = "Order updated successfully.";
    } else {
        $message = "Error: " . mysqli_error($conn);
    }
}



?>






<main>
    <div class="container col-md-8 my-5">

        <div class="row my-2">
            <div class="col-md-6">
                <h3>Update Order ID = <?= $one_data['order_id'] ?></h3>
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
                                        <!-- <option value="<?= $customer_data['customer_id']; ?>"> <?= $customer_data['customer_firstName'] . " " . $customer_data['customer_lastName']; ?> </option> -->
                                        <option value="<?= $customer_data['customer_id']; ?>"
                                            <?= $one_data['customer_id'] == $customer_data['customer_id'] ? 'selected' : ''; ?>>
                                            <?= $customer_data['customer_firstName'] . " " . $customer_data['customer_lastName']; ?>
                                        </option>
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
                                        <!-- <option value="<?= $product_data['product_id']; ?>"> <?= $product_data['product_name']; ?> </option> -->
                                        <option value="<?= $product_data['product_id']; ?>"
                                            <?= $one_data['product_id'] == $product_data['product_id'] ? 'selected' : ''; ?>>
                                            <?= $product_data['product_name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="amount" class="form-control" placeholder="Amount" value="<?= $one_data['amount']; ?>" required>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-info" name="update"><i class="fa-solid fa-check"></i> Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>






<?php
include_once "../../shared/script.php";
?>