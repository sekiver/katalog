<?php include "header.php"; ?>

  <!-- Page -->
  <section id="page-wrap">
    <div class="container">
      <!-- Page Title -->
      <div class="page-title">
        <h2>Dashboard</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, quis.</p>
      </div>
      <!-- End Page Title -->

      <!-- Page Content -->
      <div class="page-content">
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <div class="statistik-item">
                <div class="row">
                  <div class="content col">
                    <?php
                      // Total Data Product
                      $sql = "SELECT COUNT(*) as total FROM wec_product";
                      $data = $db->select($sql);
                    ?>
                    <h4>Total Product</h4>
                    <h1><?= $data[0]["total"] ?></h1>
                  </div>
                  <div class="icon col">
                    <i class="fas fa-box-open"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <div class="statistik-item">
                <div class="row">
                  <div class="content col">
                    <?php
                      // Total Category
                      $sql = "SELECT COUNT(*) as total FROM wec_category";
                      $data = $db->select($sql);
                    ?>
                    <h4>Category</h4>
                    <h1><?= $data[0]["total"] ?></h1>
                  </div>
                  <div class="icon col">
                    <i class="fas fa-tags"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
              <div class="statistik-item">
                <div class="row">
                  <div class="content col">
                    <?php
                      // Total Category
                      $sql = "SELECT COUNT(*) as total FROM wec_pages";
                      $data = $db->select($sql);
                    ?>                    
                    <h4>Pages</h4>
                    <h1><?= $data[0]["total"] ?></h1>
                  </div>
                  <div class="icon col">
                    <i class="far fa-newspaper"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="box">
            <h3 class="mb-3">Product Terbaru</h3>
            <!-- Get Data -->
            <?php 
              //$sql = "SELECT * FROM wec_product";
              $sql = "SELECT p.*,c.nm_cat FROM wec_product AS p INNER JOIN wec_category AS c ON p.id_cat = c.id_cat ORDER BY p.id_product DESC LIMIT 0,5";
              $data = $db->select($sql);
            ?>
              <table id="example" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Diskon</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      foreach($data as $rsProduct){
                  ?>
                  <tr>
                      <td><?= $rsProduct["kd_product"] ?></td>
                      <td><?= $rsProduct["nm_product"] ?></td>
                      <td><?= $rsProduct["nm_cat"] ?></td>
                      <td><?= $rsProduct["harga"] ?></td>
                      <td><?= $rsProduct["stok"] ?></td>
                      <td><?= $rsProduct["diskon"]." %" ?></td>
                      <td>
                        <?php 
                          if($rsProduct["status"]==1){
                        ?>
                        <span class="badge bg-success">Available</span>
                        <?php } else { ?>
                        <span class="badge bg-danger">Not Available</span>
                        <?php 
                          } 
                        ?>
                      </td>
                  </tr>
                  <?php 
                      }
                  ?>               
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Content -->
    </div>
  </section>
  <!-- End Page -->
<?php include "footer.php"; ?>