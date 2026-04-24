<?php
namespace compiled;

use phuety\component;
use phuety\data_container;
use phuety\phuety;
use phuety\tag;
use phuety\asset;
use phuety\phuety_context;

use function phuety\dbg;



/**
 * /Users/rw/dev/slowfoot-examples/take-me-baby/src//layouts/default.phue.php ~ 
 */

class layout_default_component extends component {
    public string $uid = "layout_default---8fcb4f";
    public bool $is_layout = true;
    public string $name = "layout_default";
    public string $tagname = "layout.default";
    public bool $has_template = true;
    public bool $has_code = false;
    public bool $has_style = false;
    public array $assets = array (
);
    public array $custom_tags = array (
);
    public int $total_rootelements = 2;
    public ?array $components = array (
  0 => 'phuety.assets',
);

    public function run_code(data_container $props, array $slots, data_container $helper, phuety_context $phuety, asset $assetholder): ?array{
        // dbg("++ props for component", $this->name, $props);
        return get_defined_vars();
    }

    public function render($__runner, data_container $__d, array $slots=[]):void {
        // ob_start();
        // if($this->is_layout) print '<!DOCTYPE html>';
        $__s = [];
        ?><!DOCTYPE html><html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= tag::h($__d->_get("globals")->config->site_name) ?></title>

    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 2rem;
        }

        a {
            color: plum;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
    <?php $__runner($__runner, "phuety.assets", $__d->_get("phuety")->with($this->tagname, "phuety.assets"), [] + array (
) ); ?>


</head><body>
    <?=$slots["default"]??""?>
    <?php $__runner($__runner, "phuety.assets", $__d->_get("phuety")->with($this->tagname, "phuety.assets"), [] + array (
  'body' => '',
) ); ?>


</body></html><?php // return ob_get_clean();
        // dbg("+++ assetsholder ", $this->is_start, $this->assetholder);
    }

    // public function debug_info(){
    //    return /Users/rw/dev/slowfoot-examples/take-me-baby/src//layouts/default.phue.php ~ ;
    // }
}
