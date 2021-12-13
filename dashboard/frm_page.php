<?php include "header.php"; ?>
<!-- Get Data Kategori -->
<?php 
  if(isset($_GET["id"])){
    $id_page = $_GET["id"];
    $sql = "SELECT * FROM wec_pages WHERE id_page= $id_page";
    $rsPage = $db->select($sql);  
  }
?>
<!-- End Get Data Kategori -->
  <!-- Page -->
  <section id="page-wrap">
    <div class="container">
      <!-- Page Title -->
      <div class="page-title">
        <h2><?php echo isset($_GET["id"]) ? "Edit" : "Add"; ?> Page</h2>
        <p>Form input data kategori</p>
      </div>
      <!-- End Page Title -->

      <!-- Page Content -->
      <div class="page-content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                    <form action="save_page.php" method="post">
                        <input type="hidden" name="id_page" id="id_page" value="<?= @$rsPage[0]["id_page"] ?>">
                        <div class="mb-3">
                            <label for="title_page" class="form-label">Judul</label>
                            <input type="text" class="form-control" id="title_page" name="title_page" value="<?= @$rsPage[0]["title_page"] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="tgl_page" class="form-label">Tanggal</label>
                            <input type="date" class="form-control" id="tgl_page" name="tgl_page" value="<?= @$rsPage[0]["tgl_page"] ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="content_page" class="form-label">Content</label>
                            <textarea class="form-control txtEditor" id="content_page" name="content_page" rows="10"><?= @$rsPage[0]["content_page"] ?></textarea>
                        </div>
                        <div class="mb-3">
                          <label for="publish" class="form-label">Status</label>
                          <select class="form-select" aria-label="publish" name="publish" required>
                            <option <?= @$rsPage[0]["publish"]==1 ? "selected" : "" ?> value="1" >Publish</option>
                            <option <?= @$rsPage[0]["publish"]==0 ? "selected" : "" ?> value="0">Draft</option>
                          </select>
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