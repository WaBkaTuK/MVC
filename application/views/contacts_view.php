
    <div class="content-block">
    <table>
        <tr>
            <td>Имя</td>
            <td>Номер</td>
        </tr>
        <?php
        foreach ($data as $row) {
            echo "<tr><td>" . $row['Name'] . "</td><td>" . $row['Number'] . "</td></tr>";
        }

        ?>
    </table>
    </div>
