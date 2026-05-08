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
/*
  "measurement_height":80.5,"inventorynr_sorted":"P 00001\/000","creditline":"erworben\/acquired in","title_en":"Construction Design for an Airport",

       "in_exhibition":"yes","exploitation_rights":"Bildrecht, Wien","material_de":"Bronze, Glas","measurement_depth":85,
       "originaltitle":"Konstruktion f\u00fcr einen Flughafen","default_image":"https:\/\/www.mumok.at\/imageobject.php?objid=1","inventorynr":"P 1\/0","measurement_unit":"cm"}
*/

//$links = query('*[_id=="$id"]{articles[]->, pix[]->}[0]', ['id' =>$_id]);

/*
Title,Artist,ConstituentID,ArtistBio,Nationality,BeginDate,EndDate,Gender,Date,Medium,Dimensions,CreditLine,AccessionNumber,Classification,Department,DateAcquired,Cataloged,ObjectID,URL,ImageURL,OnView,Circumference (cm),Depth (cm),Diameter (cm),Height (cm),Length (cm),Weight (kg),Width (cm),Seat Height (cm),Duration (sec.)

*/
$links = [];
$thetitle = $props->page->Title;
// $page['originaltitle'] ?? $page['title_de'] ?? $page['title_en'] ?? 'k.a.';
// <img :src="page.ImageURL">
/*
{"_id":"w-104728","_type":"work","title_de":null,"acquiry_date":"1961","material_en":"Watercolor on paper","artists":[{"_ref":"a-102182"}],
"description_de":null,"production_date":"1919","measurement_width":20,"@id":"http:\/\/www.mumok.at\/node\/104728",
"tags":"Klassische Moderne, Abstraktion, Grafik, Dada, Konstruktion, Konstruktivismus, Deutschland, Dadaismus, \u00d6sterreich",
"measurement_height":31.4,"inventorynr_sorted":"G 00002\/000","creditline":"Schenkung des K\u00fcnstlers\/donation of the artist",
"title_en":"Abstract Pictorial Idea","description_en":null,"in_exhibition":"yes",
"exploitation_rights":"Bildrecht, Wien","material_de":"Aquarell auf Papier","measurement_depth":null,
"originaltitle":"Abstrakte Bildidee","default_image":"https:\/\/www.mumok.at\/imageobject.php?objid=21",
"inventorynr":"G 2\/0","measurement_unit":"cm"}

*/

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

				<section><a href="ccc"><?= $__d->_get("page")->Artist ?></a></section>

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
