<?php

include "partials/header.php";
include base_path("partials/navbar.php");
include base_path("partials/hero.php");

$db = new Database();
$db->getConnection();

$article = new Article();
$article = $article->get_all();

var_dump($article);

?>

<!-- Main Content -->
<main class="container my-5">
    <!-- Blog Post 1 -->
    <div class="row mb-4">
        <div class="col-md-4">
            <img src="https://placehold.co/350x200" class="img-fluid" alt="Blog Post Image">
        </div>
        <div class="col-md-8">
            <h2>Blog Post Title 1</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros,
                pulvinar facilisis justo mollis, auctor consequat urna.
            </p>
            <a href="article.html" class="btn btn-primary">Read More</a>
        </div>
    </div>
    <!-- Blog Post 2 -->
    <div class="row mb-4">
        <div class="col-md-4">
            <img src="https://placehold.co/350x200" class="img-fluid" alt="Blog Post Image">
        </div>
        <div class="col-md-8">
            <h2>Blog Post Title 2</h2>
            <p>
                Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in,
                pharetra a, ultricies in, diam. Sed arcu.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>
    <!-- Blog Post 3 -->
    <div class="row mb-4">
        <div class="col-md-4">
            <img src="https://placehold.co/350x200" class="img-fluid" alt="Blog Post Image">
        </div>
        <div class="col-md-8">
            <h2>Blog Post Title 3</h2>
            <p>
                Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu
                vulputate magna eros eu erat.
            </p>
            <a href="#" class="btn btn-primary">Read More</a>
        </div>
    </div>
</main>

<?php

include "partials/footer.php";
?>
