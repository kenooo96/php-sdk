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