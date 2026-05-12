<?php
require_once '02_namespace.php';
require_once '02_namespaces-2.php';

use App\Core\Validator as ValidatorCore;

$result1 = \App\Advanced\Validator::check();
// instead of typing the whiole thing we can put the use keyword at top
$result2 = ValidatorCore::check();

echo "Validator 1: " . $result1 . "\n";
echo "Validator 2: " . $result2 . "\n";