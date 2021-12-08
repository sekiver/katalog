<?php include "header.php"; ?>
<!-- Get Data Kategori -->
<?php 
  if(isset($_GET["id"])){
    $id_cat = $_GET["id"];
    $sql = "SELECT * FROM wec_category WHERE id_cat= $id_cat";
    $rsCat = $db->select($sql);  
  }
?>
<!-- End Get Data Kategori -->
  <!-- Page -->
  <section id="page-wrap">
    <div class="container">
      <!-- Page Title -->
      <div class="page-title">
        <h2><?php echo isset($_GET["id"]) ? "Edit" : "Add"; ?> Category</h2>
        <p>Form input data kategori</p>
      </div>
      <!-- End Page Title -->

      <!-- Page Content -->
      <div class="page-content">
        <div class="row">
            <div class="col-md-6">
                <div class="box">
                    <form action="save_category.php" method="post">
                        <input type="hidden" name="id_cat" id="id_cat" value="<?= @$rsCat[0]["id_cat"] ?>">
                        <div class="mb-3">
                            <label for="nm_cat" class="form-label">Nama Category</label>
                            <input type="text" class="form-control" id="nm_cat" name="nm_cat" value="<?= @$rsCat[0]["nm_cat"] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="desc_cat" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="desc_cat" name="desc_cat" rows="3" required><?= @$rsCat[0]["desc_cat"] ?></textarea>
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="SIMPAN" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      <!-- End Page Content -->
    </div>
  </section>
  <!-- End Page -->

<?php include "footer.php"; ?>