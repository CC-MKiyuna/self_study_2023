<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- <link rel="stylesheet" href="/css/style.css"> -->
    </head>
    <body>
        <p id="error">資料を選択してください</p>        
        <form action="document_image"  method="POST" enctype="multipart/form-data">
            @csrf
            <input id="inputQRCode" type="file" name="image"  multiple >
            <input id="img_upload" type="button" value="画像から製品情報を読み込む"/>
        </form>

        
        <table>
            <tr>
                <th><p>製品名</p></th>
                <td><p id="product"></p></td>
            </tr>
            <tr>
                <th><p>型番</p></th>
                <td><p id="product_number"></p></td>
            </tr>
            <tr>
                <th><p>シリアルNo.</p></th>
                <td><p id="serial_number"></p></td>
            </tr>
        </table>
        
        
        
          
        <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script>
        <script src="{{ asset('/js/jsQR.js') }}"></script>
        <script src="{{ asset('/js/split.js') }}"></script>        
    </body>
    </html>
    