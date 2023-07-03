<header>
    <div class="header-bottom">
        <div class="container">
            <div class="header-wrapper">
                <div class="logo">
                    <a href="../index.php">
                        <img src="./assets/images/logo/logo2.png" alt="logo">
                    </a>
                </div>
                <ul class="menu ml-auto">
                    <li>
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="./product.php">Stock</a>
                    </li>
                    <li>
                        <a href="./faqs.php">faqs</a>
                    </li>
                    <li>
                        <a href="#">
                            <?php 
                                include_once("../model/db_connect.php");
                                if(isset($_SESSION['user_session'])){
                                    $sql = "SELECT * FROM user WHERE id='".$_SESSION['user_session']."'";
                                    $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
                                    $row = mysqli_fetch_assoc($resultset);
                                }

                                if(!isset($_SESSION['user_session'])){
                                    echo "My account";
                                    echo '<style>#h_dashboard { display:none;}</style>';
                                    echo '<style>#h_logout { display:none;}</style>';
                                } else {
                                    echo $row['name']; 
                                    echo '<style>#h_register { display:none;}</style>';
                                    echo '<style>#h_login { display:none;}</style>';
                                }
                            ?>
                        </a>
                        <ul class="submenu">
                            <li id="h_dashboard">
                                <a href="./dashboard.php">Dashboard</a>
                            </li>
                            <li id="h_register">
                                <a href="./sign-up.php">Register</a>
                            </li>
                            <li id="h_login">
                                <a href="./sign-in.php">Login</a>
                            </li>
                            <li id="h_logout">
                                <a href="../controller/logout.php">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="search-bar d-md-none">
                    <a href="#0"><i class="fas fa-search"></i></a>
                </div>
                <div class="header-bar d-lg-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>