<?php
    include ("dbh.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script>
            //jQuery code here!
        </script>
    </head>
    <body>
        <div id="comments">
            <?php
                $sql = "SELECT * FROM users LIMIT 2";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)> 0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "<p>";
                        echo $row['id'];
                        echo "<br>";
                        echo $row['nickname'];
                        echo "<br>";
                        echo $row['passwd'];
                        echo "<br>";
                        echo $row['created'];
                        echo "</p>";
                    }
                    }

                else{
                    echo "there are no users in database";
                }
            ?>
        </div>
        <button>Show More Comments</button>
    </body>
</html>

