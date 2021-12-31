<?php
    function post_excerpt_length( $excerpt ) {

        if( has_excerpt() ){
            $length = wp_trim_words( get_the_excerpt(), apply_filters( "excerpt_length",30 ));
        }

        return $length;
    }

    add_filter( 'the_excerpt', 'post_excerpt_length' );

    function meta_description() {
        echo '<meta name="description" content="This is the description">';
    }
    
    add_action( 'wp_head', 'meta_description' );

   
    function display_table() {
       echo  '<table>
       <tr>
       <th>Name</th>
       <th>Age</th>
       <th>Grade</th>
       </tr>
       <tr>
       <td>Bikram Chand</td>
       <td>20</td>
       <td>A</td>
       </tr>
       <tr>
       <td>Mithun Chand</td>
       <td>12</td>
       <td>A+</td>
       </tr>
       </table>';
    }

    do_action( 'custom_hook' );
    add_action( 'custom_hook', 'display_table' );

    
    function  custom_filter( $message ) {
        return $message;
    }
    add_filter( 'hook_next', 'custom_filter' );
 
