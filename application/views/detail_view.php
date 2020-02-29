<div class="content-block">
    <?php

    foreach ($data['news'] as $row) {
        echo '<h1>'.$row['title'].'</h1>';
        echo '<p class="content">'.$row['content'].'</p>';
        echo "<h3>Комментарии</h3>";
        echo "<div class='content-block'>";
        foreach ($data['comment'] as $comm){

            echo '<p>'.$comm['comment'].'</p>';

        }
        echo "</div>";

    }
    ?>

</div>
<?php if (!empty($_SESSION)) { ?>
<div class="container-three">

        <div class="content-block">
            <form method="post" class="cool-form">
                <input type="hidden" name='id' value="<?= $_POST['id'] ?>">
                <input type="hidden" name='title' value="<?= $_POST['title'] ?>">
                <input type="hidden" name='content' value="<?= $_POST['content'] ?>">
                <label>Оставить комментарий</label><br>
                <textarea name="commtext" cols="50px" rows="20px" style="resize: none" required></textarea><br><br>
                <input type="submit" name="addComm">
            </form>
        </div>

</div>
<?php } ?>