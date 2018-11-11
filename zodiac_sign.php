<center>
<div class="panel panel-primary" style="width: 100%;">
    <div class="panel-heading">
        <h4><center>Zodiac Sign</center></h4>
    </div>
    <div class="panel-body">
        <form name = "zodiac" action="<?php htmlspecialchars("PHP_SELF"); ?>" method = "post">
        <p align="center" style="color: black;">To determine your Chinese Zodiac Sign, please enter your birthyear below:</p>
        <p align="center"><input class="form-control" style="width: 100px;" type="text" name="zodiac" size="4" autocomplete="off" /><p>
        <p align="center"><input class="btn btn-primary" type = "submit" name = "submit" value = "Process Birthyear" /></p>
        </form>

        <?php include('code.php');?>
    </div>
</div>
</center>