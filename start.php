<?php
require "includes/header.php";
require "includes/loader.php";
require "includes/nav.php";
?>

<main>
    <div class="loader-cont">
        <div class="loader">
            <div class="shadow"></div>
            <img src="img/logo.svg" alt="loading icon"/>
        </div>
    </div>

    <h1 id="title">Which do you prefer?</h1>

    <div class="container-fluid">

        <form class="row" id="preferences-form" action="search_results.php" method="post">

            <div class="col-xs-6 button-cont button-1">
                <input type="radio" name="location" value="rural" id="rural"/>
                <label for="rural" class="btn btn-primary pref-btn" type="button">
                    Rural
                </label>
            </div>
            <div class="col-xs-6 button-cont button-1">
                <input type="radio" name="location" value="urban" id="urban"/>
                <label for="urban" class="btn btn-primary pref-btn" type="button">
                    Urban
                </label>
            </div>

            <div class="col-xs-6 button-cont button-2 inactive">
                <input type="radio" name="weather" value="mountain" id="mountain"/>
                <label for="mountain" class="btn btn-primary pref-btn" type="button">
                    Mountains
                </label>
            </div>
            <div class="col-xs-6 button-cont button-2 inactive">
                <input type="radio" name="weather" value="beach" id="beach"/>
                <label for="beach" class="btn btn-primary pref-btn" type="button">
                    Beaches
                </label>
            </div>

            <div class="col-xs-6 button-cont button-3 inactive">
                <input type="radio" name="activity" value="relaxing" id="relaxing"/>
                <label for="relaxing" class="btn btn-primary pref-btn" type="button">
                    Relax
                </label>
            </div>
            <div class="col-xs-6 button-cont button-3 inactive">
                <input type="radio" name="activity" value="nightlife" id="nightlife"/>
                <label for="nightlife" class="btn btn-primary pref-btn" type="button">
                    Nightlife
                </label>
            </div>

            <div class="col-xs-6 button-cont button-4 inactive">
                <input type="radio" name="cost" value="high" id="high"/>
                <label for="high" class="btn btn-primary pref-btn" type="button">
                    High-End
                </label>
            </div>
            <div class="col-xs-6 button-cont button-4 inactive">
                <input type="radio" name="cost" value="thrifty" id="thrifty"/>
                <label for="thrifty" class="btn btn-primary pref-btn" type="button">
                    Thrifty
                </label>
            </div>

            <div class="col-xs-6 button-cont button-5 inactive">
                <input type="radio" name="family" value="adults" id="adults"/>
                <label for="adults" class="btn btn-primary pref-btn" type="button">
                    Adult Getaway
                </label>
            </div>
            <div class="col-xs-6 button-cont button-5 inactive">
                <input type="radio" name="family" value="kids" id="kids"/>
                <label for="kids" class="btn btn-primary pref-btn" type="button">
                    Family Vacation
                </label>
            </div>

            <div class="col-xs-6 button-cont button-6 inactive">
                <input type="radio" name="popularity" value="popular" id="popular" onchange="this.form.submit()"/>
                <label for="popular" class="btn btn-primary pref-btn" type="button">
                    Popular
                </label>
            </div>
            <div class="col-xs-6 button-cont button-6 inactive">
                <input type="radio" name="popularity" value="hidden" id="hidden" onchange="this.form.submit()"/>
                <label for="hidden" class="btn btn-primary pref-btn" type="button">
                    Hidden Gem
                </label>
            </div>
        </form>

        <div class="preference-slide left" id="left-slide-6">
            <img src="img/popular2-500.jpg" alt="popular" sizes="50vw"
                 srcset="img/popular2-207.jpg 207w, img/popular2-500.jpg 500w, img/popular2-960.jpg 960w"/>
        </div>
        <div class="preference-slide right" id="right-slide-6">
            <img src="img/secret3-500.jpg" alt="hidden-gem" sizes="50vw"
                 srcset="img/secret3-207.jpg 207w, img/secret3-500.jpg 500w, img/secret3-960.jpg 960w"/>
        </div>
        <div class="preference-slide left" id="left-slide-5">
            <img src="img/adult4-500.jpg" alt="adult" sizes="50vw"
                 srcset="img/adult4-207.jpg 207w, img/adult4-500.jpg 500w, img/adult4-960.jpg 960w"/>
        </div>
        <div class="preference-slide right" id="right-slide-5">
            <img src="img/kid-500.jpg" alt="kid-friendly" sizes="50vw"
                 srcset="img/kid-207.jpg 207w, img/kid-500.jpg 500w, img/kid-960.jpg 960w"/>
        </div>

        <div class="preference-slide left" id="left-slide-4">
            <img src="img/high3-500.jpg" alt="high-end" sizes="50vw"
                 srcset="img/high3-207.jpg 207w, img/high3-500.jpg 500w, img/high3-848.jpg 960w"/>
        </div>
        <div class="preference-slide right" id="right-slide-4">
            <img src="img/thrifty4-500.jpg" alt="thrifty" sizes="50vw"
                 srcset="img/thrifty4-207.jpg 207w, img/thrifty4-500.jpg 500w, img/thrifty4-960.jpg 960w"/>
        </div>

        <div class="preference-slide left" id="left-slide-3">
            <img src="img/relax3-500.jpg" alt="relaxing" sizes="50vw"
                 srcset="img/relax3-207.jpg 207w, img/relax3-500.jpg 500w, img/relax3-960.jpg 960w"/>
        </div>
        <div class="preference-slide right" id="right-slide-3">
            <img src="img/nightlife-500.jpg" alt="nightlife" sizes="50vw"
                 srcset="img/nightlife-207.jpg 207w, img/nightlife-500.jpg 500w, img/nightlife-960.jpg 960w"/>
        </div>

        <div class="preference-slide left" id="left-slide-2">
            <img src="img/mountain3-500.jpg" alt="mountain" sizes="50vw"
                 srcset="img/mountain3-207.jpg 207w, img/mountain3-500.jpg 500w, img/mountain3-960.jpg 960w"/>
        </div>
        <div class="preference-slide right" id="right-slide-2">
            <img src="img/beach-512.jpg" alt="beach" sizes="50vw"
                 srcset="img/beach4-207.jpg 207w, img/beach4-500.jpg 500w, img/beach4-960.jpg 960w"/>
        </div>

        <div class="preference-slide left" id="left-slide-1">
            <img src="img/rural8-only.jpg" alt="rural" sizes="50vw"
                 srcset="img/rural8-207.jpg 207w, img/rural8-512.jpg 500w, img/rural8-960.jpg 960w"/>
        </div>
        <div class="preference-slide right" id="right-slide-1">
            <img src="img/city3-512.jpg" alt="urban" sizes="50vw"
                 srcset="img/city3-207.jpg 207w, img/city3-512.jpg 500w, img/city3-960.jpg 960w"/>
        </div>

    </div> <!-- end container-fluid -->
</main>

<?php require "includes/footer-start.php" ?>
