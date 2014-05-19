<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

// register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{

}


$_SESSION["lang"] = $lang;

$folder = "locale";
$domain = "messages";
$encoding = "UTF-8";
$locale = $lang.".".$encoding;

setlocale(LC_MESSAGES, $locale);
bindtextdomain($domain, $folder);
textdomain($domain);
bind_textdomain_codeset($domain, $encoding);
?>
