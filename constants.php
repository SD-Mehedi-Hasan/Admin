<?php

$data_file = file_get_contents('../admin/app-data.json');
$dd = json_decode($data_file);


$onesignalrestkey = "NWNhZWQ0M2EtMmJjNy00ZjE4LWJmNDAtODdhYzY4NzIzMGNh";

$onesignalappid = "ddb79f8b-b362-43ea-8e4a-ba7ba11fc266";

$defaultpass = "admin";
$masterkey = "Tahmid";

define( '_COLOR_PRIMARY_', $dd->primary_color );
define( '_COLOR_GRADIENT_END_', $dd->gradient_color_end);