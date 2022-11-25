<?php
require_once '../bootstrap.php';
$pageName = 'Buttons';
ob_start();
?>

<div class="card">
    <div class="card-body">
        <button>Button</button>
        <button disabled>Button</button>
    </div>
    <hr>
    <div class="card-body">
        <button class="btn">Button</button>
        <button class="btn btn-blue">Button blue</button>
        <button class="btn btn-green">Button green</button>
        <button class="btn btn-red">Button red</button>
        <button class="btn btn-orange">Button orange</button>
        <button class="btn btn-grey">Button grey</button>
    </div>
    <div class="card-body">
        <button class="btn" disabled>Button</button>
        <button class="btn btn-blue" disabled>Button blue</button>
        <button class="btn btn-green" disabled>Button green</button>
        <button class="btn btn-red" disabled>Button red</button>
        <button class="btn btn-orange" disabled>Button orange</button>
        <button class="btn btn-grey" disabled>Button grey</button>
    </div>
    <hr>
    <div class="card-body">
        <input type="button" value="Input button" class="btn">
        <input type="button" value="Input button blue" class="btn btn-blue">
        <input type="button" value="Input button green" class="btn btn-green">
        <input type="button" value="Input button red" class="btn btn-red">
        <input type="button" value="Input button orange" class="btn btn-orange">
        <input type="button" value="Input button grey" class="btn btn-grey">
    </div>

    <div class="card-body">
        <input type="button" value="Input button" class="btn" disabled>
        <input type="button" value="Input button blue" class="btn btn-blue" disabled>
        <input type="button" value="Input button green" class="btn btn-green" disabled>
        <input type="button" value="Input button red" class="btn btn-red" disabled>
        <input type="button" value="Input button orange" class="btn btn-orange" disabled>
        <input type="button" value="Input button grey" class="btn btn-grey" disabled>
    </div>
</div>


<?php
$page = ob_get_contents();
ob_clean();
include ROOTDIR . '/index.php';
?>