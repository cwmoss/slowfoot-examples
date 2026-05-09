<?php

use slowfoot\configuration;
use slowfoot\loader\csv;

class moma_loader {

    public static array $stats = [];
    public static array $artists = [];

    public function __construct(
        public int $max = 15,
        public string $artists_zip = "Artists.zip",
        public string $artworks_zip = "Artworks.zip"
    ) {
        $this->unzip($artists_zip, "Artists.csv");
        $this->unzip($artworks_zip, "Artworks.csv");
    }

    /*
    Title,Artist,ConstituentID,ArtistBio,Nationality,BeginDate,EndDate,Gender,Date,
    Medium,Dimensions,CreditLine,AccessionNumber,Classification,Department,DateAcquired,
    Cataloged,ObjectID,URL,ImageURL,OnView,Circumference (cm),Depth (cm),Diameter (cm),
    Height (cm),Length (cm),Weight (kg),Width (cm),Seat Height (cm),Duration (sec.)

*/
    public function __invoke(configuration $config) {
        $artists_loader = new csv("src/Artists.csv");
        foreach ($artists_loader($config) as $row) {
            $aid = $row["ConstituentID"];
            if (!isset(self::$artists[$aid]) && !$this->allow_import($row)) continue;
            if (!isset(self::$artists[$aid])) {
                $row["_type"] = "artist";
                $row["_id"] = $aid;
                $row["works"] = [];
                self::$artists[$aid] = $row;
            }
        }

        $loader = new csv("src/Artworks.csv");

        foreach ($loader($config) as $row) {
            $artists = array_map(fn($it) => trim($it), explode(",", $row["ConstituentID"]));
            if (!isset(self::$artists[$artists[0]])) continue;
            $row["_id"] = $row["ObjectID"];
            $row["_type"] = "work";
            $row["artist"] = array_map(fn($it) => ["_ref" => $it], $artists);
            yield $row;
            foreach ($artists as $aid) {
                if (isset(self::$artists[$aid])) {
                    self::$artists[$aid]["works"][] = $row["ObjectID"];
                }
            }
        }

        foreach (self::$artists as $row) {
            yield $row;
        }
    }

    private function allow_import(array $row): bool {
        if (!$this->max) return true;
        $name = $row["DisplayName"];
        $char = mb_substr($name, 0, 1);
        $char = mb_strtolower($char);
        if (!isset(self::$stats[$char])) self::$stats[$char] = 0;
        if (self::$stats[$char] > $this->max) return false;
        self::$stats[$char]++;
        return true;
    }

    private function unzip(string $zipf, string $outf) {
        if (file_exists(__DIR__ . "/" . $outf)) return;
        $zip = new ZipArchive;
        $file = __DIR__ . '/' . $zipf;
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
