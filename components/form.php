<?php
require_once '../bootstrap.php';
$pageName = 'Form';
ob_start();
?>

<div class="card">
    <div class="card-header">
        Form inputs
    </div>
    <div class="card-body">

        <label for="text">
            Label input text
        </label>
        <input type="text" name="text" id="text" class="form-control" placeholder="Input text">

        <label for="email">
            Label input email
        </label>
        <input type="email" name="email" id="email" class="form-control" placeholder="Input email">

        <label for="number">
            Label input number
        </label>
        <input type="number" name="number" id="number" class="form-control" placeholder="Input number">

        <label for="password">
            Label input password
        </label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Input password">

        <label for="search">
            Label input search
        </label>
        <input type="search" name="search" id="search" class="form-control" placeholder="Input search">

        <label for="tel">
            Label input tel
        </label>
        <input type="tel" name="tel" id="tel" class="form-control" placeholder="Input tel">

        <label for="file">
            Label input file
        </label>
        <input type="file" name="file" id="file" class="form-control" placeholder="Input file">

        <label for="select">
            Label select
        </label>
        <select name="select" id="select" class="form-control">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>

        <label for="textarea">
            Label file
        </label>
        <textarea name="textarea" id="textarea" cols="30" rows="10" class="form-control" placeholder="Input textarea">

        </textarea>

    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        Checks & radios
    </div>
    <div class="card-body">
        <input type="checkbox" name="checkbox" id="checkbox" class="form-check">
        <label for="checkbox">
            Label checkbox
        </label>
        <input type="checkbox" name="checkbox2" id="checkbox2" class="form-check">
        <label for="checkbox2">
            Label checkbox2
        </label>
    </div>
</div>
<?php
$page = ob_get_contents();
ob_clean();
include ROOTDIR . '/index.php';
?>