<?php
use LZCompressor\LZString as LZString;
require_once __DIR__ . '/vendor/autoload.php';
file_put_contents('out.json',LZString::decompressFromBase64(file_get_contents('EN.cte')));