<!DOCTYPE html>      
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- <link rel="stylesheet" href="{{ asset('/css/style.css')  }}" > -->
    
<title>newbook</title>
</head>
<body>
    <div class="container-sm"> 
    <h1 class="display-3">ミドルウェアでバリデーションチェック <h1> 

    <div class="p-5">
    <table class="table">
        <form method="patch" action="{{ route('middleware.validation') }}">
            @csrf
            @method('patch')
        <tr>  
            <td>グループ</td>
            <td><input class="form-control" type="text" name="group" ></td>
        </tr>
        <tr>
            <td >ユーザー名</td>
            <td><input class="form-control" type="text" name="user_name" ></td>
        </tr>
        <tr>
            <td><input type="submit" class="btn btn-outline-dark" value="ログイン"></td>
        </tr>
        <tr>
                {{ session()->get('error') }}
        </tr>   
    </form>
    </table>
    </div> 
    </div>
</body>
</html>