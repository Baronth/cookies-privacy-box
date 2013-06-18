<?php
/*
 * If $lang is not set:
 * 
 * Joomla:
 * $lang = $doc->getLanguage();
 * It returns: en-en
 * 
 * Wordpress (depends on installed plugins, this is the default of the configuration file):
 * $lang = get_locale(); -
 * It returns: en_US
 * 
 * --
 * 
 * Change the url of $cookiesMoreinfo or remove the link from the text.
 * 
 */

$cookiesMoreinfo = "#";

if (isset($lang)) {
    $cookiesLang = $lang;
} else {
    $cookiesLang = 'en';
}

switch ($cookiesLang) {
    case 'it':
        $cookiesText = "La direttiva europea 2009/136/CE (E-Privacy) regolamenta l'utilizzo dei cookie. Questo sito utilizza i cookie. <a id=\"cookiesMoreinfo\" href=\"$cookiesMoreinfo\">Pi&ugrave; info</a>";
        break;
    case 'de':
        $cookiesText = "La direttiva europea 2009/136/CE (E-Privacy) regolamenta l'utilizzo dei cookie. Questo sito utilizza i cookie. <a id=\"cookiesMoreinfo\" href=\"$cookiesMoreinfo\">Pi&ugrave; info</a>";
        break;
    default:
        $cookiesText = "The European Directive 2009/136/EC (E-Privacy) regulates the use of cookies. This site uses cookies. <a id=\"cookiesMoreinfo\" href=\"$cookiesMoreinfo\">More info</a>";
        break;
}

if (!isset($_COOKIE['cookieAccepted'])) {
    ?>
    <div id="cookiesDiv">
        <span id="cookiesSentence">
            <span id="cookiesText"><?php echo $cookiesText; ?></span>
            <span class="cookiesButton" id="cookiesScriptEnabled">OK</span>
        </span>
    </div>
    <?php
}
?>