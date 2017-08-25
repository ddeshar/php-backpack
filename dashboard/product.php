<?php
$page = 'product';
$title = 'product';
$css = <<<EOT
    <!--page level css -->

    <!--end of page level css-->
EOT;
  include 'include/_header.php';
  include 'include/_navbar.php';
  include 'include/_menuleft.php';
?>
      <div class="content-wrapper">
        <?php
          if (isset($_GET['source'])) {
            $source = $_GET['source'];
          } else {
            $source = '';
          }

          switch ($source) {
            case 'product_add';
            include "include/product_add.php";
            break;

            case 'product_edit':
            include "include/product_edit.php";
            break;

            default:
            include "include/view_all_products.php";
            break;
          }
        ?>
      </div>


<?php
  include 'include/_footer.php';
?>
<script type="text/javascript" src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>

</body>
</html>
