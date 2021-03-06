<?php

session_start();

$data = array('hello' => 'Prova di Broadcast!');

// The recipient registration tokens for this notification
// https://developer.android.com/google/gcm/    
$ids ='APA91bFuxSo3b80E537ewVZqSOsfz5yVf7JbfMw0HxVWmQ4C15oQt1C5vRlOtqM_3PiobWFT3ThyoXqgHwq2ErRt9j2jlFNF5TNTt4yG7QtdgUxw2hTlguc';

// Send push notification via Google Cloud Messaging
sendPushNotification($data, $ids);

function sendPushNotification($data, $ids)
{
    // Insert real GCM API key from the Google APIs Console
    // https://code.google.com/apis/console/        
    $apiKey = 'AIzaSyAGv4oDUfJfhaAm_TGpnrEPnYEyOLnqnBk';

    // Set POST request body
    $post = array(
                    'to'  => $ids,
                    'data'              => $data,
                 );

    // Set CURL request headers 
    $headers = array( 
                        'Authorization: key=' . $apiKey,
                        'Content-Type: application/json'
                    );

    // Initialize curl handle       
    $ch = curl_init();

    // Set URL to GCM push endpoint     
    curl_setopt($ch, CURLOPT_URL, 'https://gcm-http.googleapis.com/gcm/send');

    // Set request method to POST       
    curl_setopt($ch, CURLOPT_POST, true);

    // Set custom request headers       
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Get the response back as string instead of printing it       
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Set JSON post data
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($post));

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