<nav class="fh5co-nav" role="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-2">
                <div id="fh5co-logo"><a href="/katalog">Shop.</a></div>
            </div>
            <div class="col-md-6 col-xs-6 text-center menu-1">
                <ul>
                    <li class="has-dropdown">
                        <a href="product.php">Products</a>
                        <ul class="dropdown">
                            <?php
                                $sql = "SELECT * FROM wec_category";
                                $data = $db->select($sql);

                                foreach($data as $rsCat){
                            ?>
                            <li><a href="product.php?cat=<?= $rsCat["id_cat"] ?>"><?= $rsCat["nm_cat"]; ?></a></li>
                            <?php 
                                }
                            ?>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a></li>
                    <li class="has-dropdown">
                        <a href="services.html">Category</a>
                        <ul class="dropdown">
                            <li><a href="#">Web Design</a></li>
                            <li><a href="#">eCommerce</a></li>
                            <li><a href="#">Branding</a></li>
                            <li><a href="#">API</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
                <ul>
                    <li class="search">
                        <div class="input-group">
                            <input type="text" placeholder="Search..">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="button"><i
                                        class="icon-search"></i></button>
                            </span>
                        </div>
                    </li>
                    <li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
                </ul>
            </div>
        </div>

    </div>
</nav>