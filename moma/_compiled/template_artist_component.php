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
 * /Users/rw/dev/slowfoot-examples/moma/src//templates/artist.phue.php ~ 18
 */

class template_artist_component extends component {
    public string $uid = "template_artist---350e14";
    public bool $is_layout = false;
    public string $name = "template_artist";
    public string $tagname = "template.artist";
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
layout('default');

//$links = query('*[_id=="$id"]{articles[]->, pix[]->}[0]', ['id' =>$_id]);
// $q = sprintf('work(artist._ref=="%s")', $props->page->_id);
// $works = $helper->query($q);
// $works = $helper->query('work(artist._ref==$id)', ['id' => $props->page->_id]);
//var_dump($works);


$works = array_map(function ($w) use ($helper) {
    return $helper->ref($w);
}, $props->page->works ?? []);

//== LOLQL query "work(artist._ref==\"7470\")" ~ []
//== LOLQL query "work(artist._ref==\"7470\"" ~ []
        return get_defined_vars();
    }

    public function render($__runner, data_container $__d, array $slots=[]):void {
        // ob_start();
        // if($this->is_layout) print '<!DOCTYPE html>';
        $__s = [];
        ?><?php array_unshift($__s, []); ob_start(); ?>
    <article>
        <h1><?= $__d->_get("page")->DisplayName ?></h1>

        <div class="a-content">
            <p>born <?= tag::h($__d->_get("page")->BeginDate) ?> <?php if($__d->_get("page")->EndDate){ ?><span><br>died <?= tag::h($__d->_get("page")->EndDate) ?></span><?php } ?>
            </p>

            <p><?= tag::h($__d->_get("page")->ArtistBio) ?></p>

            <ul>
                <?php if(($_loop_a4696d61915c2715 = $__d->_get("works")) && ((!$_loop_a4696d61915c2715 instanceof \Generator && !$_loop_a4696d61915c2715 instanceof \Iterator) || $_loop_a4696d61915c2715->valid())) { foreach($_loop_a4696d61915c2715 as  $work){$__d->_add_block(["work"=>$work ]); ?><li><?= tag::tag_open_merged_attrs("a", ["href"=> $__d->_call("path")($__d->_get("work"))], array (
) ) ?><?= tag::h($__d->_get("work")->Title) ?></a></li><?php $__d->_remove_block();}}  ?>
            </ul>
        </div>


    </article>
<?php $__runner($__runner, "layout.default", $__d->_get("phuety")->with($this->tagname, "layout.default"), [] + array (
) , ["default" => ob_get_clean()]+array_shift($__s)); ?><?php // return ob_get_clean();
        // dbg("+++ assetsholder ", $this->is_start, $this->assetholder);
    }

    // public function debug_info(){
    //    return /Users/rw/dev/slowfoot-examples/moma/src//templates/artist.phue.php ~ 18;
    // }
}
