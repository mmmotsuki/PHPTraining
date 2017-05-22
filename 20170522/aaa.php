<html>
<form name="frmR" method="post" action="content/demo/test.php">
    <dl>
        <dt>名前：</dt>
            <dd>
                <input type="text" name="username" />
            </dd>
        <dt>性別：</dt>
            <dd>
                <label for="f1_male"><input type="radio" id="f1_male" name="sex" value="男性" checked="checked" />男性</label>
                <label for="f1_female"><input type="radio" id="f1_female" name="sex" value="女性" />女性</label>
            </dd>
        <dt>居住エリア：</dt>
            <dd>
                <select name="area">
                    <option>---------</option>
                    <option>北海道</option>
                    <option>本州</option>
                    <option>四国</option>
                    <option>九州</option>
                    <option>沖縄</option>
                </select>
            </dd>
        <dt>コメント：</dt>
            <dd>
                <textarea cols="30" rows="5" name="comment"></textarea>
            </dd>
    </dl>
    <p>
        <input type="submit" value="送信" name="btnSubmit" />
        <input type="button" value="リセット" onclick="this.form.reset();" />
    </p>
</form>
</html>
