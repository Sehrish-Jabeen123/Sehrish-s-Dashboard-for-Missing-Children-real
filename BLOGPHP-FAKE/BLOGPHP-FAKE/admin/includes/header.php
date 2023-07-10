<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 

 
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
<script>
  $(document).ready(function() {
    $('#addadminprofile').modal('hide'); // Optional: Hide the modal on page load
  });
</script>


    <!-- Your navigation menu code here -->

    <!-- Include Bootstrap JavaScript at the end of the body section -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fc;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 20px;
        }

        .page-heading {
            margin-bottom: 20px;
        }

        .page-heading h1 {
            color: #166fe5;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
        }

        .card {
            background-color: #ffffff;
            border: 1px solid #166fe5;
            border-radius: 4px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .card-header {
            background-color: gray;
            color: #ffffff;
            font-weight: bold;
            padding: 10px;
            border-radius: 4px 4px 0 0;
        }

        .chart-area,
        .chart-pie {
            height: 250px;
        }

        .text-danger {
            color: #dc3545;
        }

        .text-success {
            color: #28a745;
        }

        .text-warning {
            color: #ffc107;
        }

        .text-primary {
            color: #166fe5;
        }
        /* Custom styles for the modal */
        .modal-content {
            border-radius: 0;
        }

        .modal-header {
            background-color: #007bff;
            color: #fff;
        }

        .modal-title {
            color: #fff;
        }

        .modal-body {
            padding: 20px;
        }

        .modal-footer {
            background-color: #fff;
            border-top: none;
            padding: 15px;
        }

        .btn-secondary {
            background-color: #fff;
            color: #333;
            border-color: #333;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
        /* Custom styles for the navbar */
        .navbar-nav .nav-link {
            color: #007bff;
        }

        .navbar-nav .nav-link:hover {
            color: #0056b3;
        }

        .dropdown-menu {
            background-color: #fff;
            border: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .dropdown-item {
            color: #333;
        }

        .dropdown-item:hover {
            background-color: #007bff;
            color: #fff;
        }

        .img-profile {
            width: 32px;
            height: 32px;
            object-fit: cover;
            border-radius: 50%;
        }



       .bg-gradient-primary {
    background-color: #5A5A5A;
    background-image: linear-gradient(180deg,#5A5A5A 10%,#5A5A5A 100%);
    background-size: cover;
        }
    </style>

    <title>SEH Admin  - Dashboard</title>

    <!-- Custom fonts for


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
