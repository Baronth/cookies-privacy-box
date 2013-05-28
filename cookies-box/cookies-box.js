window.onload = function() {
    var cookieButton = document.getElementById('cookiesScriptEnabled');
    if (cookieButton) {
        cookieButton.style.display = 'block';
        cookieButton.onclick = createCookie;
    }
}

function createCookie() {
    var name = 'cookieAccepted';
    var value = 'true';
    var cookiesDiv = document.getElementById('cookiesDiv');
    var date = new Date();
    /* I set the expire date one year after the click */
    date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000));
    var expires = "; expires=" + date.toGMTString();
    document.cookie = name + "=" + value + expires + "; path=/";
    cookiesDiv.style.opacity = '0';
    cookiesDiv.style.filter = 'alpha(opacity=0)';

    /**
     * Save the user infos through "cookies-box-save.php"
     */

    var url = "/wp-content/themes/leaf/includes/cookies-box-save.php";
    var data = "";
    var method = 'POST';
    var async = true;
    var xmlHttpRequst = false;


    if (window.XMLHttpRequest)
    {
        xmlHttpRequst = new XMLHttpRequest();
    }
    // IE
    else if (window.ActiveXObject)
    {
        xmlHttpRequst = new ActiveXObject("Microsoft.XMLHTTP");
    }

    // Se AJAX is supported
    if (xmlHttpRequst != false)
    {
        // Open the HTTP request
        xmlHttpRequst.open(method, url, async);
        // Set the request header (actually was useful only for a POST request...)
        xmlHttpRequst.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        // Callback on Readystate change
        xmlHttpRequst.onreadystatechange = function()
        {

        }
        xmlHttpRequst.send(data);
    }

}