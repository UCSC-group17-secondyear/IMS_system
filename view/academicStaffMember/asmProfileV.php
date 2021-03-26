<?php
    require '../basic/topnav.php';
?>

<main>
    <title>Profile</title>

    <div class="sansserif">
        <ul class="breadcrumbs">
            <li><a href="asmHomeV.php">Home</a></li>
            <li class="active">My Profile</li>
        </ul>

        <div class="row">
            <div class="col left20">
                <?php
                    require 'asmSideNavV.php';
                ?>
            </div>

            <div class="col right80">
                <div>
                    <h2>Profile</h2>
                </div>
                <div class="signupForm">
                    <?php
    					require '../basic/profileV.php';
					?>
                    <a href="asmHomeV.php">
                        <button type="submit" class="cancelbtn">Cancel</button>
                    </a>
                </div>
                <button onclick="topFunction()" id="myTopBtn" title="Go to top"><i class="fa fa-arrow-circle-up"></i> Top</button>

                <script type="text/javascript">
                    var mybutton = document.getElementById("myTopBtn");
                    function topFunction() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    }
                </script>
            </div>
        </div>
    </div>
</main>

<?php
    require "../basic/footer.php";
?>