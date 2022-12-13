<html>
    <head>
        <style>
            table, td, tr {
                border: 1px solid black;
                border-collapse: collapse;
            }

            .center {
                display: flex;
                justify-content: center;
            }
        </style>
    </head>
    <body>
        <?php
        session_start();
        $_SESSION["data"] = [];

        function test_input($input) {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);

            return $input;
        }

        $errMsg = "";
        $post = $error = false;

        $data = [
            "subject" => "",
            "grade" => "",
            "average" => false
        ];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $data["subject"] = test_input($_POST["subject"]);
            if (!preg_match("/^[a-zA-Z]{2,10}$/", $data["subject"])) {
                $errMsg = "Dati errati";
                $error = true;
            }

            $data["grade"] = test_input($_POST["grade"]);
            if (!preg_match("/^([3-9]|10)$/", $data["grade"])) {
                $errMsg = "Dati errati";
                $error = true;
            }

            $data["subject"] = isset($_POST["average"]);

            if (!$error) {
                $post = true;
                array_push($_SESSION["data"], $data);
            }
        }

        if (!$post) {
            ?>

            <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                <table>
                    <tr>
                        <td>
                            <label>Materia</label>
                        </td>
                        <td>
                            <input type="text" name="subject" placeholder="da 1 a 20 caratteri" value="<?= $data["subject"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Voto</label>
                        </td>
                        <td>
                            <input type="text" name="grade" placeholder="3.0 - 10.0" value="<?= $data["grade"] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Media dei voti</label>
                        </td>
                        <td>
                            <input type="checkbox" name="average" <?= $data["average"] ? "checked" : "" ?>>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="center">
                                <input type="submit">
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
            <?= $errMsg ?>

        <?php } else { ?>
            <table>
                <tr>
                    <td colspan="2">
                        <div class="center">
                            <b>Voti</b>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Materia</b>
                    </td>
                    <td>
                        <b>Voto</b>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label><?= $_SESSION["data"][0]["subject"] ?></label>
                    </td>
                    <td>
                        <label><?= $_SESSION["data"][0]["grade"] ?></label>
                    </td>
                </tr>

                <tr>
                    <td>
                        <b>Media</b>
                    </td>
                    <td>
                        <b>8.75</b>
                    </td>
                </tr>
            </table>
        <?php } ?>
    </body>
</html>

