<?php
session_start();
?>
<?php include "header.php" ?>
    <link rel="stylesheet" href="css/assign_route.css"/>
    <link rel="stylesheet" href="css/assign_area.css"/>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  </head>
  <body>
  <!-- Navigation -->
  <?php include("navigation.php") ?>

  <!-- Main webpage-->
    <!-- Background-->
    <div id ="intro" class="p-3 bg-light">
    </div>

    <!--select area-->  
    <div class="container">
      <div class="row justify-content-md-center p-2">
        <div class="col-md-auto">

          <!-- <select class="form-select form-select-sm mb-3" id="city" aria-label=".form-select-sm">
            <option value="" selected>Chọn tỉnh thành</option>           
          </select> -->
          
          <select class="form-select form-select-sm mb-3" id="district" >
            <option value="" selected>Chọn quận huyện</option>
          </select>

          <select class="form-select form-select-sm" id="ward" >
            <option value="" selected>Chọn phường xã</option>
          </select>
        </div>    
      </div>
    </div>

    
    
    <!--Button-->
    <div class="d-grid gap-2 col-6 mx-auto">
      <!--Link to calendar-->
      <button class="btn btn-primary a" type="button" onclick="location.href='./calendar.php'">Select Area</button>
    </div>

     <!-- Footer  -->
  <?php include "footer.php"; ?>
  
  <!-- Select areas scripts -->

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <script src="js/assign_area.js"></script>
  <!--mdb-->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>
</html>