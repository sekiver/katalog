<?php include "header.php"; ?>
<!-- Get Data Product -->
<?php 
  if(isset($_GET["id"])){
    $id_product = $_GET["id"];
    $sql = "SELECT * FROM wec_product WHERE id_product = $id_product";
    $rsProduct = $db->select($sql);  
  }
?>
<!-- End Get Data Product -->
<!-- Get Data Categori -->
<?php 
  $sql = "SELECT * FROM wec_category";
  $DtCat = $db->select($sql);  
?>
<!-- End Data Categori -->
  <!-- Page -->
  <section id="page-wrap">
    <div class="container">
      <!-- Page Title -->
      <div class="page-title">
        <h2><?php echo isset($_GET["id"]) ? "Edit" : "Add"; ?> Product</h2>
        <p>Form input data product</p>
      </div>
      <!-- End Page Title -->

      <!-- Page Content -->
      <div class="page-content">
      <form action="save_product.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-4 thumbnail-product">
              <div class="box">
                <?php 
                  if(@$rsProduct[0]["foto"]==""){
                ?>
                  <img src="../assets/images/no-images.png" alt="">   
                <?php 
                  } else {
                ?>
                  <img src="../assets/uploads/product/<?= $rsProduct[0]["foto"] ?>" alt="">                      
                <?php 
                  }
                ?>                                
                <input type="file" name="foto" id="foto">
                <input type="hidden" name="old_foto" value="<?= @$rsProduct[0]["foto"] ?>">
              </div>              
            </div>
            <div class="col-lg-8">
              <div class="box">
                <input type="hidden" name="id_product" id="id_product" value="<?= @$rsProduct[0]["id_product"] ?>">
                <div class="mb-3">
                    <label for="kd_product" class="form-label">Kode Product</label>
                    <input type="text" class="form-control" id="kd_product" name="kd_product" value="<?= @$rsProduct[0]["kd_product"] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="nm_product" class="form-label">Nama Product</label>
                    <input type="text" class="form-control" id="nm_product" name="nm_product" value="<?= @$rsProduct[0]["nm_product"] ?>" required>
                </div>
                <div class="mb-3">
                  <label for="id_cat" class="form-label">Kategori</label>
                  <select class="form-select" aria-label="Kategori" name="id_cat" required>
                    <option value="" selected>- Pilih Kategori -</option>
                    <?php 
                      // List Data Kategori
                      foreach($DtCat as $rsCat){
                    ?>
                    <option value="<?= $rsCat["id_cat"] ?>" <?= $rsCat["id_cat"]==@$rsProduct[0]["id_cat"] ? "selected" : "" ?>><?= $rsCat["nm_cat"] ?></option>
                    <?php
                      }
                    ?>
                  </select>
                </div> 
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Product</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="<?= @$rsProduct[0]["harga"] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" value="<?= @$rsProduct[0]["stok"] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="diskon" class="form-label">Diskon</label>
                    <input type="number" class="form-control" id="diskon" name="diskon" value="<?= @$rsProduct[0]["diskon"] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="desc_product" class="form-label">Deskripsi</label>
                    <textarea class="form-control" id="desc_product" name="desc_product" rows="3" required><?= @$rsProduct[0]["desc_product"] ?></textarea>
                </div>      
                <div class="mb-3">
                  <label for="status" class="form-label">Status</label>
                  <select class="form-select" aria-label="status" name="status" required>
                    <option <?= @$rsProduct[0]["status"]==1 ? "selected" : "" ?> value="1" >Available</option>
                    <option <?= @$rsProduct[0]["status"]==0 ? "selected" : "" ?> value="0">Not Available</option>
                  </select>
                </div>                         
                <div class="mb-3">
                    <input type="submit" value="SIMPAN" class="btn btn-primary">
                </div>                    
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- End Page Content -->
    </div>
  </section>
  <!-- End Page -->

<?php include "footer.php"; ?>