<form action="/" method="get">
  <label for="search">Search</label>
  
  <!-- search only in recipe category, 7 is the tag ID for recipes category -->
  <input type="hidden" name="cat" value="7">

  <input 
    type="text" 
    name="s" 
    id="search" 
    value="<?php the_search_query(); ?>" 
    required
  >
  <button type="submit">Search</button>
</form>