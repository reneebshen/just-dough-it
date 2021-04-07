<?php include("includes/init.php");
$title = "Sourdough";

$quickInfo = [
  'time' => '3 hours active, 14 hours wait',
  'difficulty' => 'Medium',
  'servings' => '10" diameter round loaf'
];

$tools = ["Large bowl", "Medium bowl or tupperware", "Cotton towel", "Sharp knife", "Kitchen scale", "Large metal pot with lid"];

$imgSrc = 'public/images/sourdough_lg.jpg';
$imgAlt = 'Sourdough Loaf';

$ingredients = ["500g bread flour", "375g water", "2g active dry yeast", "10g salt", "100g sourdough starter"];

$steps = ["Mix flour and water in a large bowl. Rest for 30 minutes.", "With your hands, fold in sourdough starter, then salt. Rest for 15 minutes.", "Every 15 minutes, fold your dough over on itself several times. Repeat 3x, then rest dough for 4 hours.", "Place towel over medium bowl and cover with flour.", "Shape dough into ball by folding it in thirds once, turning 90 degrees, and folding it in thirds again.
Pinch together seams.", "Place dough into floured bowl, rest 6-8 hours in refrigerator.", "Preheat oven to 500 degrees.", "Place dough into pot, and cut a slit along the top of the dough, 1/2 inch deep.", "Bake for 20 minutes with lid on, then remove lid, decrease oven temperature to 450 degrees, and bake for 20
more minutes.", "Remove bread from oven, and wait until cooled to enjoy!"];
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
