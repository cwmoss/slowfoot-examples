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
 * /Users/rw/dev/slowfoot-examples/take-me-baby/src//pages/index.phue.php ~ 32
 */

class page_index_component extends component {
    public string $uid = "page_index---9aed75";
    public bool $is_layout = false;
    public string $name = "page_index";
    public string $tagname = "page.index";
    public bool $has_template = true;
    public bool $has_code = true;
    public bool $has_style = false;
    public array $assets = array (
  0 => 
  array (
    0 => 'style',
    1 => 'head',
    2 => 
    array (
    ),
    3 => '<style>
    div:nth-child(6n+1) a {
        color: var(--c1);
    }

    div:nth-child(6n+2) a {
        color: var(--c2);
    }

    div:nth-child(6n+3) a {
        color: var(--c3);
    }

    div:nth-child(6n+4) a {
        color: var(--c4);
    }

    div:nth-child(6n+5) a {
        color: var(--c5);
    }

    div:nth-child(6n+6) a {
        color: var(--c6);
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

$lines = $helper->query('line()order(nr)');

        return get_defined_vars();
    }

    public function render($__runner, data_container $__d, array $slots=[]):void {
        // ob_start();
        // if($this->is_layout) print '<!DOCTYPE html>';
        $__s = [];
        ?><?php array_unshift($__s, []); ob_start(); ?>
    <main>
        <?php if(($_loop_c97211f8b7e8b3d5 = $__d->_get("lines")) && ((!$_loop_c97211f8b7e8b3d5 instanceof \Generator && !$_loop_c97211f8b7e8b3d5 instanceof \Iterator) || $_loop_c97211f8b7e8b3d5->valid())) { foreach($_loop_c97211f8b7e8b3d5 as  $line){$__d->_add_block(["line"=>$line ]); ?><div class="index">
            <?= tag::tag_open_merged_attrs("a", ["href"=> $__d->_call("path")($__d->_get("line")->_id)], array (
) ) ?><?= tag::h($__d->_get("line")->text) ?></a>
        </div><?php $__d->_remove_block();}}  ?>
    </main>
<?php $__runner($__runner, "layout.default", $__d->_get("phuety")->with($this->tagname, "layout.default"), [] + array (
) , ["default" => ob_get_clean()]+array_shift($__s)); ?>
<?php // return ob_get_clean();
        // dbg("+++ assetsholder ", $this->is_start, $this->assetholder);
    }

    // public function debug_info(){
    //    return /Users/rw/dev/slowfoot-examples/take-me-baby/src//pages/index.phue.php ~ 32;
    // }
}
