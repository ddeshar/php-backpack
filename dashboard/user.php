<?php
$page = 'user';
$title = 'user';
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

            if ($source == "user_add") {
              include "include/users/user_add.php";

            } else if ($source == "user_edit"){
              include "include/users/user_edit.php";
              
            }else{
              include "include/users/view_all_users.php";
            }
        ?>
      </div>


<?php
  include 'include/_footer.php';
?>
<script type="text/javascript" src="assets/js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="assets/js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>

<script>
  $(document).ready(function() {
      var brand = document.getElementById('logo-id');
      brand.className = 'attachment_upload';
      brand.onchange = function() {
          document.getElementById('fakeUploadLogo').value = this.value.substring(12);
      };

      // Source: http://stackoverflow.com/a/4459419/6396981
      function readURL(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              
              reader.onload = function(e) {
                  $('.img-preview').attr('src', e.target.result);
              };
              reader.readAsDataURL(input.files[0]);
          }
      }
      $("#logo-id").change(function() {
          readURL(this);
      });
  });
</script>

</body>
</html>
