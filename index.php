<!DOCTYPE html>
<html>
<head> <title> V-Meet - A simple video chat app</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script type='text/javascript' src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <style>
    body {
      background: mediumseagreen;
      display: flex;
      height: 100vh;
      margin: 20;
      align-items: center;
      justify-content: center;
      padding: 0 50px;
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    }
    video {
      background: white;
      background-image: url (<img src="images\InShot_20210824_233400856.jpg");
      background-repeat: no-repeat;
      background-position: center;
      background-size: contain;
      max-width: calc(70% - 70);
      margin: 0 10%;
      box-sizing: border-box;
      border-radius: 15px;
      padding: 10;
    }
    .copy {
      position: fixed;
      top: 80px;
      left: 50%;
      transform: translateX(-60%);
      font-size: 15px;
      color: white;
    }
    .copy2 {
      position: fixed;
      top: 25px;
      left: 37%;
      transform: translateX(-20%);
      font-size: 40px;
      color: white;
      font-family:
    }
  </style>
</head>
<body>
<div class="container">
  <div class="copy2"> V-Meet  - A simple video chatting app
  </div>
  <div class="copy">Send your URL to a friend to start a video call
  </div>

  <video id="localVideo" autoplay muted></video>
  <video id="remoteVideo" autoplay></video>
  <script src="script.js"></script>
  <hr></hr>
  <footer> <p align="bottom" color="white">Created By:- <a href="https://www.instagram.com/anmolukey07/">@anmolukey07</a>
      </p>
     <img src="images\InShot_20210824_233400856.jpg" width="150" align="center" >
    </footer>
</body>
</html>
