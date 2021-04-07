<?php include("includes/init.php");
$title = "Recipes";
$recipesClass = "active";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>
    <?php echo $title; ?> - Just Dough It!
  </title>

  <link rel="stylesheet" type="text/css" href="public/styles/main.css" media="all" />
</head>

<body>
  <?php include('includes/header.php'); ?>

  <main>
    <article>
      <h2>
        Recipes
      </h2>
      <figure class='flex-outer'>
        <figure class='flex-child'>
          <!-- Source: (original work) Renee Shen -->
          <img src='public/images/sourdough.jpg' alt="Sourdough Loaf">
          <a href="/sourdough">
            Sourdough
          </a>
        </figure>
        <figure class='flex-child'>
          <!-- Source: (original work) Renee Shen -->
          <img src='public/images/focaccia.jpg' alt="Focaccia Loaf">
          <a href="/focaccia">
            Focaccia
          </a>
        </figure>
        <figure class='flex-child'>
          <!-- Source: (original work) Renee Shen -->
          <img src='public/images/pizza.jpg' alt="Pizza">
          <a href="#">
            Coming Soon!
          </a>
        </figure>
      </figure>
    </article>
  </main>

  <?php include('includes/footer.php'); ?>

</body>

</html>
