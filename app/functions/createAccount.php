<?php
function createAccount($data)
    {
        $url = 'http://localhost/SandWEches-user/app/api/API/user/registration.php';

        $curl = curl_init($url);    //inizializza una nuova sessione di cUrl
                                    //Curl contiene il return del curl_init 

        curl_setopt($curl, CURLOPT_URL, $url);              // setta l'url 
        curl_setopt($curl, CURLOPT_POST, true);             // specifica che è una post request
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);   // ritorna il risultato come stringa


        $headers = array(
            "Content-Type: application/json",
            "Content-Lenght: 0",
        );

        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

        $responseJson = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($responseJson);
        
        if($response->message == "1")
        {
            header('Location: index.php');
        }
        else
        {
            return -1;
        }
    }
?>