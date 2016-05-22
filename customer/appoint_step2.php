<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<link href="/css/customer.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <div class="page-path">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="#">고객서비스</a></li>
                <li class="active">온라인 예약</li>
            </ol>
        </div>
    </div>
    <main id="content" class="customer appoint step2">
        <div class="page-header">
            <h2>온라인 예약</h2>
        </div>
        <div class="steps">
            <div class="container">
                <ol>
                    <li><p>로그인<br><small>(비회원일 경우<br>회원가입을 먼저 해주세요)</small></p></li>
                    <li><p>희망날짜,<br>의료진 및 진료시간 선택</p></li>
                    <li class="active"><p>예약 신청 내용 확인</p></li>
                    <li><p>완료 후 예약일에 방문</p></li>
                </ol>
            </div>
        </div>
        <div class="container">
            <section class="confirm">
                <div class="section-header">
                    <h3>예약신청확인</h3>
                </div>
                <table class="table">
                    <colgroup>
                        <col style="width: 220px">
                        <col>
                    </colgroup>
                    <tbody>
                        <tr>
                            <th>예약날짜</th>
                            <td>2016년 05월 25일</td>
                        </tr>
                        <tr>
                            <th>예약센터</th>
                            <td>한의과</td>
                        </tr>
                        <tr>
                            <th>담당의료진</th>
                            <td>박정현</td>
                        </tr>
                        <tr>
                            <th>예약시간</th>
                            <td>오전</td>
                        </tr>
                    </tbody>
                </table>
                <ul class="notice">
                    <li>선택하신 예약 내용을 확인해주세요.</li>
                    <li>예약완료는 예약 담당자와의 상담 후 확정이 됩니다.</li>
                    <li>담당자와의 전화상담이 되지 않았을 경우 상담전화 : 031 - 799 -3713, 3817로 연락을 주시면 신속한 상담으로 도와드리겠습니다.</li>
                </ul>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>