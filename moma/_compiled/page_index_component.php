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
 * /Users/rw/dev/slowfoot-examples/moma/src//pages/index.phue.php ~ 22
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
);
    public array $custom_tags = array (
  'page-query' => 
  array (
    'name' => 'page-query',
    'attrs' => 
    array (
      'paginate' => '20',
    ),
    'content' => '
    artist()
    order(DisplayName)
',
  ),
);
    public int $total_rootelements = 1;
    public ?array $components = array (
  0 => 'layout.default',
);

    public function run_code(data_container $props, array $slots, data_container $helper, phuety_context $phuety, asset $assetholder): ?array{
        // dbg("++ props for component", $this->name, $props);
// $work = $ref($art['works'][0]); 
//paginate("artist");
//$items = $q("SELECT body FROM docs WHERE _type='artist' AND json_extract(body, '$.familyname') like 'F%'");
// artist(tags in ["top"]) order(familyname) limit(20)
#var_dump($page);
// $partial('pagination', ['page' => 'index', 'info' => $collection['info']]) 

        return get_defined_vars();
    }

    public function render($__runner, data_container $__d, array $slots=[]):void {
        // ob_start();
        // if($this->is_layout) print '<!DOCTYPE html>';
        $__s = [];
        ?>

<?php array_unshift($__s, []); ob_start(); ?>


    <h1>Artists</h1>

    <section>
        <?php if(($_loop_f20db1776345c402 = $__d->_get("page")) && ((!$_loop_f20db1776345c402 instanceof \Generator && !$_loop_f20db1776345c402 instanceof \Iterator) || $_loop_f20db1776345c402->valid())) { foreach($_loop_f20db1776345c402 as  $artist){$__d->_add_block(["artist"=>$artist ]); ?><aside>
            <h3><?= tag::tag_open_merged_attrs("a", ["href"=> $__d->_call("path")($__d->_get("artist"))], array (
) ) ?><?= tag::h($__d->_get("artist")->DisplayName) ?></a></h3>
            <p><?= tag::h($__d->_get("artist")->BeginDate) ?><br>
                <span class="lighter"><?= tag::h($__d->_get("artist")->Nationality) ?></span>
            </p>
            <!--img class="maybenot" src="work['default_image']" -->
        </aside><?php $__d->_remove_block();}}  ?>


    </section>
<?php $__runner($__runner, "layout.default", $__d->_get("phuety")->with($this->tagname, "layout.default"), [] + array (
) , ["default" => ob_get_clean()]+array_shift($__s)); ?><?php // return ob_get_clean();
        // dbg("+++ assetsholder ", $this->is_start, $this->assetholder);
    }

    // public function debug_info(){
    //    return /Users/rw/dev/slowfoot-examples/moma/src//pages/index.phue.php ~ 22;
    // }
}
