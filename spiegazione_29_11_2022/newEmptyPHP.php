<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_POST["txtEmail"];
                $pattern = "/[a-z0-9]*@[a-z0-9]*\.[a-z]{2,5}/";

                if(preg_match($pattern, $email)) {
                    echo "email corretta";
                } else {
                    echo "email non corretta";
                }
            } else {
        ?>
        
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
            <label>Email</label>
            <input type="email" name="txtEmail" placeholder="inserisci la tua email"><br>
            <input type="submit" name="btnInvia" value="Invia">
        </form>
        
        <?php
            }
        ?>
    </body>
</html>