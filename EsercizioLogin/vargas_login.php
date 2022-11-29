<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registrazione</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma-rtl.min.css">
        
        <style>
        table, th, td {
          border: 1px solid black;
        }
        </style>

    </head>
    <body>
        <section class="section">
            <div class="container">
                <div class="columns is-mobile is-centered">
                    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
                        
                        <h1><b>Registrazione</b></h1><br><br>

                        <label for="fname">Nome</label>
                        <input class="input is-rounded" type="text" id="fname" name="fname" pattern="[a-zA-Z]+" placeholder="Nome"><br><br>


                        <label for="lname">Cognome</label>
                        <input class="input is-rounded" type="text" id="lname" name="lname" pattern="[a-zA-Z]+" placeholder="Cognome"><br><br>

                        <label for="email">Email</label>
                        <input class="input is-rounded" type="email" id="email" name="email" pattern="[a-z0-9].[a-z0-9]*+@buonarroti\.tn\.it" placeholder="nome.cognome@buonarroti.tn.it"><br><br>


                        <label for="telefono">Telefono</label>
                        <input class="input is-rounded" type="tel" id="telefono" name="telefono" pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$" placeholder="123456789"><br><br>
                        
                        <label for="telefono">Data di nascita</label>
                        <input class="input is-rounded" type="date" id="dataNascita" name="dataNascita">
                        
                        <label for="password">Password</label>
                        <input class="input is-rounded" type="password" id="password" name="password" placeholder="*********"><br><br>

                        <label for="cf">Codice Fiscale</label>
                        <input class="input is-rounded" type="text" id="cf" name="cf"><br><br>
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </section>
        
        <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $email = $_POST["email"];
                $telefono = $_POST["telefono"];
                $dataNascita = $_POST["dataNascita"];
                $password = $_POST["password"];
                $cf = $_POST["cf"];
        ?>
        
        <table>
            <tr><td>Nome</td><td>Cognome</td><td>Email</td><td>Telefono</td><td>Data di nascita</td><td>Password</td><td>Codice Fiscale</td></tr>
            <tr><td><?php $fname ?></td>
                <td><?php $lname ?></td>
                <td><?php $email ?></td>
                <td><?php $telefono ?></td>
                <td><?php $dataNascita ?></td>
                <td><?php $password ?></td>
                <td><?php $cf ?></td>
        </table>
        
        <?php
            }
        ?>
    </body>
</html>