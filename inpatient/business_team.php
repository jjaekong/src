 <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/inpatient.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">입원안내</a></li>
                <li class="active">사회사업팀(환자지원프로그램)</li>
            </ol>
        </div>
    </div>
    <main id="content" class="inpatient business-team"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>사회사업팀(환자지원프로그램)</h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation">
                    <a href="/inpatient/rehab_guide.php">입원안내</a>
                </li>
                <li role="presentation" class="active">
                    <a href="/inpatient/business_team.php">사회사업팀(환자지원프로그램)</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/menu_guide.php">입원식단안내</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/vip.php">VIP 입원안내</a>
                </li>
                <li role="presentation">
                    <a href="/inpatient/rehabilitation.php">재활요양병원안내</a>
                </li>
            </ul>
            <section class="checkup-list">
                <div class="section-header">
                    <h2>사회사업팀</h2>
                </div>
                
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>