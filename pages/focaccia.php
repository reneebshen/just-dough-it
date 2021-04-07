<?php include("includes/init.php");
$title = "Focaccia";

$quickInfo = [
  'time' => '1 hour active, 1 hour wait',
  'difficulty' => 'Easy',
  'servings' => '9" x 11" flat loaf'
];

$tools = ["Large bowl", "9' x 11' sheet pan", "Knife", "Kitchen scale"];

$imgSrc = 'public/images/focaccia_lg.jpg';
$imgAlt = 'Focaccia Loaf';

$ingredients = ["400g all purpose flour", "300g water", "2g active dry yeast", "8g honey", "10g salt", "30g olive oil", "saltwater brine: 2.5g salt dissolved in 40g water"];

$steps = ["Mix water, yeast, honey until dissolved.", "Mix together flour and salt, then mix in yeast mixture and olive oil.", "Rest at room temperature for 12-14 hours.", "Spread olive oil over sheet pan, and spread dough out into pan. Pour a tablespoon of olive oil over
  flattened dough.", "Rest dough for 45 min, flattening it if it shrinks.", "Make dimples in dough by pushing finger pads into dough lightly. Pour brine over dough, and any spices you'd
  like. (I use chopped garlic and rosemary!)", "Preheat oven to 450 degrees, and bake focaccia for 30 to 40 minutes. Enjoy!"];
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

  <?php include('includes/recipe.php'); ?>

  <?php include('includes/footer.php'); ?>

</body>

</html>
