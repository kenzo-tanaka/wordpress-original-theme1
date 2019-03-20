<?php 

function add_user_contactmethods( $user_contactmethods ) {
    return array(
        'twitter' => 'TwitterのURL',
        'facebook'    => 'FacebookのURL',
        'instagram' => 'InstagramのURL',
        'feedly' => 'FeedlyのURL',
        'youtube' => 'YouTubeのURL',
    );
}
add_filter( 'user_contactmethods', 'add_user_contactmethods' );




