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


Custom Board Offline Page 1.0 © 2012
------------------------------------
Author: Vernier
Compatibility: 1.6.X
Support: http://vernier.me
Description: Custom Board Offline Page automatically redirects users to a custom page while you have set the board to offline. When you reopen the board, users will automatically not be redirected anymore, meaning you only need to change one setting. This is particularly useful when performing maintenance on your board and don't want your users to see what you're doing. You can also specify which usergroups don't get redirected while the board is offline.

NB: Please do not leave support querys in the reviews; I can not contact you via the reviews, therefore will be unable to assist you. If you require support, please contact me: http://vernier.me


License:
--------
-> Allowed to Use
-> Allowed to Modify
-> Not Allowed to Distribute


Files Included In This Download:
--------------------------------
Upload:

 -> Upload/inc/languages/english/admin/customboardofflinepage.lang.php
 -> Upload/inc/plugins/customboardofflinepage.php

Documentation:

 -> Documentation/README.txt
 -> Documentation/License.txt
 -> Documentation/previews/settings.png


How to activate Custom Board Offline Page:
------------------------------------------
1. Upload the contents of the `Upload` Directory into your forum root.

2. Navigate to Admin Control Panel -> Configuration -> Plugins and search for Custom Board Offline Page. Click Activate.

3. Navigate to Admin Control Panel -> Configuration -> Settings and search for Custom Board Offline Page.

4. Configure the settings by using the `Custom Board Offline Page Settings` guide below.


How to use Custom Board Offline Page:
-------------------------------------
1. After activating and configuring the Custom Bord Offline Page plugin, Navigate to Admincp -> Configuration -> Settings -> Board Online / Offline -> Board Closed -> Yes. Now when users visit your board they will be redirected to the URL you specified in the Custom Board Offline Page's plugin settings, unless you've allowed that usergroup to not be redirected while your board is offline.

2. When you'd like to set your board back online, Navigate to Admincp -> Configuration -> Settings -> Board Online / Offline -> Board Closed -> No. Now when users visit your board they will be able to access your board normally again.


How to disable Custom Board Offline Page:
-----------------------------------------
1. Navigate to Admin Control Panel -> Configuration -> Settings and search for Custom Board Offline Page. Do you want to enable the Custom Board Offline Page plugin? Set this to No.


How to deactivate Custom Board Offline Page:
--------------------------------------------
1. Navigate to Admin Control Panel -> Configration -> Plugins and search for Custom Board Offline Page. Click Deactivate.


Custom Board Offline Page Settings:
-----------------------------------
There are three settings associated with Custom Board Offline Page. These are:

1. Do you want to enable the Custom Board Offline Page plugin?
 _____   _____
| Yes | |  No |
 ¯¯¯¯¯   ¯¯¯¯¯
2. Please enter the URL you want your users to be redirected to when the board is offline.
 ______________________________
| http://                      |
 ¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯
3. Allow which groups to not get redirected while your board is closed?
 ______________________________
| 4                            |
 ¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯¯

Setting #1 simply means do you want it to be active on your board. Set it to yes if you want to use this plugin on your board or set it to no if you don't want to.

Setting #2 requires you to enter the page you want to redirect your users to once your board is set to offline. Please note you must enter the URL's protocol such as http:// or https:// otherwise the URL you entered will just append on the end of your forum's URL.

Setting #3 allows you to enter which usergroups do not get redirected when your board is set to offline. The default is set to 4 (which is the default administrators usergroup), however you can change this. If you want to allow more than one usergroup, please seperate them with a comma, such as 1,2,3 if you wanted to stop usergroups 1, 2 and 3 from being redirected.