<!DOCTYPE html>
<html lang="ja">
<head>
    <?= $this->Html->charset() ?>
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('style.css') ?>
</head>
<body>
    <section class="container">
        <?= $this->fetch('content') ?>
    </section>
</body>
</html>
