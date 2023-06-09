

<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>

<?php

$files = scandir("uploads");

for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>
        <!-- Displaying file name !-->
        <?php echo $files[$a]; ?>

        <!-- href should be complete file path !-->
        <!-- download attribute should be the name after it downloads !-->
        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>
        <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
            Delete
        </a>
    </p>
    <?php
}