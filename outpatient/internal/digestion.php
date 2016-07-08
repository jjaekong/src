 <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/outpatient.css" rel="stylesheet">
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
    <main id="content" class="outpatient digestion"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>내과/가정의학과</h2>
        </div>
        <!-- 실제 작업 영역 -->
        <div class="container">
            <ul class="nav nav-pills nav-justified">
                <li role="presentation" class="active">
                    <a href="/outpatient/internal/digestion.php">소화기내과</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/internal/adult_disease.php">성인병클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/internal/internal_secretion .php">내분비클리닉</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/internal/checkup.php">건강검진</a>
                </li>
                <li role="presentation">
                    <a href="/outpatient/internal/vaccinationphp">예방접종안내</a>
                </li>
            </ul>
            <section class="internal">
                <div class="section-header">
                    <h2>소화기 내과</h2>
                </div>
                <div class="section-content">
                    <p>
                        소화기 내시경 검사는 크게 위 내시경과 대장 내시경이 있습니다.  위 내시경은 입으로 삽입해서 식도, 위, 십이지장을 직접 눈으로 관찰합니다. 대장 내시경은 항문으로부터 대장 전부와 소장 끝 부분까지 관찰이 가능합니다. 내시경 끝에는 렌즈, 광원장치, 물-공기 주입관, 조직검사를 할 수 있는 관 등이 있고, 상하좌우로 자유자재 움직일 수 있습니다.  위 내시경의 굵기는 9.2mm로 우동 굵기보다 조금 큰 정도입니다. 내시경은 방법에 따라 수면내시경과 비수면 내시경으로 나뉩니다. 수명내시경은 고통과 두려움을 최소화하고 검사 때의 불쾌한 기억을 없애기 위해 환자에게 진통제와 진정제를 투여해 수면작용과 고통스런 기억의 상실을 유도한 뒤 몽롱한 상태에서 받는 검사를 말합니다. 
                    </p>
                    <h3>내시경 검사의 장·단점</h3>
                    <p>
                        내시경은 눈으로 몸 안을 직접 보면서 검사하고 병이 발견되면 조직검사를 바로 시행할 수가 있어서 병의 진단률이 매우 높습니다.  최근에는 고화질의 HD급 영상과 확대 내시경을 통해 아주 작은 위암, 대장암 또는 암이 되기 직전의 병변까지 관찰할 수 있습니다.
                    </p>
                    <ul class="arrow-list">
                        <li>
                            <dl class="inline-dl">
                                <dt>수면 내시경검사방법을 선택해야 하는 경우</dt>
                                <dd>내시경 검사에 두려움이 많다, 구역질을 참기 힘들다.</dd>
                            </dl>
                        </li>
                        <li>
                            <dl class="inline-dl">
                                <dt>수면 내시경 검사 방법을 선택해야 하는 경우</dt>
                                <dd>내시경 검사 후 볼 일이 있다, 내시경 검사에 특별히 거부감이 없다.</dd>
                            </dl>
                        </li>
                    </ul>
                    <figure>
                        <img src="/images/outpatient/digestion_img01.jpg" alt="식도, 위, 카메라 불빛">
                        <figcaption>위 내시경</figcaption>
                    </figure>
                    <figure>
                        <img src="/images/outpatient/digestion_img02.jpg" alt="항문, 내시경, 에스자대장, 하행대장, 횡형대장, 상행대장, 맹장">
                        <figcaption>대장 내시경</figcaption>
                    </figure>
                </div>
            </section>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>