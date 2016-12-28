#!/usr/bin/env php
<?php
$dockerFile = dirname(__FILE__) . '/source/Dockerfile';
$vDockerContents = file_get_contents($dockerFile);
$vJsonFile = dirname(__FILE__) . '/extend.json';
$aJson = json_decode(file_get_contents($vJsonFile), true);
$vDockerContents = str_replace(
    $aJson['find'],
    $aJson['add_new_line']  . "\n" .  $aJson['find'],
    $vDockerContents);
file_put_contents(dirname(__FILE__) . '/Dockerfile', $vDockerContents);