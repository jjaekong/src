<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/departments.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">진료과목</a></li>
                <li class="active">내과</li>
            </ol>
        </div>
    </div>
    <main id="content" class="departments tailored-treatment">
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>내과</h2>
            <small>Internal Medicine Department</small>
        </div>

        <!-- 실제 작업 영역 -->
        <div class="container">
            <section class="treatment">
                <div class="section-header">
                    <h2>나에게 맞는 치료 찾기<br><small>최고의 의료서비스를 제공합니다.</small></h2>
                </div>
                <div class="section-content">
                    <p>
                        <img src="/images/departments/tailored_img.jpg" alt="">
                    </p>

                    <div class="neck">
                        <h3><a href="#">머리 / 목 통증</a></h3>
                    </div>

                    <div class="shoulder">
                        <h3><a href="#">어깨 통증</a></h3>
                    </div>

                    <div class="arm">
                        <h3><a href="#">팔 통증</a></h3>
                    </div>

                    <div class="stomach">
                        <h3><a href="#">배/허리/골반 통증</a></h3>
                    </div>

                    <div class="leg">
                        <h3><a href="#">다리 통증</a></h3>
                    </div>
                </div>
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>
