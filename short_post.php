<?php
add_filter( 'excerpt_length', function(){
    return 15;
} );
add_filter('excerpt_more', function($more) {
    return '...';
});


// длина заголовка
function trim_title_chars($count, $after) {
    $title = get_the_title();
    if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
    else $after = '';
    echo $title . $after;
}