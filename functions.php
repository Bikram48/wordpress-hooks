<?php
    function post_excerpt_length( $excerpt ) {
        
        if( has_excerpt() ){
            $length = wp_trim_words( get_the_excerpt(), apply_filters( "excerpt_length",30 ));
        }

        return $length;
    }

    add_filter( 'the_excerpt', 'post_excerpt_length' );