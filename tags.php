<?php $tags = get_the_tags();

if(!empty($tags)){ ?>
<div class="post-tags d-flex">
<?php foreach ($tags as $tag) {
$tag_slug = esc_attr( get_tag_link( $tag->term_id ) );	
  echo "<a href='$tag_slug'> $tag->name <span> , </span> </a>";
  
}

 ?> </div>
<?php } ?>
