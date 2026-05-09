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
 * /Users/rw/dev/slowfoot-examples/moma/src//templates/work.phue.php ~ 43
 */

class template_work_component extends component {
    public string $uid = "template_work---d51093";
    public bool $is_layout = false;
    public string $name = "template_work";
    public string $tagname = "template.work";
    public bool $has_template = true;
    public bool $has_code = true;
    public bool $has_style = false;
    public array $assets = array (
);
    public array $custom_tags = array (
);
    public int $total_rootelements = 1;
    public ?array $components = array (
  0 => 'layout.default',
);

    public function run_code(data_container $props, array $slots, data_container $helper, phuety_context $phuety, asset $assetholder): ?array{
        // dbg("++ props for component", $this->name, $props);
$artists = array_map(function ($it) use ($helper) {
	return $helper->ref($it);
}, $props->page->artist ?? []);

        return get_defined_vars();
    }

    public function render($__runner, data_container $__d, array $slots=[]):void {
        // ob_start();
        // if($this->is_layout) print '<!DOCTYPE html>';
        $__s = [];
        ?><?php array_unshift($__s, []); ob_start(); ?>
	<article>
		<h1><?= $__d->_get("page")->Title ?></h1>

		<?php if(false){ ?><img class="xxmaybenot" data-src="page.ImageURL" style="display:none;"><?php } ?>

		<?= tag::h($__d->_get("page")) ?>


		<div class="a-content">


			<p><strong><?= $__d->_get("page")->CreditLine ?></strong><br><br><?= tag::h($__d->_get("page")->Date) ?></p>

			<div class="material"><?= $__d->_get("page")->Medium ?></div>



			<div class="production">
				production_date<br>
				creditline $page['acquiry_date']<br>
				exploitation_rights
			</div>

			<div class="artists">

				<?php if(($_loop_dc59062ed26f5944 = $__d->_get("artists")) && ((!$_loop_dc59062ed26f5944 instanceof \Generator && !$_loop_dc59062ed26f5944 instanceof \Iterator) || $_loop_dc59062ed26f5944->valid())) { foreach($_loop_dc59062ed26f5944 as  $artist){$__d->_add_block(["artist"=>$artist ]); ?><section><?= tag::tag_open_merged_attrs("a", ["href"=> $__d->_call("path")($__d->_get("artist"))], array (
) ) ?><?= $__d->_get("artist")->DisplayName ?></a></section><?php $__d->_remove_block();}}  ?>

			</div>

			<div class="tags">
				<ul class="tags">

				</ul>

			</div>

		</div>

	</article>
<?php $__runner($__runner, "layout.default", $__d->_get("phuety")->with($this->tagname, "layout.default"), [] + array (
) , ["default" => ob_get_clean()]+array_shift($__s)); ?><?php // return ob_get_clean();
        // dbg("+++ assetsholder ", $this->is_start, $this->assetholder);
    }

    // public function debug_info(){
    //    return /Users/rw/dev/slowfoot-examples/moma/src//templates/work.phue.php ~ 43;
    // }
}
