<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body">
        <h2 class="mb-1">Dashboard</h2>
        <p class="text-muted mb-0">Welcome to the Portable Tire Inflator Management System</p>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-12">
        <div class="card shadow-sm border-0 bg-white p-4">
            <h3>System Overview</h3>
            <p class="text-muted">Use the sidebar navigation to manage products, customers, staff members, customer orders, and print sales invoices for portable tire inflators.</p>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0 bg-primary text-white">
            <div class="card-body text-center p-4">
                <i class="bi bi-box-seam display-4 mb-3"></i>
                <h4>Products</h4>
                <p class="card-text">Manage inventory, prices, and specifications of tire inflators.</p>
                <a href="products.php" class="btn btn-light text-primary fw-bold mt-2">Manage Products</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0 bg-success text-white">
            <div class="card-body text-center p-4">
                <i class="bi bi-people display-4 mb-3"></i>
                <h4>Customers</h4>
                <p class="card-text">Track registered customer profiles and contact details.</p>
                <a href="customers.php" class="btn btn-light text-success fw-bold mt-2">Manage Customers</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0 bg-dark text-white">
            <div class="card-body text-center p-4">
                <i class="bi bi-cart-check display-4 mb-3"></i>
                <h4>Orders & Invoices</h4>
                <p class="card-text">Monitor customer orders, order details, and print invoices.</p>
                <a href="orders.php" class="btn btn-light text-dark fw-bold mt-2">Manage Orders</a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>