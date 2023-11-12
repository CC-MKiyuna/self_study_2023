<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
    <section class="QR" >
        <div class="container" >
            <div class="content" >
                <video id="video" autoplay muted playsinline></video>
                <canvas id="camera-canvas"></canvas>
                <canvas id="rect-canvas"></canvas>
                <span id="qr-msg">QR</span>
            </div>
        </div>
    </section>
    <section class="product" >
        <div class="container" >
            <div class="content" >
                <p id="text1">製品名とれていない</p>
                <p id="text2">商品名称とれていない</p>
                <p id="text3">シリアルコードとれていない</p>
                
            </div>
        </div>
    </section>
                   
    <script src="{{ asset('/js/jsQR.js') }}"></script>
    <script src="{{ asset('/js/script.js') }}"></script>
        
    </body>
</html>