<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PDFに申請情報を反映させよう！</h1>
    <form action="{{route(pdf.post)}}" method="POST" >
        <tr>
            <th>姓</th>
            <td><input type="text" name="last_naem"></td>
        </tr>
        <tr>
            <th>名</th>
            <td><input type="text" name="first_naem"></td>
        </tr>
        <input type="submit" value="申請">
    </form>
</body>
</html>