
  <!-- Footer -->
  <footer>
    <div class="container">
      <p>&#169; INFORMATIKA 1 - 2021/2022</p>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Bootstrap JS -->
  <script src="../assets/js/bootstrap.min.js"></script>
  <!-- Data Table  -->
  <script src="../assets/plugins/DataTables/js/jquery.dataTables.min.js"></script>
  <script src="../assets/plugins/DataTables/js/dataTables.bootstrap5.min.js"></script>
  <!-- Summer Note JS -->
  <script src="../assets/plugins/CKEditor/ckeditor.js"></script>

  <script>
    $(document).ready(function () {
      $('.dtTable').DataTable();
      // Init CKEditor
      ClassicEditor
      .create( document.querySelector( '#content_page' ) )
      .catch( error => {
          console.error( error );
      });
    });
  </script>
</body>

</html>