<? include "data.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/custom.css">
	<title>Document</title>
</head>
<body>

	
<div id="catalog_list">
	<? foreach($data as $key => $item): if(!$item["active"]) continue; ?>
	<div class="item">
		<h2><?=$item["name"]?></h2>
		 <img src="" alt="">
		<p class="price"></p>
		<a class="more" href="">Подробнее</a>
	</div>
	<? endforeach; ?>
</div>

</body>
</html>