
<?php require('layouts/header.php'); ?>

<h2> Index.view.php</h2>
<?php

foreach ($tasks as $key => $value) {
    echo $value->first_name;
}
?>

<?php require('layouts/footer.php'); ?>
