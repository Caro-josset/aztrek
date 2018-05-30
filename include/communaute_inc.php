
        <article>
          <a href="users.php">
          <img src="uploads/<?php echo $user["picture"]; ?>" alt="photo user noir et blanc">
          <h2><?php echo $user["pseudo"]; ?></h2>
          <div class="info">
            <p><?php echo $user["story_nb"]; ?> stories</p>
            <p class="level-<?php echo $user["story_nb"]; ?>">
              <?php if (is_numeric($user["story_nb"])) : ?>
                    <?php if ($user["story_nb"] <= 5) : ?>
                    Bébé trekker
                    <?php elseif ($user["story_nb"] > 5 & $user["story_nb"] <= 10): ?>
                      Trekker débutant  
                    <?php elseif ($user["story_nb"] > 10 & $user["story_nb"] <= 15): ?> 
                      Trekker initié
                    <?php elseif ($user["story_nb"] > 15 & $user["story_nb"] <=20): ?> 
                      Trekker confirmé
                    <?php else: ?>
                      As du trek
                    <?php endif; ?>
              <?php endif; ?>
            </p>
          </div>
          </a>  
        </article>