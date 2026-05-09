<page-query paginate="20">
    artist()
    order(DisplayName)
</page-query>

<layout.default>


    <h1>Artists</h1>

    <section>
        <aside :foreach="page as artist">
            <h3><a :href="path(artist)">{{artist.DisplayName}}</a></h3>
            <p>{{artist.BeginDate}}<br>
                <span class="lighter">{{artist.Nationality}}</span>
            </p>
            <!--img class="maybenot" src="work['default_image']" -->
        </aside>


    </section>
</layout.default>
<?php
// $work = $ref($art['works'][0]); 
//paginate("artist");
//$items = $q("SELECT body FROM docs WHERE _type='artist' AND json_extract(body, '$.familyname') like 'F%'");
// artist(tags in ["top"]) order(familyname) limit(20)
#var_dump($page);
// $partial('pagination', ['page' => 'index', 'info' => $collection['info']]) 
