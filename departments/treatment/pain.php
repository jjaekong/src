 <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/departments.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">병원소개</a></li>
                <li class="active">병원소개</li>
            </ol>
        </div>
    </div>
    <main id="content" class="departments pain"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>SRC 치료법</h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation">
                    <a href="/departments/treatment/adult_exercise.php">성인운동치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/young_exercise.php">소아운동치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/adult_treatment.php">성인작업치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/young_treatment.php">소아작업치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/breathe.php">호흡재활치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/underwater.php">수중재활치료</a>
                </li>
                <li role="presentation">
                    <a href="/departments/treatment/balance.php">균형치료</a>
                </li>
                <li role="presentation" class="active">
                    <a href="/departments/treatment/pain.php">통증치료</a>
                </li>
                <li role="presentation">
                    <a href="#">삼킴장애치료</a>
                </li>
                <li role="presentation">
                    <a href="#">자세불균형</a>
                </li>
                <li role="presentation">
                    <a href="#">림프부종치료</a>
                </li>
            </ul>
            <section class="treatment">
                <div class="section-header">
                    <h2>통증치료</h2>
                </div>
                <p>
                    중추신경계 손상 및 근골격계 손상 등으로 인해 발생되는 2차적 통증, 척추손상환자의 기능재활훈련에 수반되는 통증, 정형외과적 수술에 관련된 수술 전, 후 재활에 필요한 기능회복을 위한 통증 그리고 그 밖에 척추와 각 관절의 통증을 열·전기치료 기구를 적용하여 통증을 조절하고 연부 조직의 염증을 감소시키거나 제거하며 근경련의 이완, 근육 및 관절의 재교육, 순환 증진의 효과가 있으며, 많은 전기치료의 방법들이 통증, 염증, 연부조직의 치유와 관련된 치료를 하고 있습니다.
                </p>
                <h3>치료대상</h3>
                <p>
                    근위축과 강직으로 인한 통증과 상하지 부종, 근골격계 질환과 퇴행성 관절염, 류마티스 관절염, 오십견, 근막동통증후근 등 모든 통증을 대상으로 합니다.  중추신경계질환 및 손상환자, 신경근질환 및 손상환자, 운동조절장애환자, 사지절단환자, 오십견, 관절염 및 정형외과 질환 및 손상환자, 근막 동통증후군 및 만성통증질환 환자, 수술 후 통증관리, 추 간판 탈출증의 요통질환, 근육 및 인대 염좌, 좌상 등의 스포츠 손상환자
                </p>
                <h3>개인별 맞춤 통증치료 솔루션</h3>
                <div class="step-1">
                    <h4>
                        <span>STEP1</span>통증원인분석
                        <small>SRC병원에서는 통증의 근본적인 원인분석을 통해 통증의 뿌리를 봅아 통증의 예빙부터 사후까지 관리해 드립니다.</small>
                    </h4>
                </div>
                <div class="step-2">
                    <h4>
                        <span>STEP2</span>비수술적 1차치료
                        <small>"수술만이 답은 아닙니다" SRC병원에서는 다양한 방법을 통해 자연스럽게 통증을 완화합니다.</small>
                    </h4>
                </div>
                <div class="step-3">
                    <h4>
                        <span>STEP3</span>맞춤형 원인치료
                        <small>"같은부위 통증이라도 같은 이유가 아닙니다" SRC병원에서는 개개인의 통증원인을 찾아 뿌리채 뽑아드립니다.</small>
                    </h4>
                </div>
                <div class="step-4">
                    <h4>
                        <span>STEP4</span>자기관리교육
                        <small>"다른생활습관이 중요합니다" SRC병원에서는 지속적으로 통증부위를 재발되지 않도록 교육합니다.</small>
                    </h4>
                </div>
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>