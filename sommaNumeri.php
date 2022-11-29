<html>
    <head>
        <title>Somma numeri</title>
    </head>
    <body>
        
        <?php
        
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $pattern = "/^(\d*\.?\d+|\d{1,3}(,\d{3})*(\.\d+)?)$/";
            
            if(preg_match($pattern, $_POST["num1"])) {
                $num1 = $_POST["num1"];
            }
            
            if(preg_match($pattern, $_POST["num2"])) {
                $num2 = $_POST["num2"];
            }
        }
        
        ?>
        
        <form action='<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>' method='post'>
            <label>Primo numero</label><br>
            <input type='text' name='num1' required>
            <label class='warning'hidden=<?=isset($num1)?>>Valore non valido</label><br>
            
            <label>Secondo numero</label><br>
            <input type='text' name='num2' required>
            <label class='warning' hidden=<?=isset($num2)?>>Valore non valido</label><br><br>
                
            <label>Risultato</label><br>
            <input type='number' name='ris' value="<?= (isset($num1) && isset($num2)) ? $num1 + $num2 : '' ?>" readonly><br>
            
            <input type='submit' name='btnInvia' value="Risultato">
        </form>
    </body>
</html>