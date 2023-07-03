<div class="col-sm-10 col-md-7 col-lg-4">
    <div class="dashboard-widget mb-30 mb-lg-0">
        <div class="user">
            <!-- <div class="thumb-area">
                <div class="thumb">
                    <img src="./assets/images/dashboard/user.png" alt="user">
                </div>
                <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                <input type="file" id="profile-pic" class="d-none">
            </div> -->
            <div class="content">
                <h5 class="title"><a href="#0"><?php echo $row['name']; ?></a></h5>
                <span class="username"><?php echo $row['email']; ?></span>
            </div>
        </div>
        <ul class="dashboard-menu">
            <li>
                <a href="./dashboard.php" class="active"><i class="flaticon-dashboard"></i>Dashboard</a>
            </li>
            <li>
                <a href="my-offer.php"><i class="flaticon-auction"></i>My Offers</a>
            </li>
            <li>
                <a href="winning-offers.php"><i class="flaticon-best-seller"></i>Winning Offers</a>
            </li>
            <li>
                <a href="my-buy.php"><i class="flaticon-star"></i>Buy Now</a>
            </li>
            <li>
                <a href="profile.php"><i class="flaticon-settings"></i>Personal Profile </a>
            </li>
        </ul>
    </div>
</div>