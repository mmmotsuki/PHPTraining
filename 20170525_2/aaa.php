<html>
<head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link rel="stylesheet" href="styles1.css">
<title>タイトル</title>
</head>

<body>
<div class="main">

<h1> お問い合わせ</h1>
<p class="sub">下記フォームに入力し、<span>確認ボタン</span>を押してください。</p>
<p class="sub"><span>※</span>の項目は必ず入力してください。</p>

<form action="otoiawasekakunin.php" method="get">

<div id="table">

    <div class="row">
        <div class="r1"> お名前<span>※</span> </div>
        <div class="r2">
            <label for="sei"></label>
            姓 <input id="sei" type="text" name="sei" value="" placeholder="山田" required>
            <label for="mei"></label>
            　名 <input id="mei" type="text" name="mei" value="" placeholder="太郎" required>
        </div>
    </div>

    <div class="row">
        <div class="r1"> 性別 </div>
        <div class="r2">
            <label for="man"><input id="man" type="radio" name="seibetu" value="男" checked>男</label>
            <label for="woman"><input id="woman" type="radio" name="seibetu" value="女">女</label>
            <label for="other"><input id="other" type="radio" name="seibetu" value="不明">不明</label>
        </div>
    </div>

    <div class="row">
        <div class="r1"> 住所 </div>
        <div class="r2">
            <label for="address"></label>
            <input id="address" type="text" name="address" value="" placeholder="東京都板橋区"></input>
        </div>
    </div>

    <div class="row">
        <div class="r1"> 電話番号<span>※</span> </div>
        <div class="r2">
            <label for="tell1">
            <input id="tell1" type="text" name="tell1" value="" pattern="\d{1,5}" placeholder="090" required>
            </label> -
            <label for="tell2">
            <input id="tell2" type="text" name="tell2" value="" pettern ="\d{1,4}" placeholder="0000" required>
            </label> -
            <label for="tell3">
            <input id="tell3" type="text" name="tell3" value="" pattern="\d{4,5}" placeholder="0000" required>
            </label>
        </div>
    </div>

    <div class="row">
        <div class="r1">メールアドレス<span>※</span></div>
            <div class="r2">
            <p>
                <label for="mail1"></label>
                <input id ="mail1" type="text" name="mail1" value="" placeholder="info" required>
                </label> @
                <label for="mail2">
                <input id="mail2" type="text" name="mail2" value=""  pattern="[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="sample.com" required>
                </label>
            </p>
        </div>
    </div>

    <div class="row">
        <div class="r1"> どこで知ったか </div>
        <div class="r2">
        <input type="hidden" name="where1" value="">
            <input type="hidden" name="where2" value="">
            <label for="shinbun"><input id="shinbun" type="checkbox" name="where1" value="新聞">新聞</label>
            <label for="magazine"><input id="magazine" type="checkbox" name="where2" value="雑誌">雑誌</label>
        </div>
    </div>

    <div class="row">
        <div class="r1"> 質問カテゴリ </div>
        <div  class="r2">
            <select id="category" name="category">
                <option value="" selected="selected">選択してください</option>
                <option value="AAA">AAA</option>
                <option value="BBB">BBB</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="r1"> 質問内容 </div>
        <div class="r2">
            <label for="situmon"></label>
            <textarea id="situmon" name="situmon" style="box-sizing:border-box" \></textarea>
        </div>
    </div>
</div>

<center>
    <div class="button">
        <label for="button"></label>
        <input id="button" type="submit" name="Submit" value="確認">　　　
        <input id="button" type="button" value="リセット" onclick="this.form.reset();">
    </div>
</center>

</div>
</body>
</html>
