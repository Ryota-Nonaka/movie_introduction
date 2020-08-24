<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>movie_introduction</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <!-- //cssファイルの設定など -->
  <link rel="stylesheet" href="src\css\index.css">
</head>

<body>
  <header>
    <div class="collapse bg-dark" id="Navbar">
      <div class="container">
        <!-- <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">概要</h4>
            <p class="text-muted">下のアルバム、著者、またはその他の背景の背景に関する情報を追加。人々はいくつかの有益なおいしさを拾うことができるように、それはいくつかの文章を長くする。その後、ソーシャルネットワーキングサイトや連絡先にリンクすること。</p>
          </div> -->
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
  <main role="main">
    <section class="jumbotron text-center">
      <div class="container">
        <h1>映画のサムネイルを表示</h1>
        <p class="lead text-muted">topページにずらっと映画のサムネイルを表示させクリックすると拡大、その映画の他の画像も表示できるようにする</p>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <title>カード画像のキャプション</title>
                <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text>
              </svg>
              <div class="card-body">
                <p class="card-text">サムネイルを表示。クリックすると作品詳細ページへ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="contents.php" class="btn btn-primary  active" role="button" aria-pressed="true">見る</a>

                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <title>カード画像のキャプション</title>
                <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text>
              </svg>
              <div class="card-body">
                <p class="card-text">サムネイルを表示。クリックすると作品詳細ページへ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">見る</button>

                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <title>カード画像のキャプション</title>
                <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text>
              </svg>
              <div class="card-body">
                <p class="card-text">サムネイルを表示。クリックすると作品詳細ページへ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">見る</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <title>カード画像のキャプション</title>
                <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text>
              </svg>
              <div class="card-body">
                <p class="card-text">サムネイルを表示。クリックすると作品詳細ページへ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">見る</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <title>カード画像のキャプション</title>
                <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text>
              </svg>
              <div class="card-body">
                <p class="card-text">サムネイルを表示。クリックすると作品詳細ページへ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">見る</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <title>カード画像のキャプション</title>
                <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text>
              </svg>
              <div class="card-body">
                <p class="card-text">サムネイルを表示。クリックすると作品詳細ページへ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">見る</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <title>カード画像のキャプション</title>
                <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text>
              </svg>
              <div class="card-body">
                <p class="card-text">サムネイルを表示。クリックすると作品詳細ページへ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">見る</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <title>カード画像のキャプション</title>
                <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text>
              </svg>
              <div class="card-body">
                <p class="card-text">サムネイルを表示。クリックすると作品詳細ページへ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">見る</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <title>カード画像のキャプション</title>
                <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text>
              </svg>
              <div class="card-body">
                <p class="card-text">サムネイルを表示。クリックすると作品詳細ページへ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">見る</button>

                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <title>カード画像のキャプション</title>
                <rect fill="#55595c" width="100%" height="100%" /><text fill="#eceeef" dy=".3em" x="50%" y="50%">サムネイル</text>
              </svg>
              <div class="card-body">
                <p class="card-text">サムネイルを表示。クリックすると作品詳細ページへ</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">見る</button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /.album	-->
  </main>

  <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <a href="index.php">トップに戻る</a>
      </p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf" crossorigin="anonymous"></script>
  <!-- //JavaScriptプラグインの設定など -->

</body>

</html>