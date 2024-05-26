
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="apply.css">
    <title>お申込み</title>
  </head>
  <body>
    <header>
      <h1 class="headline">
        <a>お申込み</a>
      </h1>
    </header>
    <form action="" method="POST" style="display: flex;flex-direction: column; align-items: center;">
      <table>
        <tr>
          <th>
            <label for="name-field">お名前</label>
          </th>
          <td>
            <input type="text" name="name" id="name-field">
          </td>
        </tr>
        <tr>
          <th>
            <label for="mail-field">メールアドレス</label>
          </th>
          <td>
            <input type="mail" name="mail" id="mail-field">
          </td>
        </tr>
        <tr>
          <th>
            <label for="area-select">お住まい</label>
          </th>
          <td>
            <select name="area" id="area-select">
              <option value="">--都道府県選択--</option>
              <option value="fukuoka">福岡</option>
              <option value="okinawa">沖縄</option>
            </select>
          </td>
        </tr>
      </table>
      <button>送信</button>
    </form>
  </body>
</html>

  <?php

  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    print($_POST['pets']);
    file_put_contents("apply_data/sample.txt", $_POST['test']);
}
?>