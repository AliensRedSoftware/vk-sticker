<?php
$file="./0/1.png";

$im = imagecreatefrompng ($file);
var_dump(imageaffine($im));
