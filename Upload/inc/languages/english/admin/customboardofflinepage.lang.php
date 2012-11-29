<?php

/*
/¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯\
|     » Copyright Notice «      |
|¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯| 
| » Custom Board Offline Page   |
|   1.0 © 2012                  |
| » Released free of charge     |
| » You may edit or modify      |
|   this plugin, however you    |
|   may not redistribute it.    |
| » This notice must stay       |
|   intact for legal use.       |
|                               |
/¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯\
| » Custom Board Offline Page « |
|         » 1.0 © 2012 «        |
\_______________________________/
*/

$l['name'] = "Custom Board Offline Page";
$l['info_desc'] = "Automatically redirects all users to your custom maintenance page as soon as the board is set to offline, then stops redirecting when set back to online.";

$l['settinggroup_desc'] = "Settings to configure the Custom Board Offline Page plugin.";
$l['enable'] = "Do you want to enable the Custom Board Offline Page plugin?";
$l['enable_desc'] = "If you set this option to yes, users will be automatically redirected to a URL except for specified usergroups.";

$l['url'] = "Please enter the URL you want your users to be redirected to when the board is offline.";
$l['url_desc'] = "You must enter a protocol (such as http://) before your URL.";

$l['disablefor'] = "Allow which groups to not get redirected while your board is closed?";
$l['disablefor_desc'] = "Please seperate each group id with a comma (e.g 1,2,3)";
?>