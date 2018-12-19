// Keyboard next/previous page, copy from deprecated WordPress plugin (forget name)
// This script use WordPress permalinks, so I cannot use external JS file.   

document.onkeydown = function (e) {
    var e = e || event, 
    keycode = e.which || e.keyCode; 
			//left
			//numpad 4
			//previous post
    if (keycode == 100)
        location = "<?php echo esc_html( get_permalink(get_adjacent_post(false,'',false))) ?>";
			//right
			//numpad 6
			//next post
    if (keycode == 102)
        location = "<?php echo esc_html( get_permalink(get_adjacent_post(false,'',true))); ?>";
}