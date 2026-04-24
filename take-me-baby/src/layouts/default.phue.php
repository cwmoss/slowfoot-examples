<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{globals.config.site_name}}</title>

    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 2rem;
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
    </style>
    <phuety.assets></phuety.assets>
</head>

<body>
    <slot.></slot.>
    <phuety.assets body></phuety.assets>
</body>

</html>