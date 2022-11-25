<?php
require_once '../bootstrap.php';
$pageName = 'Alerts';
ob_start();
?>

<div class="card">
    <div class="card-body">
        <div class="alert alert-red">
            A simple red alert
        </div>

        <div class="alert alert-green mt-4">
            A simple green alert
        </div>
    </div>
</div>

<?php
$page = ob_get_contents();
ob_clean();
include ROOTDIR . '/index.php';
?>