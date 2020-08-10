<?php

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\OAuth;

// use League\OAuth2\Client\Provider\Google;

// require 'src\php_mailer\vendor\autoload.php';
// mb_language("ja");
// mb_internal_encoding("UTF-8");




$dsn = 'mysql:dbname=confirm;host=localhost';
$user = 'user';
$pass = "baramo0814";
// フォームのボタンが押されたら
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを各変数に格納
    $name = $_POST["name"];
    $furigana = $_POST["furigana"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $sex = $_POST["sex"];
    $item = $_POST["item"];
    $content  = $_POST["content"];
}


if (isset($_POST["submit"])) {
    try {
        $pdo = new PDO($dsn, $user, $pass, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);

        $stmt = $pdo->prepare("INSERT INTO confirm(name,furigana,email,tel,sex,item,content) VALUES (:name,:furigana,:email,:tel,:sex,:item,:content)");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':furigana', $furigana, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':tel', $tel, PDO::PARAM_STR);
        $stmt->bindParam(':sex', $sex, PDO::PARAM_STR);
        $stmt->bindParam(':item', $item, PDO::PARAM_STR);
        $stmt->bindParam(':content', $content, PDO::PARAM_STR);

        $stmt->execute();

        header("Location:thanks.php");
        exit;
    } catch (PDOException $e) {
        $errorMessage = 'データベースエラー';
        echo $e->getMessage();
    }
}


//     try {
//         $mail = new PHPMailer(true);
//         $mail->CharSet = "iso-2022-jp";
//         $mail->Encoding = "7bit";
//         $mail->setLanguage('ja', 'src/php_mailer/vendor/phpmailer/phpmailer/language/');

//         $mail->SMTPDebug = SMTP::DEBUG_SERVER;
//         $mail->isSMTP();
//         $mail->Host = 'smtp.gmail.com';
//         $mail->SMTPAuth = true;
//         $mail->SMTPSecure = 'ssl';
//         $mail->Authtype = 'XOAUTH2';
//         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
//         $mail->port = 465;

//         $google_email = 'tdnblue@gmail.com';

//         $clientId = '726992193287-i19lohgv0qt3e7608rj1be638ojvj3sb.apps.googleusercontent.com';
//         $clientSecret = 'C3CXF5q86gR6QvJol9N2b_Tl';
//         $refreshToken = ' 1//0enYUI79utwL6CgYIARAAGA4SNwF-L9IrNlZ3WkO-dEWW1h2RI4fggAZIM7UD2N5mmJnVkMFEsVEMFcc6tJdMHydFkMDPQj06b1I';

//         $provider = new Google(
//             [
//                 'clientId' => $clientId,
//                 'clientSecret' => $clientSecret,
//             ]
//         );

//         $mail->setOAuth(
//             new OAuth(
//                 [
//                     'provider' => $provider,
//                     'clientId' => $clientId,
//                     'clientSecret' => $clientSecret,
//                     'refreshToken' => $refreshToken,
//                     'userName' => $google_email,
//                 ]
//             )
//         );

//         $mail->setFrom('tdnblue@gmail.com', mb_encode_mimeheader('野中凌太'));
//         $mail->addAddress($email, mb_encode_mimeheader($name));
//         $mail->addReplyTo('tdnblue@gmail.com', mb_encode_mimeheader("お問い合わせ"));
//         // $mail->addCC('foo@example.com'); 

//         $mail->isHTML(true);
//         $mail->Subject = mb_encode_mimeheader("［自動送信］お問い合わせ内容の確認");
//         $mail->Body  = mb_convert_encoding(<<< EOM
//         {$name} 様
//         </br>
//         お問い合わせありがとうございます。
//         以下のお問い合わせ内容を、メールにて確認させていただきました。
//         </br>
//         ===================================================
//         【 お名前 】 
//         {$name}
//         </br>
//         【 ふりがな 】 
//         {$furigana}
//         </br>
//         【 メール 】 
//         {$email}
//         </br>
//         【 電話番号 】 
//         {$tel}
//         </br>
//         【 性別 】 
//         {$sex}
//         </br>
//         【 項目 】 
//         {$item}
//         </br>
//         【 内容 】 
//         {$content}
//         ===================================================
//         </br>
//         内容を確認のうえ、回答させて頂きます。
//         しばらくお待ちください。
//         EOM, "JIS", "UTF-8");

