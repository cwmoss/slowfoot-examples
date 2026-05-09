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

				<section :foreach="artists as artist"><a :href="path(artist)" :html="artist.DisplayName"></a></section>

			</div>

			<div class="tags">
				<ul class="tags">

				</ul>

			</div>

		</div>

	</article>
</layout.default>
<?php
$artists = array_map(function ($it) use ($helper) {
	return $helper->ref($it);
}, $props->page->artist ?? []);
