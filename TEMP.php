<?php
$conn = mysqli_connect("localhost", "root", "leelee3774", "parsingdata");
?>
<!DOCTYPE html>
<html>
  <head>
    <title>dos-200</title>
  </head>
  <body>
    <h1>TEMPERATURE</h1>
    <table border="2">
      <tr>
        <td width=20, align='center'>No</td>
        <td width=200, align='center'>DATE</td>
        <td width=30, align='center'>TEMP</td>
        <?php
        $sql = "select * from data2";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
          ?>
          <tr>
            <td><?=$row['No']?></td>
            <td><?=$row['DATE']?></td>
            <td><?=$row['TEMP']?></td>
          </tr>
          <?php
        }
        ?>
      </tr>
    </table>
  </body>
</html>
