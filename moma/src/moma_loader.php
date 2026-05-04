<?php
// require_once(__DIR__ . "/../../../slowfoot/vendor/autoload.php");

use slowfoot\configuration;
use slowfoot\loader\csv;

class moma_loader {

    public static array $stats = [];
    public static array $artists = [];

    public function __construct(public string $zipfile = "Artworks.zip", public int $max = 15) {
        $this->unzip();
    }

    public function __invoke(configuration $config) {
        $loader = new csv("src/Artworks.csv");
        $c = 0;
        foreach ($loader($config) as $row) {
            $c++;
            if (($c % 100) != 1) continue;
            // print_r($row);
            $row["_id"] = $row["ConstituentID"];
            yield $row;
        }
    }

    public function unzip() {
        if (file_exists(__DIR__ . "/Artworks.csv")) return;
        $zip = new ZipArchive;
        $file = __DIR__ . '/' . $this->zipfile;
        $ok = $zip->open($file);
        if ($ok === true) {
            $zip->extractTo(__DIR__);
            $zip->close();
            echo 'ok';
        } else {
            echo "failed $file $ok";
        }
    }
}

// new moma_loader();
