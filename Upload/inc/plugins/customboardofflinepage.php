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

// Disallow direct Initialization for extra security.

if(!defined("IN_MYBB"))
{
    die("You Cannot Access This File Directly. Please Make Sure IN_MYBB Is Defined.");
}

// Hooks
$plugins->add_hook("global_start", "customboardofflinepage_globalstart");

// Information
function customboardofflinepage_info()
{
    global $lang;
    $lang->load('customboardofflinepage');
return array(
        "name"  => $lang->name,
        "description"=> $lang->info_desc,
        "website"        => "http://vernier.me",
        "author"        => "Vernier",
        "authorsite"    => "http://vernier.me",
        "version"        => "1.0",
        "guid"             => "372d1502c6acd8686d0c4aab3043b0f0",
        "compatibility" => "16*"
    );
}

// Activate
function customboardofflinepage_activate() 
{
global $db, $lang;
$lang->load('customboardofflinepage');
$customboardofflinepage_group = array(
        'gid'    => 'NULL',
        'name'  => 'customboardofflinepage',
        'title'      => $lang->name,
        'description'    => $lang->settinggroup_desc,
        'disporder'    => "1",
        'isdefault'  => "0",
    );
$db->insert_query('settinggroups', $customboardofflinepage_group);
 $gid = $db->insert_id();

$customboardofflinepage_setting_1 = array(
        'sid'            => 'NULL',
        'name'        => 'customboardofflinepage_enable',
        'title'            => $lang->enable,
        'description'    => $lang->enable_desc,
        'optionscode'    => 'yesno',
        'value'        => '0',
        'disporder'        => 1,
        'gid'            => intval($gid),
    );

$customboardofflinepage_setting_2 = array(
    'sid' => 'Null',
    'name' => 'customboardofflinepage_url',
    'title' => $lang->url,
    'description' => $lang->url_desc,
    'optionscode' => 'text',
    'value' => 'http://yoursite.com',
    'disporder' => 2,
    'gid' => intval($gid),
    );
$customboardofflinepage_setting_3 = array(
    'sid' => 'Null',
    'name' => 'customboardofflinepage_disablefor',
    'title' => $lang->disablefor,
    'description' => $lang->disablefor_desc,
    'optionscode' => 'text',
    'value' => '4',
    'disporder' => 3,
    'gid' => intval($gid),
    );
    $db->insert_query("settings", $customboardofflinepage_setting_1);
    $db->insert_query("settings", $customboardofflinepage_setting_2);
    $db->insert_query("settings", $customboardofflinepage_setting_3);
}

// Deactivate
function customboardofflinepage_deactivate()
  {
  global $db;
 $db->query("DELETE FROM ".TABLE_PREFIX."settings WHERE name IN ('customboardofflinepage_enable')");
    $db->query("DELETE FROM ".TABLE_PREFIX."settinggroups WHERE name='customboardofflinepage'");
rebuild_settings();
 }
 
function customboardofflinepage_globalstart()
{
global $mybb;

if (($mybb->settings['customboardofflinepage_enable'] == 1) && ($mybb->settings['boardclosed'] == 1))
{
    $groupsToTakeActionOn = explode(',', $mybb->settings['customboardofflinepage_disablefor']);

$usersGroups = explode(',', $mybb->user['additionalgroups']);
array_push($usersGroups, $mybb->user['usergroup']);

$canDo = true;

foreach ($usersGroups as $usersGroup)
{
    if (in_array($usersGroup, $groupsToTakeActionOn))
    {
        $canDo = false;
    }
}

if (($canDo) || ($mybb->settings['customboardofflinepage_disablefor'] == ''))
{
  header('Location: '.$mybb->settings['customboardofflinepage_url']);
}
}
else
{
  return false;
}
    }
?>