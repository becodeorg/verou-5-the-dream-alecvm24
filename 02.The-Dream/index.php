<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form aligne="center" action="index.php" method="post">
        <div id="box">
            <h2><center>Currency Convertor</center></h2>
            <table>
                <tr>
                    <td>
                        Enter Amount: <input type="text" name="amount"><br>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><center>From:
                            <select name="cur1">
                            <option value="EUR" Selected>Euro (EUR)</option>
                            </select>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <br><center>To:
                            <select name="cur2">
                                <option value="USD">US Dollar (USD)</option>
                                <option value="INR">Indian Rupee (INR)</option>
                                <option value="JPY">Japanese Yen (JPY)</option>
                                <option value="AUD">Australian Dollar (AUD)</option>
                            </select>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td>
                        <center><br>
                        <input type="submit" name="submit" value="ConvertNow">
                        </center>
                    </td>
                </tr>
            </table>
        </div>
    </form>
    <?php
        if(isset($_POST['submit'])){
            $amount = $_POST['amount'];
            $cur1 = $_POST['cur1'];
            $cur2 = $_POST['cur2'];

            if ($cur1=="EUR" AND $cur2=="USD"){
                echo "<center><b>Your Converted Amount is: </b><br></center>";
                echo "<center>" .$amount * 1.09 . "</center";
            }

            if ($cur1=="EUR" AND $cur2=="INR"){
                echo "<center><b>Your Converted Amount is: </b><br></center>";
                echo "<center>" .$amount * 90.90 . "</center";
            }

            if ($cur1=="EUR" AND $cur2=="JPY"){
                echo "<center><b>Your Converted Amount is: </b><br></center>";
                echo "<center>" .$amount * 156.43 . "</center";
            }

            if ($cur1=="EUR" AND $cur2=="AUD"){
                echo "<center><b>Your Converted Amount is: </b><br></center>";
                echo "<center>" .$amount * 1.63 . "</center";
            }
        }
    ?>
</body>
</html>