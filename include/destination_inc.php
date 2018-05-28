        <article>
            <a href="destinations.php?id=<?php echo $destination["id"]; ?>">
            <h2><?php echo $destination["pays"];?></h2>
            <div><img src="uploads/<?php echo $destination["picture"]; ?>" alt="">
              <div class="legende">
                <a href="#">34 stories</a>
                <a href="#">15 trekkers</a>
              </div>
            </div>
            <p class="price"><?php echo $destination["price"]; ?></p>
            </a>
          </article>