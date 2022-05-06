<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 01 - Webmaster</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/tiny-slider.css">
    <link rel="stylesheet" href="/css/theme.css">
</head>

<body>		
	<div class="container">
		<h2>Best sellers</h2>
		<div class="slider-container">
			{foreach from=$products item=product}
				<div class="card" style="padding: 10px important;">
					<div class="card-img">
						<a href="/{$product.link_rewrite}">
							<img src="{$product.img_url}" alt="">
						</a>
					</div>
					<div>
						<p class="card-name">{$product.name}</p>
						<p>
							<span class="card-price">{$product.price|number_format:2}&euro;</span>
							{if $product.specific_price} 
								<span class="card-specific_price">{$product.specific_price.priceWithoutReduction|number_format:2}&euro;</span>
							{/if}
						</p>
					</div>
				</div>
			{/foreach} 
		</div>
	</div>

     {debug}
    <script src="/js/jquery-3.6.0.slim.min.js"></script>
    <script src="/js/tiny-slider.js"></script>
    <script src="/js/theme.js"></script>
</body>

</html>