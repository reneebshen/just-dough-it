<main>
  <section>
    <section class='recipe-txt'>
      <h2>
        Recipe: <?php echo $title; ?>
      </h2>
      <strong>Quick Info</strong>
      <ul>
        <li>Time: <?php echo $quickInfo['time']; ?></li>
        <li>Difficulty: <?php echo $quickInfo['difficulty']; ?></li>
        <li>Servings: <?php echo $quickInfo['servings']; ?></li>
      </ul>
      <strong>Tools</strong>
      <ul>
        <?php
        foreach ($tools as $tool) {
          echo '<li>', $tool, '</li>';
        }
        ?>
      </ul>
    </section>
    <section class='recipe-img'>
      <!-- Source: (original work) Renee Shen -->
      <img src="<?php echo $imgSrc; ?>" alt=" <?php echo $imgAlt; ?>">
    </section>
  </section>
  <section>
    <h3><strong>Ingredients</strong></h3>
    <ul>
      <?php
      foreach ($ingredients as $ingr) {
        echo '<li>', $ingr, '</li>';
      }
      ?>
    </ul>
  </section>
  <section>
    <h3><strong>Steps</strong></h3>
    <ol>
      <?php
      foreach ($steps as $step) {
        echo '<li>', $step, '</li>';
      }
      ?>
    </ol>
  </section>
</main>
