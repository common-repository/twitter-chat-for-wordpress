<?php
/*
Plugin Name: Twitter Chat
Plugin URI: https://www.itweetlive.com/
Description: Enable Twitter Chat
Author: https://www.itweetlive.com/
Version: 1
*/
add_filter( "the_content", "tchat" ); 
function tchat($content){
	?>
<style type="text/css">iframe#ITweetLiveChat { border: medium none;bottom: 0;height:400px;position: fixed;right: 20px;width: 410px;z-index: 3000;}</style>
<iframe id="ITweetLiveChat" src="http://itweetlive.com/widget1.aspx?hostingclient=DevAffair"></iframe>
    <?php
	return($content);
}
?>