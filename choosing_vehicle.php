<?php include 'header.php' ?>

</head>
  <body id ="main" >
  <!-- My login page starts here -->
<!-- Section: Design Block -->
<!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">MVP 2.0</a>
            <div class="navbar-expand " id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Pay my bill</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Drop off location</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Find my branch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">My account</a>
                    </li>
                </ul>
            </div>
            <p class = "wel mb-1">Welcome back, back officer !</p>
        </div>
    </nav>
<!-- Main webpage -->
    <div id ="intro" class="p-3 bg-light">
        <div class="container">
            <div class="headerwall col-4" >
                <h1 class="display-3 ">Welcome back, Back Officer </h1>
                <p class="fw-light">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
            </div>
        </div>
    </div>
    <div class="container mt-2 chose_veh">
        <h1 class = "my-5">Choose your vehicles</h1>
        <div class="row my-5" >
            <div class="col-md-3" >
                <div class="row g-0 border rounded overflow-hidden position-relative" >
                    <div class="col-auto d-none d-lg-block">
                    <img class="img-fluid mt-4" src="http://localhost/UWC-2.0/img/car1.png">
                </div>
                <div class="col p-4 d-flex flex-column position-static" >
                <h3 class="mb-0">ISUZU 10T8</h3>
                <div class="mb-1 text-muted" >37C - 13531</div>
                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="calendar.php" class="btn btn-lg">Choose</a>
                </div>
            </div>
            </div>
            <div class="col-md-3" >
            <div class="row g-0 border rounded overflow-hidden position-relative" >
                <div class="col-auto d-none d-lg-block">
                    <img class="img-fluid mt-4" src="http://localhost/UWC-2.0/img/car2.png">
                </div>
                <div class="col p-4 d-flex flex-column position-static" >
                <h3 class="mb-0">HYUNDAI HD260 10T21</h3>
                <div class="mb-1 text-muted" >29H - 47393</div>
                <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                <a href="calendar.php" class="btn btn-lg">Choose</a>
                </div>
            </div>
            </div>

            <div class="col-md-3" >
                <div class="row g-0 border rounded overflow-hidden position-relative" >
                    <div class="col-auto d-none d-lg-block">
                    <img class="img-fluid mt-4" src="http://localhost/UWC-2.0/img/car3.png">
                </div>
                <div class="col p-4 d-flex flex-column position-static" >
                    <h3 class="mb-0">HYUNDAI PORTER H150 1T3</h3>
                    <div class="mb-1 text-muted" >29H - 23771</div>
                    <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="calendar.php" class="btn btn-lg">Choose</a>
                </div>
                </div>
            </div>
        </div>
      </div>

<?php include './footer.php'; ?>