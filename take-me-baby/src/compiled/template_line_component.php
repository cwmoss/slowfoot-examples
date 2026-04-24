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
 * /Users/rw/dev/slowfoot-examples/take-me-baby/src/templates/line.phue.php ~ 
 */

class template_line_component extends component {
    public string $uid = "template_line---37386e";
    public bool $is_layout = false;
    public string $name = "template_line";
    public string $tagname = "template.line";
    public bool $has_template = true;
    public bool $has_code = false;
    public bool $has_style = false;
    public array $assets = array (
  0 => 
  array (
    0 => 'script',
    1 => 'body',
    2 => 
    array (
      'type' => 'module',
      'src' => '/assets/build/template_line---37386e-0.js',
    ),
    3 => '<script type="module" src="/assets/build/template_line---37386e-0.js"></script>',
  ),
  1 => 
  array (
    0 => 'style',
    1 => 'head',
    2 => 
    array (
    ),
    3 => '<style>
    main.line {
        font-size: 12rem;
        font-weight: bold;
        line-height: 0.7;
    }

    aside {
        font-size: 2rem;
        font-weight: bold;
        color: coral;
    }

    flacker-word .f {
        color: #666;
    }
</style>',
  ),
);
    public array $custom_tags = array (
);
    public int $total_rootelements = 1;
    public ?array $components = array (
  0 => 'layout.default',
);

    public function run_code(data_container $props, array $slots, data_container $helper, phuety_context $phuety, asset $assetholder): ?array{
        // dbg("++ props for component", $this->name, $props);
        return get_defined_vars();
    }

    public function render($__runner, data_container $__d, array $slots=[]):void {
        // ob_start();
        // if($this->is_layout) print '<!DOCTYPE html>';
        $__s = [];
        ?><?php array_unshift($__s, []); ob_start(); ?>
    <main class="line">
        <flacker-word>
            <?= tag::h($__d->_get("page")->text) ?>
        </flacker-word>
    </main>
    <aside><?= tag::h($__d->_get("page")->nr) ?></aside>
<?php $__runner($__runner, "layout.default", $__d->_get("phuety")->with($this->tagname, "layout.default"), [] + array (
) , ["default" => ob_get_clean()]+array_shift($__s)); ?>

<?php // return ob_get_clean();
        // dbg("+++ assetsholder ", $this->is_start, $this->assetholder);
    }

    // public function debug_info(){
    //    return /Users/rw/dev/slowfoot-examples/take-me-baby/src/templates/line.phue.php ~ ;
    // }
}
