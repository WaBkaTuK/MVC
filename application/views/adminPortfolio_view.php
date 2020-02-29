<div class="content-block">
    <h1>Портфолио</h1>
    <table>
        <tr><th>id</th><th>Год</th><th>Сайт</th><th>Описание</th></tr>
        <?php
        foreach ($data as $row){
            echo "<tr><th>".$row['Id']."</th><th>".$row['Year']."</th><th>".$row['Site']."</th><th>".$row['Description']."</th></tr>";
        }

        ?>
    </table>
</div>
<div class="container-three">
    <form method="post" class="cool-form">
        <label>Id</label><br>
        <input name="Id" required><br><br>
        <label>Год</label><br>
        <input name="year" required><br><br>
        <label>Сайт</label><br>
        <input name="site" required><br><br>
        <label>Описание</label><br>
        <input name="descr" required><br><br>
        <input type="submit" name="upd">
    </form>
    <form method="post" class="cool-form">
        <label>Год</label><br>
        <input name="year2" required><br><br>
        <label>Сайт</label><br>
        <input name="site2" required><br><br>
        <label>Описание</label><br>
        <input name="descr2" required><br><br>
        <input type="submit" name="add">
    </form>
    <form method="post" class="cool-form">
        <label>Id</label><br>
        <input name="Id" required><br><br>
        <input type="submit" name="del">
    </form>

</div>

