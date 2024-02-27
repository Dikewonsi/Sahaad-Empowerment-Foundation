<?php
    session_start();
    include ("config.php");

    $num_per_page = 05;

    if(isset($_GET['page']))
    {
        $page = $_GET['page'];

    }
    else
    {
        $page = 1;
    }

    $start_from = ($page-1)*05;
    $sql = "SELECT * FROM homes limit $start_from, $num_per_page";
    $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table align="center" border="1px;">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Amount</th>
        </tr>
        <?php
            while($rows=mysqli_fetch_array($result))
            {
        ?>
        <tr>
            <td><?= $rows['id'];?></td>
            <td><?= $rows['title'];?></td>
            <td><?= $rows['amount'];?></td>
        </tr>
        <?php
            }
        ?>  
    </table>

    <?php
        $sql = "SELECT * FROM homes";
        $result = mysqli_query($conn, $sql);
        $total_records = mysqli_num_rows($result);
        $total_pages = ceil($total_records/$num_per_page);
        
        for($i=1;$i<=$total_pages;$i++)
        {
            echo "<a href='testing.php?page=".$i."'>".$i."</a>";
        }
    ?>
    
</body>
</html>