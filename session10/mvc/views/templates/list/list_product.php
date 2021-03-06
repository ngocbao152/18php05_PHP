
  <?php include "views/templates/header.php" ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Quản Lý Shop</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">

                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Image</th>
                      <th></th>
                      <th></th>
                    </tr>
                  <?php foreach ($post as $row) : ?>
                    <?php
                      $id = $row['id'];
                    ?>
                    <tr>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['name'] ?></td>
                      <td><?php echo $row['description'] ?></td>
                      <td><?php echo $row['price'] ?></td>
                      <td><img src="<?php echo 'public/uploads/'.$row['image'] ?>" width='4%'></td>
                      <td><a href="admin.php?controller=list&action=edit&id=<?php echo$id?>"><button type='button' class='btn btn-warning'>Edit</button></a></td>
                      <td><a href="admin.php?controller=list&action=delete&id=<?php echo$id?>"><button type='button' class='btn btn-danger'>Delete</button></a></td>
                    </tr>
                  <?php endforeach; ?>

          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- /.content-wrapper -->
  <?php include "views/templates/footer.php" ?>
