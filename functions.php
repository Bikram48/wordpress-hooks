<?php
    function post_excerpt_length( $excerpt ) {

        if( has_excerpt() ){
            $excerpt = wp_trim_words( get_the_excerpt(), apply_filters( 'my_theme_set_excerpt_length',30 ));
        }

        return $excerpt;
    }

    add_filter( 'the_excerpt', 'post_excerpt_length' );
    add_filter( 'my_theme_set_excerpt_length', 'callback');
    function callback() {
        return 10;
    }

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

    add_action( 'custom_hook', 'display_table' );

    
    function  custom_filter( $message ) {
        return $message;
    }
    add_filter( 'hook_next', 'custom_filter' );

    add_filter ( 'display_gender_message', function( $gender ) {
        $message = "";
        if ( $gender == 'female' ) {
            $message .= "User is female";
        }

        if( $gender == 'male' ) {
            $message .= "User is male";
        }
        
        return $message;
    } );

    
    function change_dashboard_footer_text ( $text ){
        return "Welcome to Bikram's dashboard";
    }

    add_filter ( 'admin_footer_text',  'change_dashboard_footer_text');

    
