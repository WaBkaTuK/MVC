
    <div class="content-block">
    <table>
    <p>Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.</p>
        <tr>
            <th>Год</th>
            <th>Проект</th>
            <th>Описание</th>
        </tr>
        <?php

        foreach ($data as $row) {

            echo '<tr><td>' . $row['year'] . '</td><td>' .$row['site'].
                '</td><td>' . $row['description'] . '</td></tr>';

        }

        ?>
    </table>
    </div>
