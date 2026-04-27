<?php
// this script builds the github demo page

// all pages live in this subdir
$prefix = "/slowfoot-examples";

// at first, we build the index page 
// from the README.md file, without config
$cmd = sprintf("%s vendor/bin/slowfoot build -f -p=%s", PHP_BINARY, $prefix);
print "$cmd\n";
shell_exec($cmd);

// now we build all projects from the subdirectories
$demos = ["take-me-baby"];
foreach ($demos as $demo) {
    $pfx = $prefix . "/$demo";
    $cmd = sprintf("%s vendor/bin/slowfoot build -f -d=%s -p=%s", PHP_BINARY, $demo, $pfx);
    print "$cmd\n";
    shell_exec($cmd);

    // after build, we move the output to /dist
    shell_exec("mv $demo/dist dist/$demo");
}
