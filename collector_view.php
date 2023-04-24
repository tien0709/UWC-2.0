<?php
    session_start();
?>
<?php include "header.php" ?>
</head>
    <body id ="main">
    <!-- Navigation Include -->
    <?php include("navigation.php") ?>
    <!-- Main content -->
    <div id ="intro" class="p-3 bg-light">
        <div class="container-fluid">
            <div class="headerwall col-4" >
                <h1 class="display-3 ">Welcome back, Back Officer </h1>
                <p class="fw-light">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple's marketing pages.</p>
            </div>
        </div>
    </div>
    <!-- Image Showcases-->
    <div class="container py-5 collector-information">
        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                <img src="https://i.pravatar.cc/300" alt="avatar"
                  class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-1">Linda</h5>
                <p class="mb-0">Collector</p>
                <p class="mb-2">Bristol, Tennessee(TN)</p>
                <div class="d-flex justify-content-center mb-2 button_infor">
                    <a href = './assign_area_choosing.php' role="button" class="btn ">Assign Area</a>
                    <a role="button" class="btn ">Message</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 ">
            <div class="card mb-4">
              <div class="card-body pb-lg-5">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">example@example.com</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Phone</p>
                  </div>
                  <div class="col-sm-9">
                    <p class=" mb-0">423-990-8820</p>
                  </div>
                </div>
                <hr>    
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Street</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">3525 Hershell Hollow Road</p>
                  </div>
                </div>
                <hr>    
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">State</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">Bristol, Tennessee(TN)</p>
                  </div>
                </div>
                <hr>    
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Country</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="mb-0">US(United States)</p>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    <!-- Footer  -->
    <?php include "footer.php"; ?>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    </body>
</html>
<!-- This is end of the file >< -->