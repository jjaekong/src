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
                <li role="presentation" class="active"><a href="public.php">대중교통 이용</a></li>
                <li role="presentation"><a href="car.php">자가용 이용</a></li>
                <li role="presentation"><a href="http://map.daum.net/?target=traffic" target="_blank">길찾기</a></li>
            </ul>
        </div>
		
		<div class="locationTit" style="margin-top:40px;">
			<img src="../images/icon_title.png" alt=""/>
			<h1><b>대중교통 이용</b></h1>
			<p>대중교통 이용시 광주시 보건소 (나산화원) 앞 또는 경안동사무소앞에서 하차하여 <i>* SRC재활병원 셔틀버스나 택시를 이용바랍니다.(10분 소요)</i></p>
		</div>
		<div class="container">
			<ul class="public">
				<li>
					<p><img src="../images/introduce/public_img01.gif" alt="강변역 2호선"/></p>
					테크노마트 좌측 버스정류장<br />직행좌석 1113번, 1113 - 1번
				</li>
				<li>
					<p><img src="../images/introduce/public_img02.gif" alt="잠실역 2호선"/></p>
					주공5단지 방향 출구 버스정류장<br />일반버스 32번
				</li>
				<li>
					<p><img src="../images/introduce/public_img03.gif" alt="모란역 8호선"/></p>
					시외버스터비널 방면 버스정류장<br />3번, 3-3번, 31-1번, 32번
				</li>
			</ul>
		</div>
        
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>