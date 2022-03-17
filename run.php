#!/usr/bin/env php
<?php

$data = ["life" => '42 with " double quotes'];
$args = escapeshellarg(json_encode($data));
$output = exec("./binary-file {$args}");
$new_data = json_decode($output, true);

assert($data == $new_data, "Failed");

print_r($data);
print_r($new_data);