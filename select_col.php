<?php include "header.php" ?>
<?php
    session_start();
?>
</head>
    <body id ="main">
    <!-- Navigation Include -->
    <?php include("navigation.php") ?>
    <!-- Main content -->
    <div id ="intro" class="p-3 bg-light">
        <div class="container">
            <div class="headerwall col-4" >
                <h1 class="display-3 ">Welcome back, Back Officer </h1>
                <p class="fw-light">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
            </div>
        </div>
    </div>
        <div class="container select_collector" >
            <!-- Three columns of text below the carousel -->
            <div class="row mt-5" >
                <h1 class = "mb-3">Select Your Collector</h1>
                <div class="col-lg-4" >
                    <img src="https://i.pravatar.cc/300" class="rounded-circle" style="width: 150px;"alt="Avatar" />            
                    <h2 class = "mt-2">Linda</h2>
                    <p><a href = "collector_view.php" class="btn btn-secondary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4" >
                    <img src="https://i.pravatar.cc/300" class="rounded-circle" style="width: 150px;"alt="Avatar" />       
                    <h2 class = "mt-2">Keira</h2>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4" >
                    <img src="https://i.pravatar.cc/300" class="rounded-circle" style="width: 150px;"alt="Avatar" />                       
                    <h2 class = "mt-2">Tommy</h2>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4" >
                    <img src="https://i.pravatar.cc/300" class="rounded-circle" style="width: 150px;"alt="Avatar" />                      
                        <h2 class = "mt-2">Yenefer</h2>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4" >
                    <img src="https://i.pravatar.cc/300" class="rounded-circle" style="width: 150px;"alt="Avatar" />                      
                        <h2 class = "mt-2">Julia</h2>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
                <div class="col-lg-4" >
                    <img src="https://i.pravatar.cc/300" class="rounded-circle" style="width: 150px;"alt="Avatar" />       
                    <h2 class = "mt-2">Kim</h2>
                    <p><a class="btn btn-secondary" href="#">View details »</a></p>
                </div>
            </div>
    </div>
    <!-- Footer  -->
    <?php include "footer.php"; ?>
    </body>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</html>
<!-- This is end of the file >< -->