<html>
<head>
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
<link rel="stylesheet" href="styles1.css">
<title>お問い合わせ</title>
</head>

<body>
<div class="main">

<h1> お問い合わせ</h1>
<p class="sub">下記フォームに入力し、<span>確認ボタン</span>を押してください。</p>
<p class="sub"><span>※</span>の項目は必ず入力してください。</p>

<form action="otoiawasekakunin.php" method="post">

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
            <label for="man"><input id="man" type="radio" name="sex" value="男" checked>男</label>
            <label for="woman"><input id="woman" type="radio" name="sex" value="女">女</label>
            <label for="other"><input id="other" type="radio" name="sex" value="不明">不明</label>
        </div>
    </div>

    <div class="row">
        <div class="r1"> 住所 </div>
        <div class="r2">
            <div class="address1">都道府県<br><select name="address1">
                <option value="" selected>選択してください</option>
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都">東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
            </select>
            </div>
            <div class="address1">市区郡町村<br><input type="text" name="address2" value="" placeholder="板橋区"></input></div>
            <div class="address1">丁目番地号<br><input type="text" name="address3" value="" placeholder="1-2-3"></input></div>
            <div>建物名<br><input type="text" name="address4" value="" placeholder=""></input></div>
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
                <input id ="mail1" type="text" name="mail1" value="" placeholder="info" required> @
                <input id="mail2" type="text" name="mail2" value=""  pattern="[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="sample.com" required>
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
