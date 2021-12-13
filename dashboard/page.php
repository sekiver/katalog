<?php include "header.php"; ?>

  <!-- Page -->
  <section id="page-wrap">
    <div class="container">
      <!-- Page Title -->
      <div class="page-title">
        <h2>Pages</h2>
        <p>Menampilkan semua data pages</p>
      </div>
      <!-- End Page Title -->

      <!-- Page Content -->
      <div class="page-content">
        <a href="frm_page.php" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> ADD NEW</a>

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
            $sql = "SELECT * FROM wec_pages";
            $data = $db->select($sql);
        ?>
        <!-- End Get Data -->
        <table id="dtPages" class="dtTable table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">Judul</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Status</th>
                    <th scope="col" width="15%">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($data as $rsPage){
                ?>
                <tr>
                    <td><?= $rsPage["title_page"] ?></td>
                    <td><?= $rsPage["tgl_page"] ?></td>
                    <td>
                        <?php 
                        if($rsPage["publish"]==1){
                      ?>
                      <span class="badge bg-success">Publish</span>
                      <?php } else { ?>
                      <span class="badge bg-warning">Draft</span>
                      <?php 
                        } 
                      ?>
                    </td>
                    <td>
                        <a href="frm_page.php?id=<?= $rsPage["id_page"] ?>" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                        <a href="delete_page.php?id=<?= $rsPage["id_page"] ?>" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
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