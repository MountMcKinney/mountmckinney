<?php

/* This file displays a list of links to pages of shirts. It needs to
 * receive the total number of pages ($totalPages) and the current
 * page number ($currentPage). It will display all the numbers between
 * 1 and $totalPages, and it will make all but $currentPage a link.
 */

?>

<div class="pagination">

  <?php $i = 0; ?>
  <?php while ($i < $totalPages) : ?>
    <?php $i += 1; ?>
    <?php if ($i == $currentPage) : ?>
      <span><?php echo $i; ?></span>
    <?php else : ?>
      <a href="./?pg=<?php echo $i; ?>"><?php echo $i; ?></a>
    <?php endif; ?>
  <?php endwhile; ?>

</div>
