<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/introduce.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce location">
		<div class="page-title">
			<h2>
				오시는길<br>
				<small>Location</small>
			</h2>
		</div>
		<div class="tebmenu-wrap">
			<p>
				<a href="#">지도보기</a>
			</p>
			<ol class="tab-menu">
				<li class="active"><a href="#">셔틀버스<br>이용</a></li>
				<li><a href="#">대중교통<br>이용</a></li>
				<li><a href="#">자가용<br>이용</a></li>
				<li><a href="#">길찾기</a></li>
			</ol>
			 <ul class="category" role="tablist">
				<li role="presentation" class="active"><a href="#" role="tab">1호차</a></li>
				<li role="presentation"><a href="#" role="tab">2호차</a></li>
				<li role="presentation"><a href="#" role="tab">3호차</a></li>
				<li role="presentation"><a href="#" role="tab">4호차</a></li>
				<li role="presentation"><a href="#" role="tab">5호차</a></li>
			</ul>
		</div>
		<section class="shuttle-one">
			<div class="section-header">
				
			</div>
			<div class="section-content">
				<div class="container">
				
				</div>
			</div>
		</section>
	</main> 
<style>
/* location */
.introduce.location .shuttle-one .section-header {background-image:url("/mobile/images/introduce/location_bg.gif"); background-size:320px 206px; background-repeat:no-repeat; background-position:50% 0; min-height:206px; }

</style>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>