<!doctype html>
<html>

<head>
    <title>Site Maintenance</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noindex" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
            padding: 20px;
            font: 20px Helvetica, sans-serif;
            color: #333;
        }

        @media (min-width: 768px) {
            body {
                padding-top: 100px;
            }
        }

        h1 {
            font-size: 50px;
        }

        article {
            display: block;
            text-align: left;
            max-width: 650px;
            margin: 0 auto;
        }

        a {
            color: #dc8100;
            text-decoration: none;
        }

        a:hover {
            color: #333;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <article>
        <h1>This Page is Under Maintenance!</h1>
        <div>
            <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:#">contact us</a>, otherwise we&rsquo;ll be back online shortly!</p>
            <p>&mdash; <a href="<?php echo base_url('/pages/dashboard'); ?>">back to dashboard</a></p>
        </div>
    </article>
</body>

</html>