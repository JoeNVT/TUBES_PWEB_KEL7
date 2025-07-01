<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - M-TUGAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons (optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f7fa;
        }
        .sidebar {
            height: 100vh;
            background-color: #3269e8;
            color: white;
        }
        .sidebar a {
            color: white;
            text-decoration: none;
        }
        .sidebar .menu-title {
            font-size: 12px;
            padding-left: 1.2rem;
            margin-top: 1rem;
            text-transform: uppercase;
            opacity: 0.6;
        }
        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        .card-custom {
            border-left: 5px solid #4e73df;
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58,59,69,.15);
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-2 sidebar p-4">
            <h4 class="fw-bold"><i class="fa fa-list me-2"></i>M-TUGAS</h4>
            <hr class="border-light">
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link"><i class="fas fa-tachometer-alt me-2"></i> Dashboard</a>
                </li>
                <div class="menu-title">Menu Admin</div>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link"><i class="fa fa-user me-2"></i> Data User</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link"><i class="fa fa-tasks me-2"></i> Data Tugas</a>
                </li>
                <div class="menu-title">Menu Karyawan</div>
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link"><i class="fa fa-tasks me-2"></i> Data Tugas</a>
                </li>
            </ul>
        </div>

        <!-- Main content -->
        <div class="col-md-10 p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3><i class="fa fa-tachometer-alt me-2"></i> Dashboard</h3>
                <div class="d-flex align-items-center">
                    <span class="me-2">Iqbal IT</span>
                    <img src="https://ui-avatars.com/api/?name=Iqbal+IT&background=random&color=fff" class="rounded-circle" width="40" height="40" alt="User Avatar">
                </div>
            </div>

            <!-- Info card -->
            <div class="card shadow card-custom mb-4" style="max-width: 300px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-primary">TOTAL USER</h6>
                        <h4 class="fw-bold mb-0">1</h4>
                    </div>
                    <div class="text-secondary">
                        <i class="fa fa-calendar fa-2x"></i>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="text-center text-muted mt-5">
                <p>&copy; Your Website 2020</p>
            </footer>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
