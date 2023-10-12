<?php

$disk_database = json_decode(file_get_contents('disks.json'), true);


header('Content-Type: application/json');

//è essenziale mettere echo
echo json_encode($disk_database);