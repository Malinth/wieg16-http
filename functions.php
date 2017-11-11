<?php
// Uppgift 4
    //"HTTP/1.0 404 Not Found"
    // Standardkoden är 200, skrivs inget så skrivs ändå den ut
    function status_header($code = 200) {
        $messages = [
            200 => "OK",
            302 => "Moved temporarily",
            404 => "404 Not Found"
        ];
        header ( "HTTP/1.0 " . $code . " " . $messages[$code]);
    
    }

    // För att hämta ut status_header skriv in vilken
    status_header(302);

    // Uppgift 5
    // [header => värde ]
    // Connection: Keep-Alive
    // header("Connection: Keep-Alive");

    function headers (array $headers = []) {
        foreach ($headers as $header => $value) {
            
            header ( "$header: $value"); //för att hämta ut och skriva ut i header tillsammans med :
        }
    }
    headers(); //För att hämta headers
    headers([ // en array i headers funktionen
        "Connection" => "Keep-Alive",
        "No-Connection" => "Try-Again",
        "Loading" => "Waiting-Still",
        "AlmostConnection" => "Keep-Waiting",
    ]);



    // Uppgift 6

 function redirect ($url, $code = 302) {
    header('Location:' . $url, true, $code);
   }
   redirect("http://www.google.com");
