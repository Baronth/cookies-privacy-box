Cookies Privacy Box
===================

* cookies-box.css
* cookies-box.js
* cookies-box.php
* cookies-box-save.php
* cookies-box-config.php

cookies-box.css
---------------

	Contains the style of the box.

cookies-box.js
--------------

        Contains the function that create the cookies and do an AJAX request to cookies-box-save.php
	Used only Javascript ( not JQuery or similar ) for a larger compatibility.


cookies-box.php
---------------

HTML code of the box, displayed only if the ser haven't already accepted.
	

cookies-box-save.php
--------------------

Save the informations of those people who clicked "OK" in a db table.
Creates the table "cookies-box" if not already present.


cookies-box-config.php
----------------------

Config file with db infos.

How
---

* The file cookies-box.php controls if the user have the "cookieAccepted" cookie.
* If it's present, it does mean that the user already clicked "OK".
* If it's not present, a box with a short text and a "OK" button is displayed.
* Clicking "OK" the function inside cookies-box.js creates the cookie, send it to the user and save in the database some user infos.
* The infos are saved through cookies-box-save.php.
* Infos saved: ip, user-agent, referer page, timestamp.
        
> If Javascript is not enabled, the button "OK" is not displayed.

* * *

NB
--

cookies-box.js contains a variable with the path of the file cookies-box-save.php
cookies-box-config.php contains the db infos.
cookies-box-config.php have to be in the same folder of cookies-box-save.php