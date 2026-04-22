<div :foreach="lines as line">
    <a :href="path(line._id)">{{line.text}}</a>
</div>
<?php

$lines = $helper->query('line()');
