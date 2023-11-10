<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div id="wrapper">
            <video id="video" autoplay muted playsinline></video>
            <canvas id="camera-canvas"></canvas>
            <canvas id="rect-canvas"></canvas>
            <span id="qr-msg">QR</span>
            <!-- <span id="getstring">取得できていないです</span>
            <span>製品名</span>
            <span id="text1">製品名とれていない</span>
            <span id="text2">QR</span>
            <span id="text3">QR</span> -->

        </div>
        <!-- <div>
            <p>取得した文字列</p>
            <p id=getstring>取得できていないです</p>
            <p>製品名</p>
            <p id="text1"></p>
            <p>商品名称</p>
            <p id="text2"></p>
            <p>シリアルNo.</p>
            <p id="text3"></p>
        </div> -->

        
        <script src="{{ asset('/js/jsQR.js') }}"></script>
        <script src="{{ asset('/js/script.js') }}"></script>
        
    <!-- QRコードの情報取得 -->
    
   
    

</body>
</html>