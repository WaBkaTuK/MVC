
<div class="content-block">
    <h1>Личный кабинет пользователя <?php $_SESSION['user']['User'] ?></h1>
    <h3>Ваши комментарии:</h3>
    <?php
    foreach ($data as $row)
    {
        echo "<div class='container-two'>";
        echo "<p>Id: ".$row['id']."</p>";
        echo "<p>Комментарий: ".$row['comment']."</p>";
        echo "</div>";

    }

    ?>
</div>
<div class="content-block">
    <form method="post">
        <label>Удалить комментарий по id</label><br>
        <input type="text" name="commId"><br><br>
        <input type="submit" name="delComm">
    </form>
</div>
