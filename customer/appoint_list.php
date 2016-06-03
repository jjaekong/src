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
                <li class="active">예약확인</li>
            </ol>
        </div>
    </div>
    <main id="content" class="customer appoint list">
        <div class="page-header">
            <h2>예약확인</h2>
        </div>
        <div class="container">
            <section class="appoint-list">
                <div class="section-header">
                    <h3>진료예약 내역</h3>
                </div>
                <table class="table table-bordered">
                    <colgroup>
                        <col style="width: 100px">
                        <col style="width: 300px">
                        <col style="width: 170px">
                        <col style="width: 200px">
                        <col style="width: 200px">
                        <col style="width: 200px">
                    </colgroup>
                    <thead>
                        <tr>
                            <th>번호</th>
                            <th>예약센터</th>
                            <th>담당의료진</th>
                            <th>예약날짜</th>
                            <th>예약시간</th>
                            <th>진행상황</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>15</td>
                            <td>가정의학과</td>
                            <td>최창대</td>
                            <td>2016년 6월 8일 수요일</td>
                            <td>오전 10:00</td>
                            <td><a class="btn btn-cancel" href="#">예약취소</a></td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>가정의학과</td>
                            <td>최창대</td>
                            <td>2016년 6월 8일 수요일</td>
                            <td>오전 10:00</td>
                            <td><a class="btn btn-waiting" href="#">예약대기</a></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>가정의학과</td>
                            <td>최창대</td>
                            <td>2016년 6월 8일 수요일</td>
                            <td>오전 10:00</td>
                            <td><a class="btn btn-confirmed" href="#">예약완료</a></td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>가정의학과</td>
                            <td>최창대</td>
                            <td>2016년 6월 8일 수요일</td>
                            <td>오전 10:00</td>
                            <td><a class="btn btn-cancel" href="#">예약취소</a></td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>가정의학과</td>
                            <td>최창대</td>
                            <td>2016년 6월 8일 수요일</td>
                            <td>오전 10:00</td>
                            <td><a class="btn btn-waiting" href="#">예약대기</a></td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>가정의학과</td>
                            <td>최창대</td>
                            <td>2016년 6월 8일 수요일</td>
                            <td>오전 10:00</td>
                            <td><a class="btn btn-confirmed" href="#">예약완료</a></td>
                        </tr>
                    </tbody>
                </table>
                <nav class="paging">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li class="ellipsis"><span class="glyphicon glyphicon-option-horizontal"></span></li>
                        <li><a href="#">10</a></li>
                    </ul>
                </nav>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>