      <article>
          <a href="destinations.php?id=<?php echo $destination["id"]; ?>">
            <h2><?php echo $destination["pays"];?></h2>
            <p class="hover">GO</p>
            <div><img src="uploads/<?php echo $destination["picture"]; ?>" alt="">
              <div class="legende">
                <a href="#"><?php echo $destination["story_nb"]; ?> stories</a>
                <a href="#">15 trekkers</a>
              </div>
            </div>
            <p class="price">à partir de <?php echo $destination["price"]; ?> €</p>
          </a>
        </article>