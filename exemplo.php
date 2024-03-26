<?php

require_once "vendor/autoload.php";

use \Daniel\Addressreturnbycep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode('08675000');

print_r($resultado);