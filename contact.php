<?php
if(isset($_POST['name']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $to = 'tuyijeremie2000@gmail.com';
    $subject = "New Information";
    $body = '<html>
                <body>
                    <p> Name: '.$name.'  </p> </br>
                    <p> Email: '.$email.' </br> </p> </br>
                    <p> Message: </br> '.$message.' </br> </p>
                </body>
             </html>';


    $headers = "From: ".$name." <".$email. ">\r\n";
    $headers .= "Reply-To: ".$email."\r\n"; 
    $headers .= "MINE-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8";
    $send = mail($to, $subject , $body, $headers);
    if($send){
        echo '<br>';
        echo 'Thank for contacting US!';
    }else{
        echo 'error';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link rel="icon" type="image/x-icon" href="./favicon/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <style id="et-builder-googlefonts-cached-inline">/* Original: https://fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Sen:regular,700,800&#038;subset=latin,latin-ext&#038;display=swap *//* User Agent: Mozilla/5.0 (Unknown; Linux x86_64) AppleWebKit/538.1 (KHTML, like Gecko) Safari/538.1 Daum/4.1 */@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 100;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R8WXZ0ow.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 200;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR9WXZ0ow.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq_p9WXZ0ow.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXZ0ow.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq5Z9WXZ0ow.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq3p6WXZ0ow.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq0N6WXZ0ow.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR6WXZ0ow.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqw16WXZ0ow.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 100;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Xw3aX8.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 200;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr6Hw3aX8.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw3aX8.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw3aX8.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw3aX8.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w3aX8.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w3aX8.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr73w3aX8.ttf) format('truetype');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvC73w3aX8.ttf) format('truetype');}@font-face {font-family: 'Sen';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/sen/v5/6xKjdSxYI9_3kvWI.ttf) format('truetype');}@font-face {font-family: 'Sen';font-style: normal;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/sen/v5/6xKudSxYI9__J9CYI0vx.ttf) format('truetype');}@font-face {font-family: 'Sen';font-style: normal;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/sen/v5/6xKudSxYI9__O9OYI0vx.ttf) format('truetype');}/* User Agent: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0 */@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 100;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R8WXZ0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 200;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR9WXZ0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq_p9WXZ0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXZ0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq5Z9WXZ0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq3p6WXZ0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq0N6WXZ0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR6WXZ0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqw16WXZ0oA.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 100;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Xw3aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 200;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr6Hw3aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw3aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw3aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw3aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w3aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w3aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr73w3aXw.woff) format('woff');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvC73w3aXw.woff) format('woff');}@font-face {font-family: 'Sen';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/sen/v5/6xKjdSxYI9_3kvWL.woff) format('woff');}@font-face {font-family: 'Sen';font-style: normal;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/sen/v5/6xKudSxYI9__J9CYI0vy.woff) format('woff');}@font-face {font-family: 'Sen';font-style: normal;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/sen/v5/6xKudSxYI9__O9OYI0vy.woff) format('woff');}/* User Agent: Mozilla/5.0 (Windows NT 6.3; rv:39.0) Gecko/20100101 Firefox/39.0 */@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 100;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R8WXZ0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 200;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR9WXZ0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq_p9WXZ0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq6R9WXZ0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq5Z9WXZ0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq3p6WXZ0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jq0N6WXZ0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqyR6WXZ0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: italic;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUFjIg1_i6t8kCHKm459Wx7xQYXK0vOoz6jqw16WXZ0pg.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 100;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Xw3aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 200;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr6Hw3aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 300;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCs16Hw3aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtr6Hw3aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 500;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCtZ6Hw3aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 600;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCu173w3aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCuM73w3aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvr73w3aXo.woff2) format('woff2');}@font-face {font-family: 'Montserrat';font-style: normal;font-weight: 900;font-display: swap;src: url(https://fonts.gstatic.com/s/montserrat/v23/JTUHjIg1_i6t8kCHKm4532VJOt5-QNFgpCvC73w3aXo.woff2) format('woff2');}@font-face {font-family: 'Sen';font-style: normal;font-weight: 400;font-display: swap;src: url(https://fonts.gstatic.com/s/sen/v5/6xKjdSxYI9_3kvWN.woff2) format('woff2');}@font-face {font-family: 'Sen';font-style: normal;font-weight: 700;font-display: swap;src: url(https://fonts.gstatic.com/s/sen/v5/6xKudSxYI9__J9CYI0v0.woff2) format('woff2');}@font-face {font-family: 'Sen';font-style: normal;font-weight: 800;font-display: swap;src: url(https://fonts.gstatic.com/s/sen/v5/6xKudSxYI9__O9OYI0v0.woff2) format('woff2');}</style>
    <link
      rel="stylesheet"
      href="./font-awesome-4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="./CSS/index.css">
    <!-- <link rel="stylesheet" href="./CSS/styles.css" /> -->
    
    <title>Accueil</title>
  </head>
  <body>
    <header style="margin-bottom: 3vw; " >
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top justify-content-center">
        <div class="container-fluid">
          <a class="navbar-brand" href="./index.html"
            ><img
              src="./images/projectLogo.png"
              alt="project-logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="./index.html" 
                  >Accueil</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="./index.html#link-mot-du-gouverneur"
                  >Mot du Gouverneur</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="./index.html#zone"
                  >Nos Zones</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="./index.html#nous-decouvrir"
                  >Nous Découvrir</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link"
                  href="./index.html#contactez-nous"
                  >Nous Contacter</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link me-md-3 px-2"
                  href="./convention.html"
                  style="
                    color: #ffcf06;
                    border: 1px solid #0d2240;
                    border-radius: 10px;
                    background-color: #0d2240;
                    padding-right: me-md-3;
                  "
                  class="navLinkDistrict"
                  >Convention District</a
                >
              </li>
              <li class="nav-item dropdown">
                <div id='google_translate_element'></div>
                    <script>
                    function googleTranslateElementInit() {
                    new google.translate.TranslateElement({
                    pageLanguage: 'un',
                    autoDisplay: 'true',
                    includedLanguages : 'en,fr',
                    layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL
                    }, 'google_translate_element');
                    }
                    </script>
                    <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>  
              </li>
                </ul>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <main>

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner rounded">
          <div class="carousel-item active">
            <img src="./images/carausell/1.png" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5 >Ensemble, Nous servons</h5>
              <p class="d-none d-md-block"> Plus que la somme de nos actions collectives, le service est la source qui irrigue notre cœur. Lions et Leos, nous servons pour inspirer, équiper et transformer le monde qui nous entoure. Nous croyons que même les plus grands défis peuvent être surmontés par la force de la bienveillance.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/carausell/2.png" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>La générosité : l’action</h5>
              <p class="d-none d-md-block"> Des personnes bienveillantes se regroupent, se retroussent les manches et passent à l’action en montant des actions qui améliorent la qualité de leur communauté.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/carausell/3.png" class="d-block w-100" alt="..." style="width: 900px;">
            <div class="carousel-caption">
              <h5>Témoignages de service</h5>
              <p class="d-none d-md-block">Chaque Lion et chaque club transforment des vies à leur façon, à grande échelle ou plus localement. Le service est un parcours personnel dont les effets résonnent sur celui qui en fait don comme sur celui qui en bénéficie. Voici leurs histoires en première ligne du service.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/carausell/4.png" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5 class="car-special">Donnez aux lions les moyens de vous servir</h5>
              <p class="d-none d-md-block">La Fondation du Lions Clubs International (LCIF) est votre Fondation pour le bien. En donnant, vous amplifiez l’action des Lions dans le monde entier.</p>
            </div>
          </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- first section speech of gouvener-->
      <section  id="link-mot-du-gouverneur">
        <div class="mot">
          <h3 >Mot du Gouverneur</h3>
          <br>
          <div>
            <img src="./images/govern-modified.png" alt="gouverneur" id="gvr" />
          </div>
          <div class="block-mot">
            <h2>Soyons unis dans l'Amitie et le service.</h2>
            <br>
            <blockquote>
              Le “Service Lions” est une des formes de la solidarité humaine consciente, qui ne peut s’exercer que dans un climat de liberté, et exige de ceux qui la pratique qu’ils fassent preuve de compréhension, de tolérance et d’esprit de paix. <br>
J’invite tous les lions du District 409 à se joindre à moi au cours des douze mois que nous vivrons ensemble pour encourager l’amitié véritable et sincère dans les clubs.
              <br><br>
              <div class="inner-btton">
                <a href="./motDuGouverneur.html">Lire la suite</a>
              </div>
            </blockquote>
          </div>
          
        </div>
      </section>
      <section  id="zone">
        <br>
        <h3 class="section-header" style="text-align: center;">Nos Zones</h3>
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 g-4 zone-info">
          <div class="col">
            <div class="card">
              <!-- <img src="./img/Business-man-1.png" class="card-img-top" alt="..."> -->
              <h5 class="card-title">Zone Kinshasa</h5>
              <div class="card-body">
                <p class="card-text">
                  Zone Kinshasa est composé de 5 Clubs : <br> <br>

                 <p style="text-align: left; margin-left: 30px;">
                  - Kinshasa Kin Malebo <br>
                  - Kinshasa Lipopo <br>
                  - Kinshasa Tshangu Mwinda <br>
                  - Kinshasa Bankoko <br>
                  - Kinshasa Bondeko
                  </p>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <!-- <img src="./img/Business-man-1.png" class="card-img-top" alt="..."> -->
              <h5 class="card-title">Zone Kongo Central</h5>
              <div class="card-body">

                <p class="card-text">
                  Zone Kongo Central est composé de 3 Clubs :  <br> <br>

                 <p style="text-align: left; margin-left: 16px;">
                  - Boma Baobab   </br>
                  - Lukaya Cataractes   </br>
                  - Matadi Vivi   </br>
                  </p>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <!-- <img src="./img/Business-man-1.png" class="card-img-top" alt="..."> -->
              <h5 class="card-title">Zone Lubumbashi</h5>
              <div class="card-body">
                <p class="card-text">
                  Zone Lubumbashi est composé de 5 Clubs :  <br> <br>

                 <p style="text-align: left; margin-left: 24px;">
                  - Lubumbashi Amani  </br>
                  - Lubumbashi Doyen  </br>
                  - Lubumbashi Jacaranda  </br>
                  - Lubumbashi Maadini  </br>
                  - Lubumbashi Mampala  </br>
                  </p>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <!-- <img src="./img/Business-man-1.png" class="card-img-top" alt="..."> -->
              <h5 class="card-title">Zone Sud</h5>
              <div class="card-body">
                <p class="card-text">
                  Zone Sud est composé de 3 Clubs :  <br> <br>

                 <p style="text-align: left; margin-left: 50px;">
                  - Likasi Mukuba </br>
                  - Kolwezi Kitumaini </br>
                  - Kalemi Tanganyika </br>
                  </p>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <!-- <img src="./img/Business-man-1.png" class="card-img-top" alt="..."> -->
              <h5 class="card-title">Zone Centre</h5>
              <div class="card-body">
                <p class="card-text">
                  Zone Centre est composé de 2 Clubs :  <br> <br>

                 <p style="text-align: left; margin-left: 41px;">
                  - Luputa Mbuy A Ciow  </br>
                  - Muene Ditu  </br>
                  </p>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <!-- <img src="./img/Business-man-1.png" class="card-img-top" alt="..."> -->
              <h5 class="card-title">Zone Est</h5>
              <div class="card-body">
                <p class="card-text">
                  Zone Est  est composé de 6 Clubs :  <br> <br>

                 <p style="text-align: left; margin-left: 54px;">
                  - Bujumbura </br>
                  - Bukavu  </br>
                  - Bukavu Uwezo Campus </br>
                  - Goma Gisenyi  </br>
                  - Kigali  </br>
                  - Uvira </br>
                  </p>
                </p>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card">
              <!-- <img src="./img/Business-man-1.png" class="card-img-top" alt="..."> -->
              <h5 class="card-title">Zone Nord</h5>
              <div class="card-body">
                <p class="card-text">
                  Zone Nord est composé de 5 Clubs :  <br> <br>

                 <p style="text-align: left; margin-left: 45px;">
                  - Bunia </br>
                  - Isiro </br>
                  - Butembo </br>
                  - Béni  </br>
                  - Kisangani Boyoma  </br>
                  </p>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- start of nous decouvrir -->
      <section id="nous-decouvrir">
        <br>
        <h3 class="section-header">Nous découvrir</h3>
      <!--  Notre-histoire-->
      <div class="cont histoire home-notre-history" style="margin-bottom: 10px; margin-top: 10px;">
        <div class="row">
          <div class="col-md-auto logo-image">
            <img src="./images/projectLogo.png" alt="" style="margin-top: 30px;">
          </div>
          <div class="col par-edit div-margin">
            <h5>Notre histoire</h5>
              <p>
                Les Lions servent. <br />
                Un concept simple depuis notre création en 1917. Nos clubs
                regroupent des hommes et des femmes qui donnent leur temps et
                leurs efforts pour répondre aux problèmes localement et dans le
                monde. Notre histoire est longue. Et nous en sommes fiers. Nous
                servons depuis plus de 100 ans avec une extraordinaire
                générosité, en faisant passer en premier les besoins de nos
                voisins, de nos villes et du monde. Nous sommes fiers de notre
                riche passé et nous savons que ce n’est que le début. Chaque
                jour, nous perpétuons notre héritage avec pour objectif d’avoir
                un impact encore plus fort à l’avenir.
              </p>
              <a href="./notreHistory.html" >En savoir plus</a>
          </div>
        </div>
      </div>
      <!-- Devenir-member-lions -->
      <div class="cont histoire home-devenir-member intra-member-devenir" style="margin-bottom: 10px; margin-top: 40px;">
        <div class="row">
          <div class="col-md-auto logo-image lion">
            <img src="./images/projectLogo.png" alt="">
          </div>
          <div class="col div-margin">
            <h5>Devenir membres</h5>
              <br />
              <h6 class="sub-title-devenir">Lions</h6>
              <br />
              <p>
                Les Lions servent. <br />
                Un concept simple depuis notre création en 1917. Nos clubs
                regroupent des hommes et des femmes qui donnent leur temps et
                leurs efforts pour répondre aux problèmes localement et dans le
                monde. Notre histoire est longue. Et nous en sommes fiers. Nous
                servons depuis plus de 100 ans avec une extraordinaire
                générosité, en faisant passer en premier les besoins de nos
                voisins, de nos villes et du monde. Nous sommes fiers de notre
                riche passé et nous savons que ce n’est que le début. Chaque
                jour, nous perpétuons notre héritage avec pour objectif d’avoir
                un impact encore plus fort à l’avenir.
              </p>
              <a href="./membreLions.html">En savoir plus</a>
          </div>
        </div>
        <br><br><br><br><br><br>
        <!-- Devenir-memberes-Leo -->
        <div class="row">
          <div class="col-md-auto logo-image leo ">
            <img src="./images/Logo_rgb_Leo_2C-1.png" alt="">
          </div>
          <div class="col div-margin">
            <h6 class="sub-title-devenir">Leo</h6>
              <br />
              <p>
                Là où il y a un besoin, il y a un Leo <br />
                « Leadership, Expérience, Opportunité.» C'est ce qui fait un
                Leo. Les membres des Leo clubs incarnent les qualités les plus
                remarquables de notre organisation de par leur engagement et
                leur conscience de la force de l’action. Leos et Lions forment
                aujourd’hui un partenariat solide au sein duquel les Lions
                bénéficient des perspectives innovantes des Leos, et les Leos de
                stratégies éprouvées, au service du bien dans le monde depuis
                des décennies. Les Leos font avancer les choses
              </p>
              <a href="./membreLeo.html">En savoir plus</a>
          </div>
        </div>
      </div>
      <!-- Nos Leaders -->
      <div class="cont mondiales" style="margin-bottom: 10px; margin-top: 40px;">
        <div class="row">
          <div class="col">
            <h5>Nos Leaders</h5>
            <p>
              En tant que Lions, nos actions et notre service inspirent les
              autres. Nous apportons courage et un unique sens
              d’autonomie à nos communautés, localement et dans le monde. Pour
              cela, nous nous appuyons sur des dirigeants
              expérimentés et sur une formation solide de nos membres.
            </p>
              <a href="./leaders.html">En savoir plus</a>
          </div>
        </div>
      </div>
      <!-- Nos-causes-mondiales -->
      <div class="cont mondiales" style="margin-bottom: 40px; margin-top:40px;">
        <div class="row">
          <div class="col">
            <h5>Nos Causes mondiales</h5>
            <p>
              Chaque voyage commence par un simple pas. Un acte de service, un
              mot d’encouragement, un geste généreux suffit souvent à redonner
              espoir aux plus démunis. Depuis 100 ans, la générosité des Lions
              et des Leos s’est multipliée au-delà des frontières, des océans et
              des continents. Avec aujourd’hui plus de 1,4 million de membres,
              nous pouvons faire une vraie différence dans le monde. C’est
              pourquoi nous concentrons notre action sur cinq domaines de
              service prioritaires. Ces causes mondiales posent des défis
              importants pour l’humanité et nous pensons qu’il nous revient
              aujourd’hui d’y faire face.
            </p>
              <a href="./couses-mondiale.html" >En savoir plus</a>
          </div>
        </div>
      </div>
      </section>
      
      <!-- District structure start from here! -->

      <div class="container-table">
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 table-info">
          <div class="col div-1">
            <h2>Les données du District 409</h2>
             <p>Quelques chiffres sur l’état actuel du D409</p> 
          </div>
          <div class="col div-2">
            <table class="table-format">
              <tr>
                <td  class="animate__animated animate__backInLeft">
                  <p>3</p>
                  <p class="content">Pays</p>
                </td>
                <td  class="animate__animated animate__backInRight">
                  <p>7</p>
                  <p  class="content">Zones</p>
                </td>
              </tr>
              <tr>
                <td class="animate__animated animate__backInLeft">
                  <p>29</p>
                  <p class="content">Clubs Lions</p>
                </td>
                <td  class="animate__animated animate__backInRight">
                  <p>9</p>
                  <p class="content">Clubs Leo Oméga</p>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <!-- function to trigger on view -->
      <script>
        function revealLeft() {
          var reveals = document.querySelectorAll(".animate__animated");
          for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            if(i ==0  || i==2){
              if (elementTop < windowHeight) {
              reveals[i].classList.add("animate__backInLeft");
              } else {
                reveals[i].classList.remove("animate__backInLeft");
              }
            }
            else{
              if (elementTop < windowHeight) {
              reveals[i].classList.add("animate__backInRight");
              } else {
                reveals[i].classList.remove("animate__backInRight");
              }
            } 
          }
        }
        window.addEventListener("scroll", revealLeft);
      </script>
      <!-- end of district -->
      <section  id="contactez-nous">
        <div class="cont" >
          <h3 class="section-header" id="contact">Contactez nous</h3>
          <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 ">
            <div class="col image-holder" style="margin-top: -40px;">
              <img src="./images/contact.jpeg" alt="photo" id="email-photo" />
            </div>
            <div class="col">
              <form action="./contact.php" method="post"
              style="border: none;"
              > 
                <input
                  type="text"
                  name="name"
                  id="name"
                  placeholder="Nom"
                  required
                /> <br>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email"
                    required
                  /> <br>
                <textarea
                  name="message"
                  id="message"
                  cols="30"
                  rows="10"
                  placeholder="Message"
                  required style="border-radius: 10px; margin-left: 10px; margin-bottom: 35px;background: rgb(247 247 247);"
              ></textarea>
              <br>
              <button type="submit" onclick="Convert_HTML_To_PDF();" class="envoye-btn" id="envoye">Envoyez</button>
              </form>
            </div>
          </div>
        </div>
      </section>
      
    </main>
   
<footer class="footer" style="overflow-x: hidden;">
  <div class="container">
    <div class="row">
   <div class="footer-col">
     <div class="footer-logo">
      <a href="./index.html"><img src="./images/projectLogo.png" alt="leo-log" style="width: 90px;"></a>
      </div>
      </div>
      <div class="footer-col">
        <h4>Menu</h4>
        <ul>
          <li><a href="./index.html#link-mot-du-gouverneur">Mot du Gouverneur</a></li>
          <li><a href="./index.html#zone">Nos Zones </a></li>
          <li><a href="./index.html#nous-decouvrir">Nous Decouvrir</a></li>
          <li><a href="./index.html#contactez-nous">Nous Contactez</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Nos Zones</h4>
        <ul>
          <li><a href="./index.html#zone">Zone Kinshasa</a></li>
          <li><a href="./index.html#zone">Zone Kongo Central</a></li>
          <li><a href="./index.html#zone">Zone Lubumbashi</a></li>
          <li><a href="./index.html#zone">Zone Sud</a></li>
          <li><a href="./index.html#zone">Zone Centre</a></li>
          <li><a href="./index.html#zone">Zone Est</a></li>
          <li><a href="./index.html#zone">Zone Nord</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Telephone</h4>
        <ul>
          <li><a href="#"><i class="fa fa-phone fa-lg"></i>+243813907272</a></li>
          <li><a href="#"><i class="fa fa-phone fa-lg"></i>+243990260596</a></li>
          <li><a href="#"><i class="fa fa-phone fa-lg"></i>+243897775922</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Email</h4>
        <ul>
          <li><a href="mailto:info@lions-d409.org "><i class="fa fa-envelope-o fa-lg"></i> info@lions-d409.org </a></li>
        </ul>
        <!-- <div class="social-links">
          <a href="#"><i class="fa fa-envelope-o fa-lg"></i></a>
        </div> -->
      </div>
      <div class="footer-col">
     <div class="leo-logo">
     <a href="./index.html"><img src="./images/Logo_rgb_Leo_2C-1.png" alt="leo-log" style="width: 110px;margin-top: -25px;"></a>
     </div>
    </div>
    </div>
  </div> 

  <div class="copyright"> <hr> &copy; Copyright 2022 Lions Club District 409</div>
</footer>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
      integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
      crossorigin="anonymous"
    ></script>
  </body>
</html>