<layout.default>
    <main>
        <div class="index" :foreach="lines as line">
            <a :href="path(line._id)">{{line.text}}</a>
        </div>
    </main>
</layout.default>
<style global>
    div:nth-child(6n+1) a {
        color: var(--c1);
    }

    div:nth-child(6n+2) a {
        color: var(--c2);
    }

    div:nth-child(6n+3) a {
        color: var(--c3);
    }

    div:nth-child(6n+4) a {
        color: var(--c4);
    }

    div:nth-child(6n+5) a {
        color: var(--c5);
    }

    div:nth-child(6n+6) a {
        color: var(--c6);
    }
</style>
<?php

$lines = $helper->query('line()order(nr)');
