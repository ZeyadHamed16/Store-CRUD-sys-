<?php

// ================================ CONNECTION ================================

include_once "../../shared/db_connection.php";

// ================================== SHARED ==================================

include_once "../../shared/head.php";
include_once "../../shared/navbar.php";

include_once "../../shared/delete_func.php";    // Delete function to refresh the site

// ================================== QUERIES ==================================

// show all orders from database
$select_orders_query = "SELECT * FROM orders";
$orders_data = mysqli_query($conn, $select_orders_query);
//                  |
//                  |
//                  V
// $orders_data = array(
//     array('order_id' => '1','customer_id' => '5','product_id' => '9','amount' => '2','date' => '2024-06-22'),
//     array('order_id' => '2','customer_id' => '16','product_id' => '17','amount' => '5','date' => '2024-09-03'),
//     array('order_id' => '3','customer_id' => '14','product_id' => '5','amount' => '4','date' => '2023-10-15'),
//     array('order_id' => '4','customer_id' => '19','product_id' => '1','amount' => '6','date' => '2024-02-10'),
//     array('order_id' => '5','customer_id' => '20','product_id' => '4','amount' => '3','date' => '2024-04-07'),
//          and so on ...
//     );

$count = 0;     //Number of orders


// Delete specific order from the database
if (isset($_GET['delete'])) {
    $delete_one_data_id = $_GET['delete'];
    $delete_one_data_query = "DELETE FROM orders WHERE order_id = $delete_one_data_id";
    $delete_one_data = mysqli_query($conn, $delete_one_data_query);
    redirect('app/orders/list.php');
}

?>





<main>
    <div class="container col-md-8 my-5">

        <div class="row my-2">
            <div class="col-md-6">
                <h3>Orders</h3>
            </div>
            <div class="col-md-6">
                <div class="d-grid">
                    <a href="./create.php" class="flaot-end btn btn-info"><i class="fa-solid fa-plus"></i> Create New</a>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body text-center">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>#NUM</th>
                            <th>Order ID</th>
                            <th>Customer ID</th>
                            <th>Product ID</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($orders_data as $order_data): ?>
                            <tr>
                                <th> <?= ++$count ?> </th>
                                <td> <?= $order_data['order_id']; ?> </td>
                                <td> <?= $order_data['customer_id']; ?> </td>
                                <td> <?= $order_data['product_id']; ?> </td>
                                <td> <?= $order_data['amount']; ?> </td>
                                <td class="d-flex justify-content-center align-items-center gap-3">
                                    <a href="./show_one_row.php?show=<?= $order_data['order_id'] ?>"><i class="fa-solid fa-eye" title="SHOW"></i></a>
                                    <a href="./edit.php?edit=<?= $order_data['order_id'] ?>"><i class="text-warning fa-solid fa-pen-to-square" title="EDIT"></i></a>
                                    <a href="./list.php?delete=<?= $order_data['order_id'] ?>" onclick="return confirm('are you sure?')"><i class="text-danger fa-solid fa-trash" title="DELETE"></i></a>
                                    <!-- ?var = pass data to page URL -->
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>






<?php
include_once "../../shared/script.php";
?>