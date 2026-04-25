<layout.default>
    <main>
        <div class="index" :foreach="lines as line">
            <a :href="path(line._id)">{{line.text}}</a>
        </div>
    </main>
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
</style>
<?php

$lines = $helper->query('line()');
