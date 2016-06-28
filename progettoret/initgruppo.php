<?php

session_start();

$ids =array('eUYwK2vGsfs:APA91bEXEr-BMp8C8QHDCo29x2fi5N5qXex5tMIbm3xomBfp9T4djFjVb6ky9XKhTdNVwjrerzcWA9EVaihM3Z-g_Sqo-6dDvfFsbxcrwgZvnsiWqOWeG85CTKeoSkacmeo7TNJBtxUL');


$data = array('operation' => 'create', 'notification_key_name' => 'aggiornamento', 'registration_ids' => $ids);

// The recipient registration tokens for this notification
// https://developer.android.com/google/gcm/    

// Send push notification via Google Cloud Messaging
sendPushNotification($data, $ids);

function sendPushNotification($data, $ids)
{
    // Insert real GCM API key from the Google APIs Console
    // https://code.google.com/apis/console/        
    $apiKey = 'AIzaSyAGv4oDUfJfhaAm_TGpnrEPnYEyOLnqnBk';


    // Set CURL request headers 
    $headers = array( 
                        'Authorization: key=' . $apiKey,
                        'Content-Type: application/json',
                        'project_id: 489289900200'
                    );

    // Initialize curl handle       
    $ch = curl_init();

    // Set URL to GCM push endpoint     
    curl_setopt($ch, CURLOPT_URL, 'https://android.googleapis.com/gcm/notification');

    // Set request method to POST       
    curl_setopt($ch, CURLOPT_POST, true);

    // Set custom request headers       
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Get the response back as string instead of printing it       
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Set JSON post data
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

	curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );

    // Actually send the request    
    $result = curl_exec($ch);

    // Handle errors
    if (curl_errno($ch))
    {
        echo 'GCM error: ' . curl_error($ch);
    }

    // Close curl handle
    curl_close($ch);

    // Debug GCM response       
    echo $result;
}

?>