<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/introduce.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">병원소개</a></li>
                <li class="active">오시는 길</li>
            </ol>
        </div>
    </div>
    <main id="content" class="introduce location"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>오시는 길</h2>
            <small>Location</small>
        </div>
        
        <!-- 실제 작업 영역 -->
        <div class="container">
			<p class="viewMap"><a href="pop_map.php"><img src="../images/introduce/icon_map.gif" alt=""/>지도보기</a></p>
            <ul class="nav nav-pills nav-justified">
                <li role="presentation"><a href="bus.php">셔틀버스 이용</a></li>
                <li role="presentation"><a href="public.php">대중교통 이용</a></li>
                <li role="presentation" class="active"><a href="car.php">자가용 이용</a></li>
                <li role="presentation"><a href="http://map.daum.net/?target=traffic" target="_blank">길찾기</a></li>
            </ul>
        </div>
		
		<div class="locationTit" style="margin-top:40px;">
			<img src="../images/icon_title.png" alt=""/>
			<h1><b>자가용 이용</b></h1>
			<p>경기도 광주시 초월읍 지월리 729-6   /   Tel : 1577-3622</p>
		</div>

		<div class="container">
			<div class="car">
				<h1>중부고속도로를 이용할 경우</h1>
				<p><img src="../images/introduce/car_img01.gif" alt=""/></p>
				<h1 style="margin-top:100px">3번 국도를 이용할 경우</h1>
				<p><img src="../images/introduce/car_img02.gif" alt=""/></p>
			</div>
		</div>
        
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>