<html>
    <body>
        <table border="1">
            <?php
            for ($i = 1; $i <= 10; $i++) {
                echo '<tr>';
                for ($j = 1; $j <= 10; $j++) {
                    if ($i % 2 == 0 && $j % 2 == 0) {
                        echo '<td align="center">(' . ($i * $j) . ')</td>';
                    } elseif ($i % 2 == 1 && $j % 2 == 1) {
                        echo '<td align="center">[' . ($i * $j) . ']</td>';
                    } else {
                        echo '<td align="center">' . ($i * $j) . '</td>';
                    }
                }
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>