//         $mail->send();
//         header("Location:thanks.php");
//         exit;
//     } catch (Exception $e) {
//         //エラー（例外：Exception）が発生した場合
//         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//     }
// }

?>

<!doctype html>
<html lang="ja">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="src\css\input.css"> -->

</head>

<body>
    <header>
        <div class="collapse bg-dark" id="Navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 ml-auto py-4">
                        <h4 class="text-white">メニュー</h4>
                        <ul class="list-unstyled">
                            <li><a href="#" class="text-white">サイト概要</a></li>
                            <li><a href="#" class="text-white">Twitterでフォロー</a></li>
                            <li><a href="#" class="text-white">Facebookでいいね</a></li>
                            <li><a href="contribution.php" class="text-white">投稿する</a></li>
                            <li><a href='confirm_input.php' class="text-white">お問い合わせ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                    <strong>movie_introduction</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" aria-controls="Navbar" aria-expanded="false" aria-label="ナビゲーションの切替">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>

    </br>
    </br>
    </br>
    </br>
    <form action="confirm.php" method="post">


        <input type="hidden" name="name" value="<?php echo $name; ?>">
        <input type="hidden" name="furigana" value="<?php echo $furigana; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="tel" value="<?php echo $tel; ?>">
        <input type="hidden" name="sex" value="<?php echo $sex; ?>">
        <input type="hidden" name="item" value="<?php echo $item; ?>">
        <input type="hidden" name="content" value="<?php echo $content; ?>">
        <h1 class="contact-title center">お問い合わせ 内容確認</h1>
        <p class="center">お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="row">お名前</th>
                    <td><?php echo $name; ?></td>
                </tr>
            </tbody>
            <!-- <label class="col-md-5 border-bottom bg-light">お名前</label> -->
            <!-- <p class="col-md-6 border-bottom"></p> -->
            <!-- </div> -->
            <!-- <div class="row">
                <label class="col-md-5 border-bottom bg-light">ふりがな</label> -->
            <tbody>
                <tr>
                    <th scope="row">ふりがな</th>
                    <td><?php echo $furigana; ?></td>
                </tr>
            </tbody>
            <!-- <p class="col-md-6 border-bottom"></p> -->
            <!-- </div>
            <div class="row">
                <label class="col-md-5 border-bottom bg-light">メールアドレス</label> -->
            <tbody>
                <tr>
                    <th scope="row">メールアドレス</th>
                    <td><?php echo $email; ?></td>
                </tr>
            </tbody>
            <!-- <p class="col-md-6 border-bottom"></p> -->
            <!-- </div>
            <div class="row">
                <label class="col-md-5 border-bottom bg-light">電話番号</label> -->
            <tbody>
                <tr>
                    <th scope="row">電話番号</th>
                    <td><?php echo $tel; ?></td>
                </tr>
            </tbody>
            <!-- <p class="col-md-6 border-bottom"></p>
            </div>
            <div class="row">
                <label class="col-md-5 border-bottom bg-light">性別</label>
                <p class="col-md-6 border-bottom"></p>
            </div> -->
            <tbody>
                <tr>
                    <th scope="row">性別</th>
                    <td><?php echo $sex ?></td>
                </tr>
            </tbody>
            <!-- <div class="row">
                <label class="col-md-5 border-bottom bg-light">お問い合わせ項目</label>
                <p class="col-md-6 border-bottom"></p>
            </div> -->
            <tbody>
                <tr>
                    <th scope="row">お問い合わせ項目</th>
                    <td><?php echo $item; ?></td>
                </tr>
            </tbody>
            <!-- <div>
                <label class="col-md-5 border-bottom bg-light">お問い合わせ内容</label>
                <p class="col-auto"></p>
            </div> -->
            <tbody>
                <tr>
                    <th scope="row">お問い合わせ内容</th>
                    <td><?php echo nl2br($content); ?></td>
                </tr>
            </tbody>
        </table>
        <input class="btn btn-primary" type="button" value="内容を修正する" onclick="history.back(-1)">
        <button class="btn btn-primary" type="submit" name="submit">送信する</button>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>