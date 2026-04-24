<?php

use slowfoot\configuration;

$lyrics = <<<EOL
Take me baby
Take me now
Take me baby
Take me to the edge of explosion
Love me baby
Love me now
Love me baby
Love me on our way to a dark star
Take me baby
Take me baby
Love me baby
Love me baby
Take me baby
Take me now
Take me baby
Take me to the edge of explosion

I′m about to
I'm about to
I′m about to
I'm about to
Come to me baby come to me
Come to me baby
Come into the arms of your loved one

Take me baby
Take me now
Take me baby
Take me to the edge of explosion

Love me baby
Love me now
Love me baby
Love me on our way to a dark star
EOL;

return new configuration(
    site_name: 'take me baby',
    site_description: "the famous lyrics by Jimi Tenor",

    sources: [
        'line' => function () use ($lyrics) {
            $c = 1;
            foreach (explode("\n", $lyrics) as $line) {
                $line = trim($line);
                if (!$line) continue;
                yield [
                    "_id" => "tmb-{$c}",
                    "nr" => $c,
                    "text" => $line
                ];
                $c++;
            }
        }
    ],
    templates: [
        'line' => '/:nr/:text',
    ]
);
