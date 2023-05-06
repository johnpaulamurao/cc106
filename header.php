<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <title>Dashboard</title>

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-success navbar-light">
        <div class="container-fluid">
            <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link " href="#"><strong><?= $_SESSION['name'];?></strong> |</a>
                            </li>
                            <li class="nav-item">
                    <a class="nav-link " href="dashboard.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="location.php">Location</a>
                                </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="gallery.php">Gallery</a>
                                    </li>
                                        <li class="nav-item">
                                        <a class="nav-link " href="blog.php">Blog</a>
                                         </li>
                                         <li class="nav-item">
                                        <a class="nav-link " href="admin.php">Admin</a>
                                         </li>
                                         <li class="nav-item">
                                        <a class="nav-link " href="react.php">React</a>
                                         </li>
            </ul>
        </div>
    </nav> 