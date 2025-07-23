<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="blogs.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="left">
                <a href="index.html">Home</a>
            </div>
            <div class="right">
                <a href="#">About</a>
                <a href="#">Portfolio</a>
                <a href="#">Contact</a>
                <a href="blogs.php">Blogs</a>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="left-post">
            <h5>Latest Posts</h5>
        </div>
        <div class="posts">
            <div class="make-post">
                <h5>Make a Post</h5>
                <form action="post.php" method="POST">
                <div class="inputarea">
                        <input type="text" name="username" id="username" placeholder="Enter your username">
                    </div>
                    <div class="inputarea">
                        <input type="text" name="title" id="title" placeholder="Enter the title">
                    </div>
                    <div class="inputarea">
                        <textarea name="post" id="post" placeholder="Enter your content"></textarea>
                    </div>
                    <input type="submit" value="Post">
                </form>
            </div>
            <?php
                include "connect.php";

                $query = "SELECT * FROM blogs";
                $run = mysqli_query($con, $query);

                if(mysqli_num_rows($run) > 0) {
                    while($row = mysqli_fetch_assoc($run)) {
                        echo "<div class='card-post'>";
                        echo "<h3>".$row['title']."</h3>";
                        echo "🙍‍♂️".$row['username']."</p>";
                        echo "<p>".$row['post']."</p>";
                        echo "</div>";
                    }
                }
            ?>
            </div>
        <div class="right-post">
            <h5>Featured Posts</h5>
        </div>
    </div>
</body>
</html>