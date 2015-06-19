<?php

/* This file displays a single product in a list view. It needs to receive
 * the following product details (as elements of an array named $product):
 *     - sku:  Product ID, used to create the link to the Shirt Details page
 *     - img:  The web address of the main image for the product
 *     - name: The name of the
 */

?><li>
    <a href="<?php echo BASE_URL; ?>campfirestories/campfire.php?story=<?php echo $cfstory["storyid"]; ?>/">
      <figure>
        <img src="<?php echo BASE_URL . $cfstory["img"]; ?>" alt="<?php echo $cfstory["location"]; ?>">
        <figcaption><?php echo $cfstory["name"];?></figcaption>
      </figure>
    </a>
  </li>
