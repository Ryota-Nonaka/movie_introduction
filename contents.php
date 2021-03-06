<?php



$url_Contents = file_get_contents("https://api.themoviedb.org/3/search/movie?api_key=34e831bcf1973ff3609e1979aa68ccc3&language=ja-JA&query=%E3%82%BF%E3%83%BC%E3%83%9F%E3%83%8D%E3%83%BC%E3%82%BF%E3%83%BC2&page=1&include_adult=false");
$movieArray = json_decode($url_Contents, true);
if ($movieArray) {
  foreach ($movieArray['results'] as $record) {
    $title = $record['title'];
    $poster = $record['poster_path'];
    $overview = $record['overview'];
  }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="src\css\contents.css">

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
  <!-- カルーセル
    ================================================== -->
  <main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- インジケータ -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="first-slide" src="https://image.tmdb.org/t/p/original/pC9vQ5miLgdHSPIsgfU5A9pcTpF.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption text-left">
              <h1>画像1を表示</h1>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-hint1">
                ヒントを表示
              </button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="first-slide" src="https://image.tmdb.org/t/p/original/xKb6mtdfI5Qsggc44Hr9CCUDvaj.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>画像2を表示</h1>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-hint2">
                ヒントを表示
              </button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="first-slide" src="https://image.tmdb.org/t/p/original/ztBeLd2UCbUATJ1cXwwHev3G3xX.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>画像3を表示</h1>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-hint3">
                ヒントを表示
              </button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="first-slide" src="https://image.tmdb.org/t/p/original/jUV2lPxhcQe4g6EEKyJT0F1QbrC.jpg" alt="Fourth slide">
          <div class="container">
            <div class="carousel-caption text-right">
              <h1>画像4を表示</h1>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-hint4">
                ヒントを表示
              </button>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">前へ</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">次へ</span>
      </a>
    </div><!-- /.carousel -->
    <form action='contents.php' method='post'>
      <div class="input-group col-6">
        <input type="text" class="form-control" name="answer" placeholder="回答を入力する" aria-describedby="basic-addon1">
        <div class="input-group-prepend">
          <button class="btn btn-outline-primary" type="submit" id="button-addon1" data-toggle="modal" data-target="#answer">回答</button>
        </div>
      </div>
    </form>
    </br>
    <div id="container">
      <?php if (isset($_POST['answer'])) {
        if ($_POST['answer'] == $title) {
          echo '<h1>正解:' . $title . '</h1>';
          echo '<img src="http://image.tmdb.org/t/p/w185/' . $poster . '">';
          echo '<div id=img_footer>' . $overview . '</div>';
        } else {
          echo '<h1>不正解</h1>';
        }
      }
      ?>
      <!-- Modal -->
      <div class="modal fade" id="modal-hint1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">ヒント①</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>1991年8月24日　日本公開</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modal-hint2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">ヒント②</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>主演・アーノルドシュワルツェネッガー</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modal-hint3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">ヒント③</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>デデンデンデデン♪</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modal-hint4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">ヒント④</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>I' ll be back</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
            </div>
          </div>
        </div>
      </div>

      <!-- <div class="modal fade bd-example-modal-lg" id="answer" tabindex="-1" role="dialog" aria-labelledby="imageModal1" aria-hidden="true">
      <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">回答</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-img_footer"> -->

      <!-- </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
          </div>
        </div>
      </div>
    </div> -->





      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>