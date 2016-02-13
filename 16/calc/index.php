
    <?php
        $number1 = isset($_POST['number1']) ? $_POST['number1'] : null;
        $number2 = isset($_POST['number2']) ? $_POST['number2'] : null;
        $operation= isset($_POST['operation']) ? $_POST['operation'] : null;
        $result = isset($_POST['result']) ? $_POST['result'] : null;
        if ( $operation == "minus") {
            $result = $number1 - $number2;
        }
        if ( $operation == "plus") {
            $result = $number1 + $number2;
        }
        if ( $operation == "multi") {
            $result = $number1 * $number2;
        }
        if ( $operation == "devision") {
            $result = $number1 / $number2;
        }

    ?>
    <form method="POST" action=""> 
            <input id="number1" type="number" name="number1" value="<?php echo $number1;?>" />
            <select name="operation" id="operation">
                <option value="minus">-</option>
                <option value="plus" <?php  if ( $operation == "plus") {echo "selected"; }  ?> >+</option>
                <option value="multi" <?php  if ( $operation == "multi") {echo "selected"; }  ?> >*</option>
                <option value="devision" <?php  if ( $operation == "devision") {echo "selected"; }  ?> >/</option>
            </select>
            <input id="number2" type="number" name="number2" value="<?php echo $number2;?>" />
        <input type="submit" name="submit" value="=" />
        <input type="number" name="result" value="<?php echo $result;?>" />
    </form>





