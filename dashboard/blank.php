<?php
$page = 'buttons';
$title = 'Buttons';
$css = <<<EOT
    <!--page level css -->
    <link rel="stylesheet" href="../css/pages/buttons.css" />
    <!--end of page level css-->
EOT;
  include 'include/_header.php';
  include 'include/_navbar.php';
  include 'include/_menuleft.php';
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
            <p>Start a beautiful journey here</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">Blank Page</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">Load Your Data Here</div>
            </div>
          </div>
        </div>
      </div>
<?php
  include 'include/_footer.php';
?>
</body>
</html>
