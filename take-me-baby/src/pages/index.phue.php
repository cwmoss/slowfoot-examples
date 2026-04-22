<layout.default>
    <div class="index" :foreach="lines as line">
        <a :href="path(line._id)">{{line.text}}</a>
    </div>

</layout.default>
<style global>
    div:nth-child(9n+4) a {
        color: #555;
    }

    div:nth-child(9n+6) a {
        color: black;
    }

    div:nth-child(9n+2) a {
        color: coral;
    }

    div:nth-child(9n) a {
        color: yellowgreen;
    }

    div.index:hover {
        text-decoration: underline;
    }
</style>
<?php

$lines = $helper->query('line()');
