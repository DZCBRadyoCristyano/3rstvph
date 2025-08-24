<?php
// Send proper content-type header
header('Content-Type: text/html; charset=UTF-8');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>3RS TV ... HOME</title>
  <style>
    html, body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      background: #000;
    }

    iframe {
      width: 100vw;
      height: 100vh;
      border: none;
      display: block;
    }
  </style>
  <script>
    // Disable right-click and common keys for inspection
    document.addEventListener("contextmenu", (e) => e.preventDefault());
    document.addEventListener("keydown", (e) => {
      if (
        e.key === "F12" ||
        (e.ctrlKey && e.shiftKey && ["I", "J", "C"].includes(e.key)) ||
        (e.ctrlKey && e.key === "U")
      ) {
        e.preventDefault();
      }
    });
  </script>
</head>
<body>
  <iframe src="https://3rstv.weebly.com/" allowfullscreen></iframe>
</body>
</html>
