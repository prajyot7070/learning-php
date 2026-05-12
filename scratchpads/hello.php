<?php
$start_mem = memory_get_usage();
$name = 'Prajyot';
$age = 22;
$obj = [];

function objectFactory (int $num): object {
  return (object) [ $num => (string) $num]; //output : [1 : '1']
}
function display(array|object $obj): string {
  $output = "";
  foreach ($obj as $_ => $value) {
    if (is_iterable($value) || is_object($value)) {
      foreach ($value as $k => $v) {
        $output .= $k . " - '" . $v . "'".PHP_EOL;
      }
    }
  }
  return $output;
}

function add() : object {
  return (int) '12';
}

for ($i=0; $i < 10; $i++) { 
  $obj[] = objectFactory($i);
}
$end_mem = memory_get_usage();

echo "Memory used :- " . ($end_mem - $start_mem)/1024 . " kb";
$output = display($obj);
echo $output;
