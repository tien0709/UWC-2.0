<?php
session_start();
?>
<?php include "header.php" ?>
    <link rel="stylesheet" href="css/chooseMCPS.css"/>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

            // Khi select thay đổi giá trị
            $('#mySelect_2').on('change', function() {
                // Gửi yêu cầu AJAX để lấy dữ liệu mới từ máy chủ
                $.ajax({
                    url: 'ajax_filter_MCP.php', // Đường dẫn đến file xử lý yêu cầu AJAX
                    type: 'POST',
                    data: {capacity: $(this).val()}, // Dữ liệu gửi đi (tuổi được chọn)
                    success: function(data) {
                        // Cập nhật nội dung của bảng với dữ liệu mới
                        // Chuyển chuỗi JSON sang đối tượng JavaScript
var jsonData = JSON.parse(data);

// Tạo bảng và thêm tiêu đề
var table = $('<table class="table table-bordered table-hover" id="data-table">');
var headerRow = $('<tr>');
headerRow.append($('<th class="text-center">').text('ID'));
headerRow.append($('<th class="text-center">').text('Khu vực'));
headerRow.append($('<th class="text-center">').text('Quản lí'));
headerRow.append($('<th class="text-center">').text('Trạng thái'));
headerRow.append($('<th class="text-center">').text('Hoạt động'));
table.append(headerRow);

// Lặp qua các phần tử trong đối tượng và thêm các hàng vào bảng
for (var i = 0; i < jsonData.length; i++) {
    var row = $('<tr>');
    row.append($('<td>').text(jsonData[i].mcp_id));
    row.append($('<td>').text(jsonData[i].mcp_address));
    row.append($('<td>').text(jsonData[i].mcp_manager));
    row.append($('<td>').text(jsonData[i].capacity));
    row.append(
        $('<td>').append(
          $('<a class="btn btn-success myUpdate"   href="#">').text('Cập nhật'),
          $('<a class="btn btn-danger myDelete"  href="#">').text('Xóa'),
        )
    );
    table.append(row);
}

// Gán bảng cho phần tử HTML
$('#data-table').html(table);
                    }
                });
            });

    // nut Delete
        $('.myDelete').on('click', function() {
                // Gửi yêu cầu AJAX để lấy dữ liệu mới từ máy chủ
                var mcp_id = $(this).data('id');
                $.ajax({
                    url: 'ajax_delete_MCP.php', // Đường dẫn đến file xử lý yêu cầu AJAX
                    type: 'POST',
                    data: {id: mcp_id}, // Dữ liệu gửi đi (tuổi được chọn)
                    success: function(data) {
                        // Cập nhật nội dung của bảng với dữ liệu mới
                        // Chuyển chuỗi JSON sang đối tượng JavaScript
var jsonData = JSON.parse(data);

// Tạo bảng và thêm tiêu đề
var table = $('<table class="table table-bordered table-hover" id="data-table">');
var headerRow = $('<tr>');
headerRow.append($('<th class="text-center">').text('ID'));
headerRow.append($('<th class="text-center">').text('Khu vực'));
headerRow.append($('<th class="text-center">').text('Quản lí'));
headerRow.append($('<th class="text-center">').text('Trạng thái'));
headerRow.append($('<th class="text-center">').text('Hoạt động'));
table.append(headerRow);

// Lặp qua các phần tử trong đối tượng và thêm các hàng vào bảng
for (var i = 0; i < jsonData.length; i++) {
    var row = $('<tr>');
    row.append($('<td>').text(jsonData[i].mcp_id));
    row.append($('<td>').text(jsonData[i].mcp_address));
    row.append($('<td>').text(jsonData[i].mcp_manager));
    row.append($('<td>').text(jsonData[i].capacity));
    row.append(
        $('<td>').append(
            $('<a class="btn btn-success myUpdate" href="#"  data-id="' + jsonData[i].mcp_id + '">').text('Cập nhật'),
            $('<a class="btn btn-danger myDelete" href="#"  data-id="' + jsonData[i].mcp_id + '">').text('Xóa')
        )
    );
    table.append(row);
}

// Gán bảng cho phần tử HTML
$('#data-table').html(table);
                    }
                });
            });
        });
    </script>
  </head>
  <body>
  <!-- Navigation -->
  <?php include("navigation.php"); ?>

  <!-- Main webpage-->
    <!-- Background-->
    <div class="content">
        <h3 class="text-center">QUẢN LÝ MCPs</h3>

        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="AddMcp.php"><input class="btn btn-primary" type="button" value="Thêm MCP"></a>
                </div>

             <!--   <div class="col input-group mb-3">
                    <select class="custom-select" id="mySelect_1">
                        <option selected>Lọc theo khu vực</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div> -->
                <div class="col input-group mb-3">
                    <select class="custom-select" id="mySelect_2">
                        <option selected value="all">Lọc theo trạng thái</option>
                        <option value="0%">0%</option>
                        <option value="25%">25%</option>
                        <option value="50%">50%</option>
                        <option value="75%">75%</option>
                        <option value="100%">100%</option>
                    </select>
                </div>
                <script>
                /*const select_2 = document.getElementById("mySelect_2");
                select_2.addEventListener("change", function() {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "url_of_your_server", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("selectedOption_2=" + this.value);
                });  */           
                </script>
            </div>
        </div>

        <table class=" table table-bordered table-hover" id="data-table">
            <tr class="thead text-center">
                <th>ID</th>
                <th>Khu vực</th>
                <th>Quản lí</th>
                <th>Trạng thái</th>
                <th>Hoạt động</th>
            </tr>

        <?php          
                include "connection.php";
                $display_query = "SELECT * FROM mcps";             
                $results = mysqli_query($con,$display_query);   
                while($row = mysqli_fetch_assoc($results)){
                    echo "<tr>";
                    echo "<td>".$row['mcp_id']."</td>";
                    echo "<td>".$row['mcp_address']."</td>";
                    echo "<td>".$row['mcp_manager']."</td>";
                    echo "<td>".$row['capacity']."</td>";
                    echo "<td>";
                    echo "<a class='btn btn-success' href='UpdateMcp.php?id=" . $row['mcp_id'] . "'>Cập nhật</a>";
                    echo "<a class='btn btn-danger myDelete' data-id='".$row['mcp_id']."' >Xóa</a>";
                    echo "</td>";
                    echo "</tr>";

                }
        ?>
        </table>
        <script>
            function Update(id) {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "UpdateMCPS.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send("Delete=" + id);
            }

        </script>
       <!-- <div>
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </div> -->
    </div>

    
     <!-- Footer  -->
  <?php include "footer.php"; ?>
  
  <!-- Select areas scripts -->
  <script src="js/assign_route.js"></script>
  <!--mdb-->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>
</html>