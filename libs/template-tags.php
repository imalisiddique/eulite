<?php
/**
 *  Template Tags
 */

// Show Date
if( ! function_exists( "eulite_meta_date" ) ):

    function eulite_meta_date(){

        $archive_year  = get_the_time('Y'); 
        $archive_month = get_the_time('m'); 
        $archive_day   = get_the_time('d');
        $date_link = get_day_link( $archive_year, $archive_month, $archive_day);
        $date = get_the_date();

        echo sprintf ( __( 'On <a href="%1$1s">%2$2s</a>' , 'eulite' ), $date_link , $date );
    
    }

endif;

// Show Author 
if (! function_exists ( "eulite_meta_author" ) ):

    function eulite_meta_author(){
        $author_link =  esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ;
        $author = get_the_author();

        echo sprintf ( __( 'By <a href="%1$s">%2$s</a>' , 'eulite' ), $author_link , $author );
    }   

endif;

// Show Comment popup link
if (! function_exists ( "eulite_comment_link" ) ):

    function eulite_comment_link(){
        
        comments_popup_link( __( 'No comments', 'eulite' ) , '1 comment', '% comments', 'comments-link', 'Comments Off' );
        
    }

endif;

// Show post edit link
if (! function_exists ( "eulite_edit_link" ) ):

    function eulite_edit_link(){
        $post_edit_link = esc_url( get_edit_post_link() );

        echo sprintf ( __( '<a href="%s">Edit</a>' , 'eulite' ) , $post_edit_link );
    }

endif;

// Show category lists 
if (! function_exists ( "eulite_meta_cat_list" ) ):

    function eulite_meta_cat_list(){
		//$separate_meta = __( '', 'eulite' );
		$categories_list = get_the_category_list();
        
        //echo  $categories_list;
        echo get_the_category_list();
    }

endif;

// Show tag list
if (! function_exists ( "eulite_meta_tag_list" ) ):

    function eulite_meta_tag_list(){
		//$separate_meta = __( '', 'eulite' );
		$tag_list = get_the_tag_list();
        
        //echo $tag_list;
        echo get_the_tag_list();
    }

endif;