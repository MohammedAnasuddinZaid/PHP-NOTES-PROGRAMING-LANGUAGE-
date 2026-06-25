<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLE</title>
</head>
<body>
        <table border="1">
            <tr>
                <td>  S.NO  </td>
                <td>  NAME  </td>
                <td>  EMAIL </td>
            </tr>
            <tr>
                <td>  1  </td>
                <td>  ANAS  </td>
                <td>  ANAS@GMAIL.COM </td>
            </tr>
            <tr>
                <td>  2  </td>
                <td>  SRI  </td>
                <td>  SRI@GMAIL.COM </td>
            </tr>
        </table>

        <?php
        $users=[
            [1,"anas","bhaigmail.com"],
            [2,"sri","srigmail.com"],
            [3,"ram","ramgmail.com"],
            [4,"sham","shamgmail.com"],
            [5,"dam","damgmail.com"],
            [6,"sam","samgmail.com"],
        ];
        echo "<table border='1'>";
        for($i=0;$i<count($users);$i++){
            echo "<tr>";
            for($j=0;$j<count($users[$i]);$j++) {
                echo "<td>";
                echo $users[$i][$j];
                echo "</td>";
            }
            echo "</tr>";

        };
        echo "</table>";
        ?>
    
</body>
</html>