<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>COLOR PLAY</title>
</head>
<?php
if(!empty($_GET['color']))
{
    ?>
    <style>
        body{
            Background: <?php echo $_GET['color']?>;
        }
    </style>
    <?php
}
?>
<body>
    <form action="" method="get">
        <label>Select The color Background</label><br>
        <input type="color" name="color"><hr>
        <button>Save</button>
    </form>
</body>
</html>
