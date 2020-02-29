
    <div class="content-block">
        <table>
            <p>Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.</p>
            <tr>
                <th>Год</th>
                <th>Проект</th>
            </tr>
            <?php

            foreach ($data as $row) {
?>
                <tr><td><?= $row['Title'] . '</td><td>' .$row['Content'] ?></td><td>
                 <form method="post" action="detail">
                 <input type="hidden" class="kek" name="id" value="<?= $row['Id'] ?>">
                 <input type="hidden" class="kek" name="title" value='<?= $row['Title']?> '>
                 <input  type="hidden" name="content" value='<?= $row['Content']?> '>
                  <input type="submit" name="link" value="Подробнее">
                 </form></td></tr>
<?php
            }
            ?>
        </table>
    </div>
