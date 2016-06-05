<?php 
/**
 * The template for displaying the search form.
 *
 * @package CitizensAdvice
 * @since CitizensAdvice 1.0
 */

?>
<form action="<?php echo home_url(); ?>" method="get" id="searchform" class="search-inline">
	<label for="s" class="screenreader">
		Search <?php bloginfo( 'name' ); ?>
	</label>
	<div class="search-inline__field">
		<input type="search" name="s" id="s" placeholder="Search <?php bloginfo( 'name' ); ?>">
	</div>
	<div class="search-inline__button">
		<input type="submit" id="searchsubmit" value="Search"> 
	</div>
</form>
