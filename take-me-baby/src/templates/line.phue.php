<layout.default>
    <main class="line">
        <flacker-word>
            {{page.text}}
        </flacker-word>
        <aside>{{page.nr}}</aside>
    </main>

</layout.default>
<script type="module">
    export default class FlackerWord extends HTMLElement {
        connectedCallback() {
            let text = this.textContent;
            let words = text.trim().split(" ")
            this.innerHTML = ""
            words.forEach(w => this.insertAdjacentHTML("beforeend", `<span>${w}</span> `));
            let els = Array.from(this.querySelectorAll("span"));
            console.log("spans", els);
            let rand = () => {
                const minCeiled = 0;
                const maxFloored = Math.floor(els.length - 1);
                return Math.floor(Math.random() * (maxFloored - minCeiled + 1) + minCeiled);
            };
            setInterval(() => {
                els.forEach((el) => el.classList.remove("f"))
                let r = rand()
                els[r].classList.add("f");
            }, 100);
        }
    }
    customElements.define("flacker-word", FlackerWord);
</script>
<style global>
    main.line {
        font-size: 12rem;
        font-weight: bold;
        line-height: 0.7;
    }

    aside {
        font-size: 2rem;
        font-weight: bold;
        color: coral;
    }

    flacker-word .f {
        color: #666;
    }
</style>