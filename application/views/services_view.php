
    <div class="content-block">

    <table>
        <tr>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена</th>
        </tr>
        <?php
        foreach ($data as $row) {
            echo '<tr><td>' . $row['Title'] . '</td><td>' . $row['Service'] . '</td><td>' . $row['Cost'] . '</td></tr>';
        }

        ?>
    </table>
    </div>
