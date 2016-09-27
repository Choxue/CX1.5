<?php
	if ( $_POST['payload'] ) {
	  shell_exec( 'cd /usr/share/nginx/CX1.5/ && git reset --hard HEAD && git pull && rm -r /usr/share/nginx/CX1.5/langcache/*' );
	}
?>