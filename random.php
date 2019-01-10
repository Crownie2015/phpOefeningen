<?php

session_start();



$getal = $_SESSION["getal"] = rand(1, 100);

print $getal;