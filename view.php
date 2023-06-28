<!doctype html>
<html lang ="en">
<head>
    <title>List of signups</title>
</head>
<body>
    <h1>List of signups </h1>
    <table border = '1'>
        <tr>
            <th>NAME</th>
            <th>PASSWORD </th>
            <th>EMAIL </th>
            <th>CONTACT </th>
            <th>NATION</th>
            <th>GENDER </th>
        </tr>
        <?php
        include 'dbconn.php';
        $sql = "SELECT * FROM feedback";
        $results = mysqli_query($conn, $sql);
         
        while ($row = mysqli_fetch_array($results)){
           echo "<tr>";
           echo "<td>" . $row['name'] . "</td>";
           echo "<td>" . $row['password'] . "</td>";
           echo "<td>" . $row['email'] . "</td>";
           echo "<td>" . $row['contact'] . "</td>";
           echo "<td>" . $row['nation'] . "</td>";
           echo "<td>" . $row['gender'] . "</td>";
           echo "</tr>";
         
        }

        ?>

    </table>
    <br>
    <a href ="home.html">HOME PAGE </a>
    <br>
</body>



</html>