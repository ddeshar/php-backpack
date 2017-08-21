    <?php
      include 'include/_header.php';
      include 'include/_navbar.php';
    ?>

    <div class="container-fluid">
      <div class="row">
        <?php include 'include/_menuleft.php'; ?>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h1>Dashboard</h1>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                  <th>Header</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

<?php include 'include/_footer.php'; ?>
