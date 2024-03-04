<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <input type="submit" value="insert_product_branch" name="insert_product_branch">
        <input type="submit" value="insert_type" name="insert_type">
        <input type="submit" value="insert_user" name="insert_user">
        <input type="submit" value="insert_customer" name="insert_customer">
        <input type="submit" value="insert_product" name="insert_product">
        <input type="submit" value="insert_bill" name="insert_bill">
        <input type="submit" value="insert_rate" name="insert_rate">
        <input type="submit" value="insert_bill_detail" name="insert_bill_detail">
        <input type="submit" value="insert_comment" name="insert_comment">
        <input type="submit" value="insert_image_product" name="insert_image_product">
    </form>

    <?php
    if (isset($_POST['insert_type'])) {
        include_once('insert_type.php');
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
    }
    if (isset($_POST['insert_product'])) {
        include_once('insert_product.php');
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
    }

    if (isset($_POST['insert_user'])) {
        include_once('insert_user.php');
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
    }
    if (isset($_POST['insert_bill'])) {
        include_once('insert_bill.php');
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
    }

    if (isset($_POST['insert_rate'])) {
        include_once('insert_rate.php');
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
    }
    if (isset($_POST['insert_bill_detail'])) {
        include_once('insert_bill_detail.php');
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
    }
    if (isset($_POST['insert_comment'])) {
        include_once('insert_comment.php');
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
    }
    if (isset($_POST['insert_product_branch'])) {
        include_once('insert_product_branch.php');
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
    }
    if (isset($_POST['insert_customer'])) {
        include_once('insert_customer.php');
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
    }
    if (isset($_POST['insert_image_product'])) {
        include_once('insert_image_product.php');
        echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
    }
    ?>
</body>

</html>