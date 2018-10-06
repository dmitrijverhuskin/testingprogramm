<?php
ini_set("display_errors", 1);
error_reporting(-1);

require_once 'config.php';
require_once 'functions.php';

#=====================TEST LIST==============================

$tests = get_tests();
// print_arr($tests);

if(isset($_GET['test'])) {
    $test_id = (int)$_GET['test'];
    $test_data = get_test_data($test_id);
    print_arr($test_data);
}

#============================================================
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Testing Hebrew</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">

        <?php if ($tests) : ?>
            <h3>TEST OPTIONS</h3>

                <?php foreach ($tests as $test): ?>
                    <p><a href="?test=<?=$test['id']?>"><?=$test['test_name']?></a></p>
                <?php endforeach; ?>

            <br><hr><br>

        <div class="content">
            <h4>SELECTED TEST QUESTIONS:</h4>
        </div <!----end content--->

        <?php else: ?>
            <h3>No tests</h3>
        <?php endif; ?>

    </div><!----wrap--->
</body>
</html>