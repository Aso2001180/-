<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>NewUser</title>
    <link、k rel="icon"  type="image/x-icon" sizes="144*144" href="favicon.ico">
    <link rel="stylesheet" href="./css/style.css">
        <style>
            body{background-color:gray;}
            button{
                width: 80px;
                height:40px;
            }
        </style>
    </head>
<body>
<button  class="button" onclick=history.back()>戻る</button>
<div class = "nav">
    <div>
        <div class = "bgDiv">
            <div class = "taikai">
                <div class ="mokujii">
                    <h1>新規会員登録</h1>
                </div>
                <div class ="aav">
                    <div>
                        <div class="bbDiv">
                            <div class="dd">
                         Email:<br>
                            <input type="text" name="email" placeholder="メールアドレスを入力してください">
                            <br>
                         Username:<br>
                            <input type="text" width="200px" name="username" placeholder="お名前を入力してください">
                            <br>
                         Password:<br>
                            <input type="text" name="password" placeholder="パスワードを入力してください">
                            <br>
                                <br>
                            <button class="btn">登録</button>
                                <br>
                                <a class="oldUserLink" href="#" target="">すでに会員の方はこちらからログインしてください</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>