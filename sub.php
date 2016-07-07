<?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/dochead_sub.php'); ?>
<!-- 스타일 추가 -->
<style>
    #content h3 {
        margin-top: 100px;
    }
</style>
<!-- //스타일 추가 --> 
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
    <main id="content" class="introduce about"><!-- 클래스명은 대메뉴 > 서브메뉴명의 방식으로 -->
        <div class="page-header"><!-- 배경은 위의 클래스명을 이용하여 -->
            <h2>병원소개</h2>
            <small>About SRC Hospital</small>
        </div>
        
        <!-- 실제 작업 영역 -->
        <div class="container">
            
            <h3>버튼</h3>
            <div class="btn-area">
                <p>
                    <a href="#" class="btn">a 태그 버튼</a>
                    <button type="button" class="btn">button 태그 버튼</button>
                </p>
            </div>
            
            <h3>테이블(헤더가 위쪽에 있는 경우)</h3>
            <table class="table">
                <colgroup>
                    <col style="width: 200px;">
                    <col>
                    <col>
                    <col>
                    <col>
                </colgroup>
                <thead>
                    <tr>
                        <th>헤더셀#1</th>
                        <th>헤더셀#2</th>
                        <th>헤더셀#3</th>
                        <th>헤더셀#4</th>
                        <th>헤더셀#5</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#">내용셀#1</a></td>
                        <td>내용셀#2</td>
                        <td>내용셀#3</td>
                        <td>내용셀#4</td>
                        <td>내용셀#5</td>
                    </tr>
                    <tr>
                        <td>내용셀#1</td>
                        <td>내용셀#2</td>
                        <td>내용셀#3</td>
                        <td>내용셀#4</td>
                        <td>내용셀#5</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>테이블(헤더가 좌측에 있는 경우)</h3>
            <table class="table">
                <colgroup>
                    <col style="width: 100px;">
                    <col>
                    <col>
                    <col>
                    <col>
                </colgroup>
                <tbody>
                    <tr>
                        <th>내용셀#1</th>
                        <td>내용셀#2</td>
                        <td>내용셀#3</td>
                        <td>내용셀#4</td>
                        <td>내용셀#5</td>
                    </tr>
                    <tr>
                        <th>내용셀#1</th>
                        <td>내용셀#2</td>
                        <td>내용셀#3</td>
                        <td>내용셀#4</td>
                        <td>내용셀#5</td>
                    </tr>
                </tbody>
            </table>
            
            <h3>탭(링크 이동)</h3>
            <ul class="nav nav-pills nav-justified">
                <li role="presentation"><a href="#">탭 #1</a></li>
                <li role="presentation" class="active"><a href="#">탭 #2</a></li>
                <li role="presentation"><a href="#">탭 #3</a></li>
            </ul>
            
            <h3>탭(컨텐츠 변경용, 작동하기 위해서 아이디를 세군데 맞춰줘야 함)</h3>
            <ul class="nav nav-pills nav-justified" role="tablist">
                <li role="presentation"><a href="#nav-content-1" aria-controls="nav-content-1" role="tab" data-toggle="tab">탭 #1</a></li>
                <li role="presentation" class="active"><a href="#nav-content-2" aria-controls="nav-content-2" role="tab" data-toggle="tab">탭 #2</a></li>
                <li role="presentation"><a href="#nav-content-3" aria-controls="nav-content-3" role="tab" data-toggle="tab">탭 #3</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane" id="nav-content-1">탭 컨텐츠 #1</div>
                <div role="tabpanel" class="tab-pane active" id="nav-content-2">탭 컨텐츠 #2</div>
                <div role="tabpanel" class="tab-pane" id="nav-content-3">탭 컨텐츠 #3</div>
            </div>
            
            <h3>페이지네이션</h3>
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
            
            <h3>검색영역(단독)</h3>
            <div class="search-bar">
                <div class="search-form">
                    <form>
                        <div class="form-group">
                            <select class="form-control">
                                <option value="">전체</option>
                            </select>
                            <label for="search-keyword" class="sr-only">검색어</label>
                            <input id="search-keyword" type="text" class="form-control">
                        </div>
                        <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                </div>
            </div>
            
            <h3>필터영역(with 검색영역)</h3>
            <div class="filter-bar" style="margin-bottom: 100px;">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="filter-dropdown">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    분류별 보기 <span class="glyphicon glyphicon-menu-down"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">분류 #1</a></li>
                                    <li><a href="#">분류 #2</a></li>
                                    <li><a href="#">분류 #3</a></li>
                                    <li><a href="#">분류 #4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 text-right">
                        <div class="search-form">
                            <form>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option value="">전체</option>
                                    </select>
                                    <label for="search-keyword" class="sr-only">검색어</label>
                                    <input id="search-keyword" type="text" class="form-control">
                                </div>
                                <button type="submit" class="btn"><span class="glyphicon glyphicon-search"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div style="margin:30px 0">
                <ul class="arrow-list">
                    <li>content</li>
                    <li>content</li>
                    <li>content</li>
                    <li>content</li>
                    <li>content</li>
                </ul>
            </div>
            <div style="margin:30px 0;">
                <div class="panel-group accordion-list" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-1" >
                                    재활병원입니다.
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <h4>정의</h4>
                                <p>척추는 목에서부터</p>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-2" class="collapsed">
                                    제목 #2
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-2" class="panel-collapse collapse">
                            <div class="panel-body">
                                내용 #2
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-3" class="collapsed">
                                    제목 #3
                                </a>
                            </h4>
                        </div>
                        <div id="collapse-3" class="panel-collapse collapse">
                            <div class="panel-body">
                                내용 #3
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section style="margin:30px 0;">
                <div class="section-header">
                    <h2>제목</h2>
                </div>
            </section>
            <dl class="inline-dl">
                <dt>메트 및 이동훈련</dt>
                <dd>
                    서거나 보행을 하기 위해 메트 및 침상에서 이루어지는 기본적인 훈련으로 근력 및 관절가동범위향상, 체간, 및 사진의 움직임향상, 균형능력향상, 돌아눕기, 일어나 앉기, 심폐기능강화등의 훈련을 통하여 일상생활동작 증진과 보행을 위한 기초 훈련을 받습니다.
                </dd>
            </dl>
        </div>
        <!-- // 실제 작업 영역 -->
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/footer_sub.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/inc/docfoot.php'); ?>
</body>
</html>