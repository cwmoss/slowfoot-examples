<?php

use slowfoot\configuration;
use slowfoot\hook;
use slowfoot\hooks;

use SVG\SVG;
use SVG\Nodes\Shapes\SVGRect;

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

hook::add(hooks::project_loaded, fn($project) => write_favicon($project->src . "/assets"));

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

function write_favicon(string $directory, string $color = '#09ff00') {
    $image = new SVG(128, 128);
    $doc = $image->getDocument();
    $square = new SVGRect(0, 0, 128, 128);
    $square->setStyle('fill', $color);
    $doc->addChild($square);
    file_put_contents($directory . "/favicon.svg", $image->toXMLString(false));
}
