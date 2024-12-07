<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>mogitate</title>
</head>
<body>


<div class="card">
　<div class="card__img">
　<img src="{{ asset('storage/banana.png') }}" alt="Example Image">
　</div>
　　<div class="flex">
　　<div class="box">バナナ</div>
　　<div class="box">¥800</div>
　</div>

<div class="card__img">
<img src="{{ asset('storage/grapes.png') }}" alt="Example Image">
</div>

<div class="flex">
<div class="box">グレープ</div>
<div class="box">¥800</div>
</div>

<div class="card__img">
<img src="{{ asset('storage/strawberry.png') }}" alt="Example Image">
</div>
<div class="flex">
<div class="box">イチゴ</div>
<div class="box">¥900</div>
</div>
</div>

<div class="container">
<!-- 検索フィールドとボタン -->
<input type="text" id="searchInput" class="search-input" placeholder="商品名で検索">
<button class="search-button">検索</button>
</div>



</body>
</html>
