<!DOCTYPE html>
<html>
<head>
    <title>Quiz No 1</title>
    <style>
        tr {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    
    function cetakTabel(){
        echo "Quiz No 1";
        echo "<br><br>";
        echo "<table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <td width='10%'>1</td>
                <td colspan='3' width='30%'>2</td>
            </tr>
            <tr>
                <td rowspan='2'>3</td>
                <td>4</td>
                <td rowspan='2'>5</td>
                <td>6</td>
            </tr>
            <tr>
                <td>7</td>
                <td>8</td>
            </tr>
        </table>";
    }

    cetakTabel();
    ?>
</body>
</html>