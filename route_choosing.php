<?php
session_start();
?>
<?php include "header.php" ?>
</head>

<body id="main">
    <!-- Navigation -->
    <?php include("navigation.php") ?>

    <div class="container select_collector">
        <!-- Three columns of text below the carousel -->
        <div class="row mt-5 d-flex justify-content-center align-items-center">
            <h1 class="mb-3">Select Your Route</h1>
            <div class="col-lg-5">
                <img src="route1.jpg" class="rounded" style="width: 450px; height: 270px;" alt="Route1" />
                <p class="d-flex justify-content-center" style="margin-top: 10px;">
                    <a href="backoff.php" class="btn btn-secondary" style="width: 200px;">Route 1</a>
                </p>
            </div>
            <div class="col-lg-5">
                <img src="route2.jpg" class="rounded" style="width: 450px; height: 270px;" alt="Route2" />
                <p class="d-flex justify-content-center" style="margin-top: 10px;">
                    <a href="backoff.php" class="btn btn-secondary" style="width: 200px;">Route 2</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Footer  -->
    <?php include "footer.php"; ?>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>