<?php include("includes/init.php");
$title = "Home";
$homeClass = "active";
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
        About
      </h2>
      <section>
        <h3>Purpose</h3>
        <p>Just Dough It aims to provide beginner-friendly recipes that are straight to the point and without any
          unnecessary steps or ingredients. For young people hoping to start a hobby in baking, just dough it!</p>
      </section>
      <section>
        <h3>Renee's Baking Journey</h3>
        <p>Renee grew up on her grandmother's pound cake, which made appearances at every family holiday. Once, she
          decided
          to make her own pound cake, with a recipe of her own. As a twelve-year-old, she had no idea that "pound cake"
          meant a pound of each ingredient. Thus, her poor cake came out of the oven swimming in her favorite
          ingredient:
          butter. Since then, Renee has dramatically improved her baking abilities (despite still being a little afraid
          of
          cakes), and hopes to share her recipes on Just Dough It.</p>
      </section>
    </article>
  </main>

  <?php include('includes/footer.php'); ?>

</body>

</html>
