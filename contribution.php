<!doctype html>
<html lang="ja">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>contribution</title>
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
  <form action="contents.php" method="post" name="form" onsubmit="return validate()">
    <div class="container-fluid col-md-6">
      <h1>投稿フォーム</h1>
      <label>映画のタイトル<span class="badge badge-danger">必須</span></label>
      <input class="form-control" type="text" name="title" placeholder="例）タイトルを入力してください。" value="">
      <label>映画のヒントを入力<span class="badge badge-danger">必須</span></label>
      <textarea class="form-control" name="hint" rows="2" placeholder="ヒントその①"></textarea>
      </br>
      <label>その作品のワンシーン画像を4つ選択してください。</label>
      <div class="input-group col-md-6">
        <div class="custom-file form-block" id="form_block1">
          <span class="close" title="Close" style="display: none;">-</span>
          <input type="file" name="images1" class="custom-file-input" enctype="multipart/form-data" id="inputGroupFile02">
          <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
        </div>
      </div>
      </br>
      <div class="input-group col-md-6">
        <div class="custom-file form-block" id="form_block2">
          <span class="close" title="Close" style="display: none;">-</span>
          <input type="file" name="images2" class="custom-file-input" id="inputGroupFile02">
          <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
        </div>
      </div>
      </br>
      <div class="input-group col-md-6">
        <div class="custom-file form-block" id="form_block3">
          <span class="close" title="Close" style="display: none;">-</span>
          <input type="file" name="images3" class="custom-file-input" id="inputGroupFile02">
          <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
        </div>
      </div>
      </br>
      <div class="input-group col-md-6">
        <div class="custom-file form-block" id="form_block4">
          <span class="close" title="Close" style="display: none;">-</span>
          <input type="file" name="images4" class="custom-file-input" id="inputGroupFile02">
          <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
        </div>
      </div>
      </br>
      <button class="btn btn-primary" type="submit" name="submit">投稿する</button>
    </div>
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>