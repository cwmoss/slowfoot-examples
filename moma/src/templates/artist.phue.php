<layout.default>
    <article>
        <h1 :html="page.DisplayName"></h1>

        <div class="a-content">
            <p>born {{page.BeginDate}} <span :if="page.EndDate"><br>died {{page.EndDate}}</span>
            </p>

            <p>{{page.ArtistBio}}</p>

            <ul>
                <li :foreach="works as work"><a :href="path(work)">{{work.Title}}</a></li>
            </ul>
        </div>


    </article>
</layout.default>
<?php
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