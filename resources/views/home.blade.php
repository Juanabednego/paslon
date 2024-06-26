<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
        body {
            padding-top: 56px;
        }
        .sidebar {
            position: fixed;
            top: 56px;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            border-right: 1px solid white;
        }
        .navbar-toggler {
            position: absolute;
            right: 0;
            top: 10px;
        }
       
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar {
            border-bottom: 1px solid white;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <nav class="sidebar" style="background-color: #333333;">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="color: white;"><i class="fas fa-home" style="color: white;"></i> Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;"><i class="fas fa-user-circle" style="color: white;"></i> Profils</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;"><i class="fas fa-history" style="color: white;"></i> Service</a>
        </li>
        <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#" id="visiMisiDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                <i class="fas fa-eye" style="color: white;"></i> Visi Misi
            </a>
            <div class="dropdown-menu" aria-labelledby="visiMisiDropdown" style="background-color: #333333;">
                <a class="dropdown-item" href="/visi" style="color: white;">Visi</a>
                <a class="dropdown-item" href="/misi" style="color: white;">Misi</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;"><i class="fas fa-tasks" style="color: white;"></i> Project</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;"><i class="fas fa-users" style="color: white;"></i> Team</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;"><i class="fas fa-star" style="color: white;"></i> Testimonial</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white;"><i class="fas fa-envelope" style="color: white;"></i> Contact</a>
        </li>
    </ul>
</nav>




    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  fixed-top" style="background-color: #333333;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: white;"> Admin Paslon</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class = "btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Main content -->
    <div class="main-content">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x float-right"></i>
                            <h3 class="card-title">Total Users</h3>
                            <h4 class="card-text">100</h4>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="text-white">View Users</a>
                            <span class="badge badge-light">New</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">
                            <i class="fas fa-boxes fa-3x float-right"></i>
                            <h3 class="card-title">Total Products</h3>
                            <h4 class="card-text">50</h4>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="text-white">View Products</a>
                            <span class="badge badge-light">Updated</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-warning text-white mb-4">
                        <div class="card-body">
                            <i class="fas fa-cog fa-3x float-right"></i>
                            <h3 class="card-title">Settings</h3>
                            <h4 class="card-text">General</h4>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="text-white">Manage Settings</a>
                            <span class="badge badge-light">Configured</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>
