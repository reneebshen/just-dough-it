<?php
include("includes/init.php");
$title = "Suggestions";
$suggestionsClass = "active";
include("includes/suggest.php");
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
    <section class='<?php echo $confirmation_css_class; ?>'>
      <h2>Suggestion Received!</h2>

      <p>Thank you for suggesting "<strong><?php echo htmlspecialchars($title); ?></strong>" at: <strong><?php echo htmlspecialchars($link); ?></strong>.</p>

      <p class='<?php echo $info_conf_class; ?>'>We'll be sure to consider:</p>

      <p class='background-txt <?php echo $info_conf_class; ?>'><em><?php echo htmlspecialchars($info); ?></em></p>


      <p>We will contact you at <strong><?php echo htmlspecialchars($email); ?></strong> if your suggestion is added!</p>
    </section>

    <section class='<?php echo $form_css_class; ?>'>
      <form method='post' action='/suggestions' novalidate>
        <fieldset>
          <legend>
            <h2>Suggest New Recipes</h2>
          </legend>
          <p>
            Required fields are followed by
            <strong>*</strong>.
          </p>

          <br>
          <p class='feedback <?php echo $email_feedback_class; ?>'>Please provide a contact email.</p>
          <div class="form-item">
            <label for="email">
              <span>Email: </span>
            </label>
            <input id="email" type="email" name="email" value='<?php echo $sticky_email; ?>' /> *
          </div>

          <br>
          <p class='feedback <?php echo $title_feedback_class; ?>'>Please provide a recipe title.</p>
          <div class="form-item">
            <label for="recipe-title">
              <span>Recipe Title: </span>
            </label>
            <input id="recipe-title" type="text" name="title" value='<?php echo $sticky_title; ?>' /> *
          </div>

          <br>
          <p class='feedback <?php echo $link_feedback_class; ?>'>Please provide a recipe link.</p>
          <div class="form-item">
            <label for="recipe-link">
              <span>Recipe Link: </span>
            </label>
            <input id="recipe-link" type="text" name="link" value='<?php echo $sticky_link; ?>' /> *
          </div>

          <br>

          <div class="form-item">
            <label for="recipe-background">
              <span>Reasons for recommending this recipe?</span>
            </label>
            <textarea id="recipe-background" name="info"><?php echo $sticky_info; ?></textarea>
          </div>

          <p>
            <input id='submit' type="submit" value="Suggest!" name='submit' />
          </p>

        </fieldset>

      </form>
    </section>
  </main>

  <?php include('includes/footer.php'); ?>

</body>

</html>
