<!DOCTYPE html>
<html>

<head>
    <title>BLACK Board v1</title>
    <link rel="stylesheet" href="<?= getSkinPath("default", null, "relative") ?>/css/normalize.css" />
    <link rel="stylesheet" href="<?= getSkinPath("default", "install", "relative") ?>/style.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>
    <div id="wrap">
        <form method="post" action="<?= getPath("relative") ?>/install<?= $_head["step"] + 1 ?>.php">
            <div id="head">
                <h1>BLACK Board v1 <sub>Derived from ZEROBOARD</sub></h1>
                <h3>Installation</h3>
                <h4><?= $_head["title"] ?></h4>
                <h5 <?= count(explode("\n", $_head["tip"])) == 1 ? "" : " style='line-height:15px;'" ?>><?= implode("<br>", explode("\n", $_head["tip"])) ?></h5>
            </div>
            <div id="body">