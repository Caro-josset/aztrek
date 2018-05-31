
 <article class="stories-bloc">
            <a href="stories.php">
              <p class="hover">GO</p>
            <div class="profil">
              <p>@<?php echo $story["user"]; ?></p>
              <img src="uploads/<?php echo $story["profil_picture"]; ?>" alt="photo d'un utilisateur en noir et blanc">
            </div>
            <div class="stories-img"><img src="uploads/<?php echo $story["picture"]; ?>" alt="">
              <div class="stat">
                <p><?php echo $story["aime_nb"]; ?></p>
                <p>503</p>
              </div>
            </div>
            <p class="title-storie"><?php echo $story["title_trek"]; ?></p>
            </a>
          </article>