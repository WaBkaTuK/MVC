<div class="content-block">
    <h1>Новости</h1>
    <table>
        <tr><th>Id</th><th>Тема</th><th>Контент</th></tr>
        <?php
        foreach ($data as $row){
            echo "<tr><th>".$row['Id']."</th><th>".$row['Title']."</th><th>".$row['Content']."</th></tr>";
        }

        ?>
    </table>
</div>
<div class="container-three">
    <form method="post" class="cool-form">
        <label>Id</label><br>
        <input name="Id"><br><br>
        <label>Тема</label><br>
        <input name="title"><br><br>
        <label>Контент</label><br>
        <input name="content"><br><br>
        <input type="submit" name="upd">
    </form>
    <form method="post" class="cool-form">
        <label>Тема</label><br>
        <input name="title2" required><br><br>
        <label>Контент</label><br>
        <input name="content2" required><br><br>
        <input type="submit" name="add">
    </form>
    <form method="post" class="cool-form">
        <label>Id</label><br>
        <input name="Id" required><br><br>
        <input type="submit" name="del">
    </form>

</div>
