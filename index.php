<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead.php'); ?>
<link href="/css/jquery-ui.min.css" rel="stylesheet">
<link href="/css/main.css" rel="stylesheet">
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/header.php'); ?>
    <main id="content">
        <div class="visual">
            <div class="slider">
                <div class="item" id="visual-1" style="background-image: url(/images/main/img_overview_1.jpg);">
                    <div class="details">
                        <h3>외래환자</h3>
                        <hr>
                        <p>
                            경기도 광주시에서 통증치료 가장 잘하는 병원<br>
                            국내 최고의 의료진이 함께하는 SRC재활병원입니다.
                        </p>
                        <a href="#">자세히 보기</a>
                    </div>
                </div>
                <div class="item" id="visual-2" style="background-image: url(/images/main/img_overview_1.jpg);">
                    #2
                </div>
                <div class="item" id="visual-3" style="background-image: url(/images/main/img_overview_1.jpg);">
                    #3
                </div>
                <div class="item" id="visual-4" style="background-image: url(/images/main/img_overview_1.jpg);">
                    #4
                </div>
                <div class="item" id="visual-5" style="background-image: url(/images/main/img_overview_1.jpg);">
                    #5
                </div>
                <div class="item" id="visual-6" style="background-image: url(/images/main/img_overview_1.jpg);">
                    #6
                </div>
            </div>
            <div class="nav-container">
                <div class="container">
                    <ul class="nav nav-pills nav-justified">
                        <li role="presentation" class="active"><a href="#">외래환자</a></li>
                        <li role="presentation"><a href="#">재활입원환자</a></li>
                        <li role="presentation"><a href="#">낮병동</a></li>
                        <li role="presentation"><a href="#">통증클리닉</a></li>
                        <li role="presentation"><a href="#">내과</a></li>
                        <li role="presentation"><a href="#">한방과</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/find_treatments.php'); ?>
        <div class="key-contents">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-xs-6 staff">
                        <h3>SRC재활병원 <b>전<span>문</span>의료진</b>이<br><b>최고의 의료서비스</b>를 제공합니다.</h3>
                        <p>
                            국내 재활의료서비스를 선도하는<br>
                            대한민국 대표 SRC재활병원의 의료진을 소개합니다.
                        </p>
                        <img class="img-responsive" src="/images/main/img_doctors.png" alt="의료진 사진">
                    </section>
                    <section class="col-xs-6 appointment">
                        <h3>빠르고 간단한<br><b>온라인 진료 예약</b> 신청하세요.</h3>
                        <p>보건복지부에서 인증한 의료기관<br>경기도 광주에서 통증치료 가장 잘 하는 병원 SRC입니다.</p>
                        <form>
                            <div class="row">
                                <div class="col-xs-5">
                                    <label for="appoint-name">예약하시는 분 성함</label>
                                </div>
                                <div class="col-xs-7">
                                    <input type="text" class="form-control" id="appoint-name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-5">
                                    <label for="appoint-depart">진료과목 및 의료진 선택</label>
                                </div>
                                <div class="col-xs-7">
                                    <select class="form-control" id="appoint-depart">
                                        <option value="">진료과목</option>
                                    </select>
                                    <select class="form-control">
                                        <option value="">의료진</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-5">
                                    <label for="appoint-date">희망 진료시간 및 날짜선택</label>
                                </div>
                                <div class="col-xs-7">
                                    <input type="text" class="form-control" id="appoint-date">
                                    <select class="form-control">
                                        <option value="">진료시간</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-5">
                                    <label for="appoint-contact">예약하시는 분 연락처</label>
                                </div>
                                <div class="col-xs-7">
                                    <input type="text" class="form-control" id="appoint-contact">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-block">간편 온라인 진료 예약하기</button>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <div class="community">
            <div class="container">
                <div class="row">
                    <div class="col-xs-8">
                        <section class="news">
                            <h4>SRC 소식</h4>
                            <ol>
                                <li><a href="#"><span class="label label-primary">공지사항</span> [공지] 셔틀버스 시간표 변경 안내 [공지] 셔틀버스 시간표 변경 안내 [공지] 셔틀버스 시간표 변경 안내<time>2016-01-23</time></a></li>
                                <li><a href="#"><span class="label">공지사항</span> [공지] 셔틀버스 시간표 변경 안내 <time>2016-01-23</time></a></li>
                                <li><a href="#"><span class="label label-primary">공지사항</span> [공지] 셔틀버스 시간표 변경 안내 <time>2016-01-23</time></a></li>
                                <li><a href="#"><span class="label label-primary">공지사항</span> [공지] 셔틀버스 시간표 변경 안내 <time>2016-01-23</time></a></li>
                                <li><a href="#"><span class="label">공지사항</span> [공지] 셔틀버스 시간표 변경 안내 <time>2016-01-23</time></a></li>
                            </ol>
                            <a href="#"><span class="glyphicon glyphicon-plus"></span><span class="sr-only"></span></a>
                        </section>
                    </div>
                    <div class="col-xs-4">
                        <div class="review">
                            <ul>
                                <li>
                                    <a href="#">
                                        <h3>치료후기</h3>
                                        <p>
                                            대학병원의 1분 진료와는 다르게
                                            아이의 이곳저곳을 만져주시고 상담해주시는 
                                            진료내용에 한 번 더 안심이 되었습니다 
                                        </p>
                                        <span>소아낮병동 보호자 양ㅇㅇ님</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>치료후기</h3>
                                        <p>
                                            대학병원의 1분 진료와는 다르게 
                                            아이의 이곳저곳을 만져주시고 상담해주시는 
                                            진료내용에 한 번 더 안심이 되었습니다 
                                        </p>
                                        <span>소아낮병동 보호자 양ㅇㅇ님</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <h3>치료후기</h3>
                                        <p>
                                            대학병원의 1분 진료와는 다르게 
                                            아이의 이곳저곳을 만져주시고 상담해주시는 
                                            진료내용에 한 번 더 안심이 되었습니다 
                                        </p>
                                        <span>소아낮병동 보호자 양ㅇㅇ님</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <section class="bus">
                            <h4>셔틀버스 노선표</h4>
                            <p>보다 편리한 SRC재활병원 이용을 위해<br>무료 셔틀버스를 운행하고 있습니다.</p>
                            <a href="#">노선표 보러가기</a>
                        </section>
                    </div>
                    <div class="col-xs-4">
                        <div class="movie">
                            <a href="#">
                                <img src="/images/main/img_movie.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="social">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#social-naver" aria-controls="social-naver" role="tab" data-toggle="tab">NAVER BLOG</a></li>
                                <li role="presentation"><a href="#social-facebook" aria-controls="social-facebook" role="tab" data-toggle="tab"><img src="/images/ico_facebook.gif" alt="FACEBOOK" width="40"></a></li>
                                <li role="presentation"><a href="#social-youtube" aria-controls="social-youtube" role="tab" data-toggle="tab"><img src="/images/ico_youtube.gif" alt="YOUTUBE" width="40"></a></li>
                             </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="social-naver">
                                    네이버 블로그
                                </div>
                                <div role="tabpanel" class="tab-pane" id="social-facebook">
                                    페이스북
                                </div>
                                <div role="tabpanel" class="tab-pane" id="social-youtube">
                                    유투브
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="about">
            <div class="container">
                <h3>행복한 SRC재활병원은<br>1961년에 개원한 국내 최고의 전통을 자랑하는<br><b>재활전문 특수진료기관</b>입니다.</h3>
            </div>
        </section>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_main.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
