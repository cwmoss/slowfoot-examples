<layout.default>
	<article>
		<h1 :html="page.Title"></h1>

		<img :if="false" class="xxmaybenot" data-src="page.ImageURL" style="display:none;">

		{{page}}


		<div class="a-content">


			<p><strong :html="page.CreditLine"></strong><br><br>{{page.Date}}</p>

			<div class="material" :html="page.Medium">

			</div>



			<div class="production">
				production_date<br>
				creditline $page['acquiry_date']<br>
				exploitation_rights
			</div>

			<div class="artists">

				<section><a href="ccc" :html="page.Artist"></a></section>

			</div>

			<div class="tags">
				<ul class="tags">

				</ul>

			</div>

		</div>

	</article>
</layout.default>
<?php
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
