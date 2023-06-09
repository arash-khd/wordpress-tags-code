<?php $tags = get_the_tags();
foreach ($tags as $tag) {

  echo "<a href='$tag->slug'> $tag->name <span> , </span> </a>";
  
}

 ?>