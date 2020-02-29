<div class="content-block">
    <h1>Новости</h1>
    <table>
        <tr><th>Id</th><th>Пользователь</th><th>Статус</th></tr>
        <?php
        foreach ($data as $row){
            echo "<tr><th>".$row['id']."</th><th>".$row['user']."</th><th>".$row['status']."</th></tr>";
        }

        ?>
    </table>
</div>
<div class="content-block">
    <form method="post">
        <label>Забанить пользователя по id</label><br>
        <input type="text" name="idUser"><br><br>
        <input type="submit" name="ban">
    </form>
</div>
