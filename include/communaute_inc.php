
        <article>
          <a href="users.php">
          <img src="uploads/<?php echo $user["picture"]; ?>" alt="photo user noir et blanc">
          <h2><?php echo $user["pseudo"]; ?></h2>
          <div class="info">
            <p><?php echo $user["story_nb"]; ?> stories</p>
            <p class="level-<?php echo $user["grade"]; ?>">As du trek</p>
          </div>
          </a>  
        </article>