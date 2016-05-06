<?php
/**
 * The template for displaying search forms in Triclinium
 *
 * @package WordPress
 * @subpackage Trliclinium
 * @since Triclinium 1.0
 */
?>

	<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	    <div class="input-group">
	      <input type="text" name="s" id="s" class="form-control" placeholder="<?php esc_attr_e( 'Szukaj...', 'Triclinium' ); ?>" />
	      <span class="input-group-btn">
	        <button class="btn btn-default" id="searchsubmit" name="submit" type="submit"><i class="fa fa-search"></i></button>
	      </span>
	    </div>
	 </form>  