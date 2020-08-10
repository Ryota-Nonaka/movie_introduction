<!DOCTYPE html>
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
	<form action="confirm.php" method="post" name="form" onsubmit="return validate()">
		<div class="container-fluid col-md-6">
			<h1 class="contact-title">お問い合わせ 内容入力</h1>
			<p>お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p>
			<!-- <div class="row center-block"> -->
			<label>お名前<span class="badge badge-danger">必須</span></label>
			<input class="form-control" type="text" name="name" placeholder="例）山田太郎" value="">
			<!-- </div> -->
			<!-- <div class="form-group col-md-6 row"> -->
			<label>ふりがな<span class="badge badge-danger">必須</span></label>
			<input class="form-control" type=" text" name="furigana" placeholder="例）やまだたろう" value="">
			<!-- </div> -->
			<!-- <div class="form-group col-md-6 row"> -->
			<label>メールアドレス<span class="badge badge-danger">必須</span></label>
			<input class="form-control" type="text" name="email" placeholder="例）guest@example.com" value="">
			<!-- </div> -->
			<!-- <div class="form-group col-md-6 row"> -->
			<label>電話番号<span class="badge badge-danger">必須</span></label>
			<input class="form-control" type="text" name="tel" placeholder="例）0000000000" value="">
			<!-- </div> -->
			<div class="form-check">
				<label for="radio1">性別<span class="badge badge-danger" for="radio1">必須</span></label>
				<div class="form-check">
					<label class="form-check-label" for="radio1"><input class="form-check-input" type="radio" name="sex" id="radio1" value="男性" checked>
						男性</label>
				</div>
				<div class="form-check">
					<label class="form-check-label" for="radio2"><input class="form-check-input" type="radio" name="sex" id="radio2" value="女性">
						女性</label>
				</div>
			</div>

			<!-- <div class="form-row col-md-10 align-items-center"> -->
			<label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">お問い合わせ項目<span class="badge badge-danger">必須</span></label>
			<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="item">
				<option selected value="">お問い合わせ項目を選択してください</option>
				<option value="ご質問・お問い合わせ">ご質問・お問い合わせ</option>
				<option value="ご意見・ご感想">ご意見・ご感想</option>
			</select>
			<!-- </div> -->
			<!-- <div class="form-group col-md-10"> -->
			<label>お問い合わせ内容<span class="badge badge-danger">必須</span></label>
			<textarea class="form-control" name="content" rows="10" placeholder="お問合せ内容を入力"></textarea>
			<!-- </div> -->
			</br>
			<button class="btn btn-primary" type="submit">確認画面へ</button>
		</div>
	</form>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>