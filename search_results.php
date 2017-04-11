<?php
require "includes/header.php";
require "includes/nav.php";
require "includes/dest-info.php";
require "includes/search-processor.php";
require "includes/request-qpx.php";
require "includes/loader.php";
?>

<main class="container-fluid">
    <div class="row">
        <div class="col-lg-12" id="dest-pic">
            <img src="img/cities/<?php echo $picture; ?>.jpg" alt="<?php echo $picture; ?>" />
        </div>
    </div>
    <div class="container">
        <article class="row" id="dest-info">
            <div class="col-md-8">
                <h2>
                    <?php echo $destination; ?>
                </h2>
                <p id="dest-description">
                    <?php
                    echo $description[$destination];

                    ?>
                </p>
            </div>
            <div class="col-md-4" id="travel-cost">
                <h3>Travel Costs</h3>
                <p>
                    <img src="img/plane.svg" alt="airfare price">
                    from
                    <?php echo $flight_price; ?>
                </p>
            </div>
        </article>
        <div class="row">
            <div class="col-md-8">
                <a class="btn btn-primary" id="search-again" href="/discover1/builds/development/start.php">Search Again</a>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</main>


<?php

require "includes/footer-relative.php";

?>
