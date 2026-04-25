<?php

// print_r(PHP_BINARY);
// print_r($argv);
$prefix = "/slowfoot-examples";

$command = "%s vendor/bin/slowfoot build -f -p=%s";

$cmd = sprintf($command, PHP_BINARY, $prefix);
print "$cmd\n";
shell_exec($cmd);

$demos = ["take-me-baby"];
foreach ($demos as $demo) {
    $pfx = $prefix . "/$demo";
    $cmd = sprintf("%s vendor/bin/slowfoot build -f -d=%s -p=%s", PHP_BINARY, $demo, $pfx);
    print "$cmd\n";
    shell_exec($cmd);
    shell_exec("mv $demo/dist dist/$demo");
}
