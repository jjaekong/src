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
                <li class="active">나에게 맞는 치료 찾기</li>
            </ol>
        </div>
    </div>
    <main id="content" class="departments tailored-treatment">
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>진료과목</h2>
        </div>

        <!-- 실제 작업 영역 -->
        <div class="container">
            <section class="treatment">
                <div class="section-header">
                    <h2>나에게 맞는 치료 찾기<br><small>최고의 의료서비스를 제공합니다.</small></h2>
                </div>
                <div class="section-content">
                    <p>
                        <img src="/images/departments/tailored_img.jpg" alt="신체부위 이미지" usemap="#physical" style="502px; height: 958px">
                        <map name="physical">
                            <area shape="circle" coords="241,33,12" data-toggle="collapse" href="#neck-content" alt="neck">
                            <area shape="circle" coords="147,177,12" data-toggle="collapse" href="#shoulder-content" alt="shoulder">
                            <area shape="circle" coords="385,344,12" data-toggle="collapse" href="#arm-content" alt="arm">
                            <area shape="circle" coords="240,438,12" data-toggle="collapse" href="#stomach-content" alt="stomach">
                            <area shape="circle" coords="173,717,11" data-toggle="collapse" href="#leg-content" alt="leg">
                        </map>
                    </p>

                    <div class="neck">
                        <a class="btn-primary" role="button" data-toggle="collapse" href="#neck-content" aria-expanded="false" aria-controls="neck-content">
                           머리 / 목 통증
                           <img src="/images/departments/plus_img.png" alt="">
                        </a>
                        <div class="collapse content" id="neck-content">
                            <ul class="arrow-list">
                                <li><a href="#">갑상선질환</a></li>
                                <li><a href="#">거북목(일자목)교정</a></li>
                                <li><a href="#">경추(목)디스크/경추간판탈출증</a></li>
                                <li><a href="#">뇌신경재활센터</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="shoulder">
                        <a class="btn-primary" role="button" data-toggle="collapse" href="#shoulder-content" aria-expanded="false" aria-controls="shoulder-content">
                            어깨 통증
                            <img src="/images/departments/plus_img.png" alt="">
                        </a>
                        <div class="collapse content" id="shoulder-content">
                            <ul class="arrow-list">
                                <li><a href="#">근육통/만성통증클리닉</a></li>
                                <li><a href="#">어깨 충돌증후군</a></li>
                                <li><a href="#">회전근개파열</a></li>
                                <li><a href="#">오십견</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="arm">
                        <a class="btn-primary" role="button" data-toggle="collapse" href="#arm-content" aria-expanded="false" aria-controls="arm-content">
                            팔 통증
                            <img src="/images/departments/plus_img.png" alt="">
                        </a>
                        <div class="collapse content" id="arm-content">
                            <ul class="arrow-list">
                                <li><a href="#">테니스엘보(주관절외상과염)</a></li>
                                <li><a href="#">골프엘보(주관절내측과염)</a></li>
                                <li><a href="#">팔꿈치 윤활막염</a></li>
                                <li><a href="#">삼두근건염</a></li>
                                <li><a href="#">이두근건염</a></li>
                                <li><a href="#">팔꿈치 관절염</a></li>
                                <li><a href="#">손목터널증후군</a></li>
                                <li><a href="#">드퀘르병 건초염(손목건초염)</a></li>
                                <li><a href="#">방아쇠수지 </a></li>
                                <li><a href="#">손가락관절염</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="stomach">
                        <a class="btn-primary" role="button" data-toggle="collapse" href="#stomach-content" aria-expanded="false" aria-controls="stomach-content">
                            배/허리/골반 통증
                            <img src="/images/departments/plus_img.png" alt="">
                        </a>
                        <div class="collapse content" id="stomach-content">
                            <ul class="arrow-list">
                                <li><a href="#">소화기내과</a></li>
                                <li><a href="#">성인병클리닉</a></li>
                                <li><a href="#">자세 및 체형교정</a></li>
                                <li><a href="#">자세불균형</a></li>
                                <li><a href="#">허리디스크/요추간판탈출증</a></li>
                                <li><a href="#">척추측만증</a></li>
                                <li><a href="#">척추 협착증(척추관협착증)</a></li>
                            </ul>
                            <ul class="arrow-list">
                                <li><a href="#">척추전방전위증</a></li>
                                <li><a href="#">척추 분리증</a></li>
                                <li><a href="#">척추압박골절</a></li>
                                <li><a href="#">척수손상재활센터</a></li>
                                <li><a href="#">골반통증-천장관절증후군</a></li>
                                <li><a href="#">엉덩이통증- 살굴부위좌상</a></li>
                                <li><a href="#">좌골신경통</a></li>
                                <li><a href="#">윤활낭염(=점액낭염) </a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="leg">
                        <a class="btn-primary" role="button" data-toggle="collapse" href="#leg-content" aria-expanded="false" aria-controls="leg-content">
                            다리 통증
                            <img src="/images/departments/plus_img.png" alt="">
                        </a>
                        <div class="collapse content" id="leg-content">
                            <ul class="arrow-list">
                                <li><a href="#">슬개건염</a></li>
                                <li><a href="#">아킬레스건염</a></li>
                                <li><a href="#">족부건염</a></li>
                                <li><a href="#">지간신경종</a></li>
                                <li><a href="#">족부관절염</a></li>
                                <li><a href="#">중족골통</a></li>
                                <li><a href="#">피로골절</a></li>
                                <li><a href="#">발목염좌</a></li>
                                <li><a href="#">균형치료</a></li>
                                <li>
                                    <a href="#">발바닥통증-족저근막염<br>(발바닥근막염)</a>
                                </li>
                                <li>
                                    <a href="#">햄스트링통증 –<br>뒷넙다리근좌상</a>
                                </li>
                            </ul>
                            <ul class="arrow-list">
                                <li><a href="#">휜다리교정</a></li>
                                <li><a href="#">후관절증후군</a></li>
                                <li><a href="#">퇴행성관절염</a></li>
                                <li><a href="#">류마티스관절염</a></li>
                                <li><a href="#">반월상연골파열</a></li>
                                <li><a href="#">전방십자인대손상</a></li>
                                <li><a href="#">슬개연골연화증</a></li>
                                <li><a href="#">슬개대퇴증후군</a></li>
                                <li>
                                    <a href="#">테니스엘보<br>(주관절외상과염)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="center">
                    <div>
                        <h3>암통증</h3>
                        <ul class="arrow-list">
                            <li><a href="#">림프부종치료</a></li>
                            <li><a href="#">암통증재활센터</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>소아재활센터</h3>
                        <ul class="arrow-list">
                            <li><a href="#">소아재활센터</a></li>
                            <li><a href="#">소아작업치료</a></li>
                            <li><a href="#">소아운동치료</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>호흡재활센터</h3>
                        <ul class="arrow-list">
                            <li><a href="#">호흡재활센터</a></li>
                            <li><a href="#">삼킴장애치료</a></li>
                            <li><a href="#">호흡재활치료</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>건강검진센터</h3>
                        <ul class="arrow-list">
                            <li><a href="#">건강검진</a></li>
                        </ul>
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
