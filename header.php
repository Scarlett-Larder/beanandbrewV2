<header class="header">
        <div>
            <h1 class="header_title"><a class="dontshow" href="/beanandbrewv2/page.php">Bean and brew</a></h1>
        </div>

        <div class="header_sub">
            <a href="/beanandbrewv2/products.php">Products</a>
            <a href="pickup.php">Pick-up</a>
            <a href="pickup.php">Baking</a>
            <?php 
            if (isset($_COOKIE["user"])) {
                $user = $_COOKIE["user"];
                echo"<a href='dashboard.php'> Hello, ". $user ."! </a>";
            }
            else {
                echo"<a href='login.php'>Login</a>";
            }
            ?>

        </div>
</header>