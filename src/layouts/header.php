 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Dashboard Admin</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <!-- Font Awesome Icons -->
     <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
     <!-- IonIcons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
     <!-- Theme style -->
     <link href="../assets/css/styles.css" rel="stylesheet" />

     <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">

     <style>
         a {
             text-decoration: none !important;
         }
     </style>
 </head>

 <body class="hold-transition sidebar-mini">
     <div class="wrapper">
         <!-- Navbar -->
         <nav class="main-header navbar navbar-expand navbar-white navbar-light">
             <!-- Left navbar links -->
             <ul class="navbar-nav">
                 <li class="nav-item">
                     <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                 </li>
                 <li class="nav-item d-none d-sm-inline-block">
                     <a href="./admin.php" class="nav-link">Home</a>
                 </li>
                 <li class="nav-item d-none d-sm-inline-block">
                     <a href="./data_hotels.php" class="nav-link">Data Hotels</a>
                 </li>
                 <li class="nav-item d-none d-sm-inline-block">
                     <a href="./data_rooms.php" class="nav-link">Data Rooms</a>
                 </li>
                 <li class="nav-item d-none d-sm-inline-block">
                     <a href="./data_reservations.php" class="nav-link">Data Reservations</a>
                 </li>
                 <li class="nav-item d-none d-sm-inline-block">
                     <a href="./data_guests.php" class="nav-link">Data Guests</a>
                 </li>
             </ul>

             <!-- Right navbar links -->
             <!-- Right navbar links -->
             <div class="navbar-nav ml-auto">
                 <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                     <div class="input-group">
                         <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                         <button class="btn btn-primary" id="btnNavbarSearch" type="button">
                             <i class="fas fa-search"></i>
                         </button>
                     </div>
                 </form>
                 <ul class="d-flex align-items-center m-0 p-0">
                     <!-- Navbar-->
                     <a class="dropdown-item" href="../../index.php">
                         <i class="fas fa-user fa-fw"></i>
                         Logout
                     </a>
                 </ul>
             </div>
         </nav>
         <!-- /.navbar -->

         </nav>
         <!-- /.navbar -->