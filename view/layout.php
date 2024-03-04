<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="<?= $CONTENT_URL ?>/image/different/sitelogo.png" />
    <script src="https://kit.fontawesome.com/d2ad07b7f4.js" crossorigin="anonymous"></script>
    <script src="<?= $CONTENT_URL ?>/js/bootstrap.min.js"></script>
    <script src="<?= $CONTENT_URL ?>/js/plusMinusQuantity.js"></script>
    <title>CENTRAL CAR</title>
</head>
<style>
    body {
        margin: 0;
        box-sizing: border-box;
    }
     ::-webkit-scrollbar {
        width: 8px;
    }
</style>

<body>
    <?php require 'layout/header.php'; ?>
    <section>
        <?php require $VIEW_NAME ?>
    </section>
    <?php require 'layout/footer.php'; ?>
</body>

</html>