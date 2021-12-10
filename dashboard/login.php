<?php include "header.php"; ?>

    <!-- Page -->
    <section id="page-wrap">
        <div class="container">
            <main class="form-signin text-center">
                <form action="cek_login.php" method="POST">
                    <img class="mb-4" src="../assets/images/logo.svg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
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
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                </form>
            </main>
        </div>
    </section>
    <!-- End Page -->

<?php include "footer.php"; ?>