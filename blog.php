<?php
include 'config.php';

?>
<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #4d91d4;
            color: #000000;
        }

        #blog-posts {
            text-align: center;
            padding: 20px;
        }

        .blog-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .blog-post {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: left;
        }

        .blog-post h2 {
            color: #007bff;
            margin-bottom: 10px;
        }

        .blog-post p {
            margin-bottom: 20px;
        }

        .read-more {
            color: #007bff;
            text-decoration: none;
        }

        .read-more:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <section id="blog-posts">
        <h1>This is my Blog, hope you enjoy it</h1>
        <div class="blog-container">
<?php
    $query = "SELECT * FROM blog";
    $result = mysqli_query($conn, $query);

    $no = 1;

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            if ($no >=0) {
            ?>
            <div class="blog-post">
                <h2><?= $row["judul"] ?> </h2>
                <p><?= $row["deskripsi"] ?></p>
                <a href="<?= $row["link"] ?>">Read more</a>
            </div>
  <?php } 
            $no++;
        }
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    } ?>
            
        </div>
    </section>
</body>
</html>
