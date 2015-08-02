<?php
// this view forwards to the theme specific email template for resetting passwords
$config = new App\Http\Controllers\ConfigController;
$theme = $config->getTheme();
?>

@extends('theme/'.$theme.'/emails/passwordReset')