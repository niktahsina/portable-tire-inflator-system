<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products - Portable Tire Inflator System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body>
  <div class="container-fluid p-0 min-vh-100">
    <div class="row g-0 min-vh-100">
 
      <!-- Sidebar -->
      <div class="col-auto bg-dark text-white p-3 d-flex flex-column flex-shrink-0" style="width: 260px;">
        <a href="layout.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <i class="bi bi-tools fs-4 me-2"></i>
          <span class="fs-5 fw-bold">Tire Inflator Admin</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item mb-1">
            <a href="layout.php" class="nav-link text-white"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
          </li>
          <li class="nav-item mb-1">
            <a href="products.php" class="nav-link text-white active bg-primary"><i class="bi bi-box-seam me-2"></i> Products</a>
          </li>
          <li class="nav-item mb-1">
            <a href="#" class="nav-link text-white"><i class="bi bi-people me-2"></i> Customers</a>
          </li>
          <li class="nav-item mb-1">
            <a href="#" class="nav-link text-white"><i class="bi bi-person-badge me-2"></i> Staffs</a>
          </li>
          <li class="nav-item mb-1">
            <a href="#" class="nav-link text-white"><i class="bi bi-cart-check me-2"></i> Orders</a>
          </li>
          <li class="nav-item mb-1">
            <a href="#" class="nav-link text-white"><i class="bi bi-list-columns-reverse me-2"></i> Order Details</a>
          </li>
          <li class="nav-item mb-1">
            <a href="#" class="nav-link text-white"><i class="bi bi-receipt me-2"></i> Invoices</a>
          </li>
        </ul>
      </div>
 
      <!-- Main Content Area -->
      <div class="col p-4 bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm rounded px-3 mb-4">
          <span class="navbar-brand mb-0 h1">Products Management - Portable Tire Inflator</span>
        </nav>
        
        <div class="card shadow-sm p-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="mb-0">Product List</h4>
            <button class="btn btn-primary btn-sm"><i class="bi bi-plus-circle me-1"></i> Add New Tire Inflator</button>
          </div>
          
          <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
              <tr>
                <th>ID</th>
                <th>Model Name</th>
                <th>Max Pressure (PSI)</th>
                <th>Battery Capacity</th>
                <th>Price (RM)</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Apex Pro Digital Smart Inflator</td>
                <td>150 PSI</td>
                <td>6000 mAh</td>
                <td>RM 149.00</td>
                <td>
                  <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>VoltX Ultra Mini Compressor</td>
                <td>120 PSI</td>
                <td>4000 mAh</td>
                <td>RM 99.00</td>
                <td>
                  <button class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></button>
                  <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>