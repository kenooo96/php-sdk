https://www.facebook.com/dialog/oauth?
     client_id=223402631035930&redirect_uri=http://apps.facebook.com/djremixradio/
<?php 

         $app_id = "YOUR_APP_ID";

         $canvas_page = "YOUR_CANVAS_PAGE_URL";

         $message = "Would you like to join me in this great app?";

         $requests_url = "http://www.facebook.com/dialog/apprequests?app_id=" 
                . $app_id . "&redirect_uri=" . urlencode($canvas_page)
                . "&message=" . $message;

         if (empty($_REQUEST["request_ids"])) {
            echo("<script> top.location.href='" . $requests_url . "'</script>");
         } else {
            echo "Request Ids: ";
            print_r($_REQUEST["request_ids"]);
         }
?>
<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2Fdjremixradiocomba%2F125435424211085&amp;width=292&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=true&amp;header=true&amp;height=427" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:427px;" allowTransparency="true"></iframe>