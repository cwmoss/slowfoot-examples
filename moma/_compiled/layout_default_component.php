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
 * /Users/rw/dev/slowfoot-examples/moma/src//layouts/default.phue.php ~ 45
 */

class layout_default_component extends component {
    public string $uid = "layout_default---8fcb4f";
    public bool $is_layout = true;
    public string $name = "layout_default";
    public string $tagname = "layout.default";
    public bool $has_template = true;
    public bool $has_code = true;
    public bool $has_style = false;
    public array $assets = array (
);
    public array $custom_tags = array (
);
    public int $total_rootelements = 2;
    public ?array $components = NULL;

    public function run_code(data_container $props, array $slots, data_container $helper, phuety_context $phuety, asset $assetholder): ?array{
        // dbg("++ props for component", $this->name, $props);
// $settings = $helper->get('site_settings');
// $title = $settings->title;
// $nav = $ref($settings['nav_main']);
// $nav = ['items' => []];

        return get_defined_vars();
    }

    public function render($__runner, data_container $__d, array $slots=[]):void {
        // ob_start();
        // if($this->is_layout) print '<!DOCTYPE html>';
        $__s = [];
        ?><!DOCTYPE html><html><head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <?= tag::tag_open_merged_attrs("link", ["href"=> $__d->_call("__path_alias")("assets", "favicon.ico")], array (
  'rel' => 'SHORTCUT ICON',
) ) ?>
    <?= tag::tag_open_merged_attrs("link", ["href"=> $__d->_call("__path_alias")("assets", "css/app.css")], array (
  'rel' => 'stylesheet',
  'type' => 'text/css',
) ) ?>
    <?= tag::tag_open_merged_attrs("script", ["src"=> $__d->_call("__path_alias")("assets", "js/jquery-3.6.0.min.js")], array (
) ) ?></script>
    <?= tag::tag_open_merged_attrs("script", ["src"=> $__d->_call("__path_alias")("assets", "js/app.js")], array (
) ) ?></script>
    <title>MoMA Demo</title>



</head><body data-barba="wrapper">
    <header>
        <nav>
            <span>MoMA</span>
            <ul>
                <li><?= tag::tag_open_merged_attrs("a", ["href"=> $__d->_call("path_page")("/")], array (
) ) ?>Artists</a></li>
            </ul>
        </nav>
    </header>

    <main data-barba="container" data-barba-namespace="home">

        <?=$slots["default"]??""?>

    </main>

    <footer>
        <div class="content">
            © 2026
            <br><br><br>
            demo source: <a href="https://github.com/cwmoss/slowfoot-examples/tree/main/moma">https://github.com/cwmoss/slowfoot-examples/tree/main/moma</a>
            <br>
            this demo is based on the moma dataset of artworks:
            <a href="https://github.com/museumofmodernart/collection">https://github.com/museumofmodernart/collection</a>
            <br>digital object identifier: <a href="http://dx.doi.org/10.5281/zenodo.20035159">DOI</a>
        </div>
    </footer>



</body></html><?php // return ob_get_clean();
        // dbg("+++ assetsholder ", $this->is_start, $this->assetholder);
    }

    // public function debug_info(){
    //    return /Users/rw/dev/slowfoot-examples/moma/src//layouts/default.phue.php ~ 45;
    // }
}
