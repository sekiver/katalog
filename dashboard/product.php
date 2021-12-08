<?php include "header.php"; ?>

  <!-- Page -->
  <section id="page-wrap">
    <div class="container">
      <!-- Page Title -->
      <div class="page-title">
        <h2>Product</h2>
        <p>Menampilkan semua data product</p>
      </div>
      <!-- End Page Title -->

      <!-- Page Content -->
      <div class="page-content">
        <a href="frm_product.php" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> ADD NEW</a>

        <!-- Notifitacion -->
        <?php 
          if(isset($_GET["mess"])){
        ?>
        <div class="alert alert-<?php echo $_GET["type"]; ?>" role="alert">
          <?php 
            echo $_GET["mess"];
          ?>          
        </div>
        <?php 
          }
        ?>
        <!-- End Notification -->

        <!-- Get Data -->
        <?php 
            //$sql = "SELECT * FROM wec_product";
            $sql = "SELECT p.*,c.nm_cat FROM wec_product AS p INNER JOIN wec_category AS c ON p.id_cat = c.id_cat";
            $data = $db->select($sql);
        ?>
        <!-- End Get Data -->
        <table id="dtProduct" class="dtTable table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Diskon</th>
                    <th scope="col">Status</th>
                    <th scope="col" width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($data as $rsProduct){
                ?>
                <tr>
                    <td>
                      <?php 
                        if($rsProduct["foto"]==""){
                      ?>
                        <img class="thumbnail" src="../assets/images/no-images.png" alt="">   
                      <?php 
                        } else {
                      ?>
                        <img class="thumbnail" src="../assets/uploads/product/<?= $rsProduct["foto"] ?>" alt="">                      
                      <?php 
                        }
                      ?>
                    </td>
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
                    <td>
                        <a href="frm_product.php?id=<?= $rsProduct["id_product"] ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                        <a href="delete_product.php?id=<?= $rsProduct["id_product"] ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php 
                    }
                ?>
            </tbody>
        </table>

      </div>
      <!-- End Page Content -->
    </div>
  </section>
  <!-- End Page -->

<?php include "footer.php"; ?>