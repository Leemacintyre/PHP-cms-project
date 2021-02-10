<?php
include "includes/db.php";
include "includes/header.php";
?>

<body>

<!-- Navigation -->
<?php
require "includes/navigation.php"
?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            <?php
            global $connection;
            $query = "SELECT * FROM posts";
            $selectAllPostsQuery = mysqli_query($connection, $query);

            while($row = mysqli_fetch_assoc($selectAllPostsQuery)){
                $post_title = $row['post_title'];
                $post_author = $row['post_author'];
                $post_date = $row['post_date'];
                $post_image = $row['post_image'];
                $post_content = $row['post_content'];
                ?>

            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>

            <!-- First Blog Post -->
            <h2>
                <a href="#"><?php echo $post_title ?></a>
            </h2>
            <p class="lead">
                by <a href="index.php"><?php echo $post_author ?></a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
            <hr>
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            <hr>
            <p><?php echo $post_content ?></p>
            <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

            <hr>



           <?php } ?>


        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php
        require "includes/sidebar.php"
        ?>

    </div>
    <!-- /.row -->

    <?php
    require "includes/footer.php"
    ?>