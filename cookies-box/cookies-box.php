<?php
if (!isset($_COOKIE['cookieAccepted'])) {
    ?>
    <div id="cookiesDiv">
        <span id="cookiesSentence">
            <span id="cookiesText">Cookies help us to give you the best performance for our website. <a href="#">More info</a></span>
            <span class="cookiesButton" id="cookiesScriptEnabled">OK</span>
        </span>
    </div>
    <?php
}
?>