<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{globals.config.site_name}}</title>
    <link rel="stylesheet" href="@assets/test.css">
    <style>
        :root {
            --c1: #59009F;
            --c2: #0069C9;
            --c3: #01D93F;
            --c4: #F0EC00;
            --c5: #FF8B00;
            --c6: #DB2B28;
        }

        html {
            height: 100vh;
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 2rem;
            margin: 0;
            min-height: 100vh;
            display: grid;
            grid-template-rows: 1fr auto;
        }

        a {
            color: plum;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
            text-decoration-thickness: 0.3rem;
        }

        main {
            padding: 1rem;
        }

        footer {
            font-size: 1rem;
            padding: 1rem;
        }
    </style>
    <phuety.assets></phuety.assets>
</head>

<body>
    <slot.></slot.>
    <footer>demo source: <a href="https://github.com/cwmoss/slowfoot-examples/tree/main/take-me-baby">https://github.com/cwmoss/slowfoot-examples/tree/main/take-me-baby</a></footer>
    <phuety.assets body></phuety.assets>
</body>

</html>