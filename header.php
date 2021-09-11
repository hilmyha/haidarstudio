<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <?php wp_head(  ); ?>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark custom">
        <div class="container">
            <a class="navbar-brand " href="#">Site Name</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- navbar -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tutorials</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="jumbotron bg-dark text-light border p-5">
        <div class="container">
            <div class="row py-2">
                <div class="col py-2">
                    <h1 class="text-center text-md-start">Name Site</h1>
                    <p class="lead text-center text-md-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, voluptas!</p>
                </div>
                <div class="col py-2 d-none d-lg-block"></div>
            </div>
        </div>
    </section>