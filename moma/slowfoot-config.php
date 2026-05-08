<?php
require_once(__DIR__ . "/src/moma_loader.php");

use slowfoot\configuration;
use slowfoot\hook;
use slowfoot\hooks;

// hook::add(hooks::project_loaded, fn($project) => write_favicon($project->src . "/assets"));

return new configuration(
    site_name: 'the moma collection',
    site_description: "beautiful art",

    sources: [
        'csvdata' => new moma_loader()
    ],
    templates: [
        'work' => '/works/:_id',
    ]
);
