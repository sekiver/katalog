<?php include "header.php"; ?>

  <!-- Page -->
  <section id="page-wrap">
    <div class="container">
      <!-- Page Title -->
      <div class="page-title">
        <h2>Category</h2>
        <p>Menampilkan semua data kategori</p>
      </div>
      <!-- End Page Title -->

      <!-- Page Content -->
      <div class="page-content">
        <a href="frm_category.php" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> ADD NEW</a>

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
            $sql = "SELECT * FROM wec_category";
            $data = $db->select($sql);
        ?>
        <!-- End Get Data -->
        <table id="dtCategory" class="dtTable table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Nama Category</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col" width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($data as $rsCat){
                ?>
                <tr>
                    <td><?= $rsCat["nm_cat"] ?></td>
                    <td><?= $rsCat["desc_cat"] ?></td>
                    <td>
                        <a href="frm_category.php?id=<?= $rsCat["id_cat"] ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                        <a href="delete_category.php?id=<?= $rsCat["id_cat"] ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
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