<html>
    <head>
    </head>
        <body>
            <?php

            $max_columns = 4;
            $data = array("mom","dad","blank","blank", "sis","bro","little bro","little sis", "auntie","uncle","cousin","blank");
            

            ?>
            <table>
                <?php
                $record_id = 0;
                while(true)
                {
                    for ($column = 1; $column<=$max_columns; $column++) {
                        if (!isset($data[$record_id])){
                            return; 
                        }

                        if ($column == 1){
                            echo "<tr>";
                        }
                        ?>

                        <td valign="top" bgcolor="lightblue" widtth="50px" height="50px">
                        <?php echo $record_id ?>
                        </td>

                        <?php
                        
                        if ($column == $max_columns ) {
                            echo "</tr>";
                        }

                        $record_id++;
                    }
                }
                ?>
            </table>
        </body>
</html>