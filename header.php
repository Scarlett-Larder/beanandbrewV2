<header class="header">
        <div>
            <h1 class="header_title"><a class="dontshow" href="/beanandbrewv2/page.php">Bean and brew</a></h1>
        </div>

        <div class="header_sub">
            <a href="/beanandbrewv2/products.php">Products</a>
            <a href="orders.php">Pick-up</a>
            <a href="baking.php">Baking</a>
            <?php 
            session_start();
            if (isset($_COOKIE["user"])) {
                $user = $_COOKIE["user"];
                echo"<a href='dashboard.php'> Hello, ". $user ."! </a>";
            }
            else if (isset($_SESSION["user"])) {
                $user = $_SESSION["user"];
                echo"<a href='dashboard.php'> Hello, ". $user ."! </a>";
            }
            else {
                echo"<a href='login.php'>Login</a>";
            }
            ?>

        </div>
</header>