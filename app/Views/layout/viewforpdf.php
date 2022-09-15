<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/stylepdf.css">
    <style>
        table,
        th,
        td {
            border: 1px solid #333;
            font-size: 15px;
        }

        table {
            border-collapse: collapse;
        }

        td {
            border-left: 0px;
        }

        @page {
            margin: 0 auto;
            margin-left: 0.98in;
            margin-right: 0.7in;
            margin-top: 1.44in;
            margin-bottom: 0.56in;

        }

        p {
            text-align: justify;
        }
    </style>
    <title><?= $title; ?></title>
</head>

<body>

    <div class="content">
        <?= $this->renderSection('content'); ?>
    </div>

</body>

</html>