<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class FcmController extends Controller
{
    public function sendAll($title=null,$body=null,$image=null,$token=null)
    {
       
        $msg = array
        (
          "title" => $title,
          "body" => $body,
          "image" => $image,
          "click_action" =>  "FLUTTER_NOTIFICATION_CLICK"
        );


  $server_key = "AAAAlaZy2nA:APA91bERvHjCF6v1TeJGMVMsfdWkf7-2LK1TZFbPRxa4f_Qib1zR7gnGcApxXslHZBroGZdnSct9uW5-RQ4wvF5b6TthPV3zKzSRVRWPu8D0enmSsLZAIg_zlHBwXOzouG9AVrglv8Tp";

  $headers = [
      'Authorization' => 'key='.$server_key,
      'Content-Type'  => 'application/json',
  ];
  $fields = [
      'notification'  => $msg,
              "registration_ids" => $token
  ];

  $fields = json_encode ( $fields );
  
  $client = new Client();
  try{
      $request = $client->post("https://fcm.googleapis.com/fcm/send",[
          'headers' => $headers,
          "body" => $fields,
      ]);
      $response = $request->getBody();
      return 'ok';
  }
  catch (Exception $e){
      return 'error';
  }
    }
}
