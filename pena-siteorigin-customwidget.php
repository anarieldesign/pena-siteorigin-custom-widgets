<?php
/**
 * Plugin Name: Pena Custom Widgets for SiteOrigin Page Builder Plugin
 * Description: Custom Widgets for SiteOrigin Page Builder Plugin
 * Version: 1.0
 * Author: Anariel Design
 * Author URI: http://www.anarieldesign.com
 */
/*-----------------------------------------------------------------------------------*/
/* Custom Pena Widget: Featured Page
/*-----------------------------------------------------------------------------------*/
add_action( 'widgets_init', 'pena_register_widget' );
function pena_register_widget() {
 
class Pena_Featured_Page extends WP_Widget {
	function __construct() {
		$widget_ops = array( 'description' => esc_html__( 'This Widget Can Only Be Used With SiteOrigin Page Builder & Basic Template.', 'pena' ) );
		parent::__construct( false, esc_html__( 'Pena Front Page - First Content Block - SiteOrigin', 'pena' ), $widget_ops );
	}
	function widget( $args, $instance ) {
		if ( isset( $instance['page'] ) && $instance['page'] != -1 ) 
		$page_id = (int) $instance['page'];
		$p = new WP_Query( array( 'page_id' => $page_id ) );

			if ( $p->have_posts() ) {
				$p->the_post();

		}
?>
<div class="hfeed site custom-widget">
	<div class="content site-content">
		<div class="block-one">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php get_template_part( 'template-parts/content', 'front-firstblock-additional' ); ?>
			</div>
		</div><!-- .block-one -->
	</div><!-- .content -->
</div><!-- .site -->

		<?php
		echo $args['after_widget'];
		// Reset the post globals as this query will have stomped on it
		wp_reset_postdata();
		}
	function update( $new_instance, $old_instance ) {
		$instance['page'] = (int)( $new_instance['page'] );
		return $new_instance;
	}
	function form( $instance ) {
		$page = isset( $instance['page'] ) ? (int) $instance['page'] : 0;
	?>
	<p><label for="<?php echo $this->get_field_id( 'page' ); ?>"><?php _e( 'Page:', 'pena' ); ?></label></p>
	<?php
			wp_dropdown_pages( array(
				'orderby'    => 'title',
				'hide_empty' => false,
				'name'       => $this->get_field_name( 'page' ),
				'class'      => 'widefat',
				'selected'   => $page
			) );
			?>
<hr />
	<?php
	}
}
register_widget( 'Pena_Featured_Page' );


class Pena_Featured_Page_One extends WP_Widget {
	function __construct() {
		$widget_ops = array( 'description' => esc_html__( 'This Widget Can Only Be Used With SiteOrigin Page Builder & Basic Template.', 'pena' ) );
		parent::__construct( false, esc_html__( 'Pena Front Page - Second Content Block - SiteOrigin', 'pena' ), $widget_ops );
	}
	function widget( $args, $instance ) {
		if ( isset( $instance['page'] ) && $instance['page'] != -1 ) 
		$page_id = (int) $instance['page'];
		$p = new WP_Query( array( 'page_id' => $page_id ) );

			if ( $p->have_posts() ) {
				$p->the_post();
		}
?>

<div class="second-block">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_template_part( 'template-parts/content', 'front-secondblock' ); ?>
	</div>
</div><!-- .block-one -->

		<?php
		echo $args['after_widget'];
		// Reset the post globals as this query will have stomped on it
		wp_reset_postdata();
		}
	function update( $new_instance, $old_instance ) {
		$instance['page'] = (int)( $new_instance['page'] );
		return $new_instance;
	}
	function form( $instance ) {
		$page = isset( $instance['page'] ) ? (int) $instance['page'] : 0;
	?>
	<p><label for="<?php echo $this->get_field_id( 'page' ); ?>"><?php _e( 'Page:', 'pena' ); ?></label></p>
	<?php
			wp_dropdown_pages( array(
				'orderby'    => 'title',
				'hide_empty' => false,
				'name'       => $this->get_field_name( 'page' ),
				'class'      => 'widefat',
				'selected'   => $page
			) );
			?>
<hr />
	<?php
	}
}
register_widget( 'Pena_Featured_Page_One' );

class Pena_Featured_Page_Two extends WP_Widget {
	function __construct() {
		$widget_ops = array( 'description' => esc_html__( 'This Widget Can Only Be Used With SiteOrigin Page Builder & Basic Template.', 'pena' ) );
		parent::__construct( false, esc_html__( 'Pena Front Page - Third Content Block - SiteOrigin', 'pena' ), $widget_ops );
	}
	function widget( $args, $instance ) {
		if ( isset( $instance['page'] ) && $instance['page'] != -1 ) 
		$page_id = (int) $instance['page'];
		$p = new WP_Query( array( 'page_id' => $page_id ) );

			if ( $p->have_posts() ) {
				$p->the_post();
		}
?>
<div class="hfeed site">
	<div class="content site-content">
		<div class="block-three">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php get_template_part( 'template-parts/content', 'front-thirdblock' ); ?>
			</div>
		</div><!-- .block-one -->
	</div><!-- .content -->
</div><!-- .site -->

		<?php
		echo $args['after_widget'];
		// Reset the post globals as this query will have stomped on it
		wp_reset_postdata();
		}
	function update( $new_instance, $old_instance ) {
		$instance['page'] = (int)( $new_instance['page'] );
		return $new_instance;
	}
	function form( $instance ) {
		$page = isset( $instance['page'] ) ? (int) $instance['page'] : 0;
	?>
	<p><label for="<?php echo $this->get_field_id( 'page' ); ?>"><?php _e( 'Page:', 'pena' ); ?></label></p>
	<?php
			wp_dropdown_pages( array(
				'orderby'    => 'title',
				'hide_empty' => false,
				'name'       => $this->get_field_name( 'page' ),
				'class'      => 'widefat',
				'selected'   => $page
			) );
			?>
<hr />
	<?php
	}
}
register_widget( 'Pena_Featured_Page_Two' );

class Pena_Featured_Page_Three extends WP_Widget {
	function __construct() {
		$widget_ops = array( 'description' => esc_html__( 'This Widget Can Only Be Used With SiteOrigin Page Builder & Basic Template.', 'pena' ) );
		parent::__construct( false, esc_html__( 'Pena Front Page - Fourth Content Block - SiteOrigin', 'pena' ), $widget_ops );
	}
	function widget( $args, $instance ) {
		if ( isset( $instance['page'] ) && $instance['page'] != -1 ) 
		$page_id = (int) $instance['page'];
		$p = new WP_Query( array( 'page_id' => $page_id ) );

			if ( $p->have_posts() ) {
				$p->the_post();
		}
?>

<div class="info">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_template_part( 'template-parts/content', 'front-fourthblock' ); ?>
	</div>
</div><!-- .block-one -->

		<?php
		echo $args['after_widget'];
		// Reset the post globals as this query will have stomped on it
		wp_reset_postdata();
		}
	function update( $new_instance, $old_instance ) {
		$instance['page'] = (int)( $new_instance['page'] );
		return $new_instance;
	}
	function form( $instance ) {
		$page = isset( $instance['page'] ) ? (int) $instance['page'] : 0;
	?>
	<p><label for="<?php echo $this->get_field_id( 'page' ); ?>"><?php _e( 'Page:', 'pena' ); ?></label></p>
	<?php
			wp_dropdown_pages( array(
				'orderby'    => 'title',
				'hide_empty' => false,
				'name'       => $this->get_field_name( 'page' ),
				'class'      => 'widefat',
				'selected'   => $page
			) );
			?>
<hr />
	<?php
	}
}
register_widget( 'Pena_Featured_Page_Three' );


class Pena_Featured_Page_Four extends WP_Widget {
	function __construct() {
		$widget_ops = array( 'description' => esc_html__( 'This Widget Can Only Be Used With SiteOrigin Page Builder & Basic Template.', 'pena' ) );
		parent::__construct( false, esc_html__( 'Pena Front Page - Fifth Content Block - SiteOrigin', 'pena' ), $widget_ops );
	}
	function widget( $args, $instance ) {
		if ( isset( $instance['page'] ) && $instance['page'] != -1 ) 
		$page_id = (int) $instance['page'];
		$p = new WP_Query( array( 'page_id' => $page_id ) );

			if ( $p->have_posts() ) {
				$p->the_post();
		}
?>

<div class="block-five">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php get_template_part( 'template-parts/content', 'front-fifthblock' ); ?>
	</div>
</div><!-- .block-one -->

		<?php
		echo $args['after_widget'];
		// Reset the post globals as this query will have stomped on it
		wp_reset_postdata();
		}
	function update( $new_instance, $old_instance ) {
		$instance['page'] = (int)( $new_instance['page'] );
		return $new_instance;
	}
	function form( $instance ) {
		$page = isset( $instance['page'] ) ? (int) $instance['page'] : 0;
	?>
	<p><label for="<?php echo $this->get_field_id( 'page' ); ?>"><?php _e( 'Page:', 'pena' ); ?></label></p>
	<?php
			wp_dropdown_pages( array(
				'orderby'    => 'title',
				'hide_empty' => false,
				'name'       => $this->get_field_name( 'page' ),
				'class'      => 'widefat',
				'selected'   => $page
			) );
			?>
<hr />
	<?php
	}
}
register_widget( 'Pena_Featured_Page_Four' );

class Pena_Intro_Page extends WP_Widget {
	function __construct() {
		$widget_ops = array( 'description' => esc_html__( 'This Widget Can Only Be Used With SiteOrigin Page Builder & Basic Template.', 'pena' ) );
		parent::__construct( false, esc_html__( 'Pena Front Page - Intro Block - SiteOrigin', 'pena' ), $widget_ops );
	}
	function widget( $args, $instance ) {
		if ( isset( $instance['page'] ) && $instance['page'] != -1 ) 
		$page_id = (int) $instance['page'];
		$p = new WP_Query( array( 'page_id' => $page_id ) );

			if ( $p->have_posts() ) {
				$p->the_post();

		}
?>
	<div class="intro">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php get_template_part( 'template-parts/content', 'front-page' ); ?>
		</div>
	</div><!-- .block-one -->

		<?php
		echo $args['after_widget'];
		// Reset the post globals as this query will have stomped on it
		wp_reset_postdata();
		}
	function update( $new_instance, $old_instance ) {
		$instance['page'] = (int)( $new_instance['page'] );
		return $new_instance;
	}
	function form( $instance ) {
		$page = isset( $instance['page'] ) ? (int) $instance['page'] : 0;
	?>
	<p><label for="<?php echo $this->get_field_id( 'page' ); ?>"><?php _e( 'Page:', 'pena' ); ?></label></p>
	<?php
			wp_dropdown_pages( array(
				'orderby'    => 'title',
				'hide_empty' => false,
				'name'       => $this->get_field_name( 'page' ),
				'class'      => 'widefat',
				'selected'   => $page
			) );
			?>
<hr />
	<?php
	}
}
register_widget( 'Pena_Intro_Page' );

}