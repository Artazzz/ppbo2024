<?php
require_once 'App/Admin/Dosen.php';

use App\Admin\Dosen;

$dian = new Dosen(
    198411132015041001,
    "Dian Prawira",
    62111111,
    "Jln Purnama",
    "0013118405"
);

$dian->mengajar();
