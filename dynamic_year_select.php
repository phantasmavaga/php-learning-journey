<form method="post" action="">
    <select name="Year">
        <?php
            for ($i = date("Y"); $i <= date("Y") + 6; $i++) {
                // Generate an <option> element for each year in the range
                echo "<option value=\"$i\">$i</option>\n";// Escape double quotes within a double-quoted string: \"$i\"
            }
        ?>
    </select>
</form>
