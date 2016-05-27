<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/customer.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="customer certificate">
		<div class="page-title">
			<h2>제증명서 발급안내</h2>
		</div>
		<div class="container">
			<section class="certificate-info">
				<div class="section-header">
					<h3>제증명 및 진료기록 사본발급 및 열람 신청시 필요 구비서류</h3>
					<p>‘보건복지가족부령 제158호 (의료법 제13조의 2 기록열람등의요건)’ 에 의거하여 아래의 경우에만 사본발급 및 열람이 가능함을 알려드립니다.</p>
				</div>
				<div class="section-content">
					<div class="panel-group accordion-list" id="rules-list">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-1" >
										환자본인
									</a>
								</h4>
							</div>
							<div id="rules-1" class="panel-collapse collapse in">
								<div class="panel-body">
									<h4>환자본인</h4>
									<h5>환자가 만 17세 이상</h5>
									<ol>
										<li>환자 본인의 신분증 (주민등록증, 운전면허증, 여권)</li>
									</ol>
									<h5>환자가 만 14세 이상 ~ 만 17세 이상</h5>
									<ol>
										<li>학생증</li>
									</ol>
									<h5>환자가 만 14세 미만</h5>
									<ol>
										<li>법정대리인 신분증</li>
										<li>가족관계 증명서, 등본 등 법정 대리인을 증명할 수 있는 서류</li>
									</ol>
									<p>의료보험증은 인정안됨</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-2" class="collapsed">
										환자의 친족<br> 배우자, 직계존속ㆍ비속, 배우자의 직계존속
									</a>
								</h4>
							</div>
							<div id="rules-2" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>환자의 친족<br> 배우자, 직계존속ㆍ비속, 배우자의 직계존속</h4>
									<h5>환자가 만 17세 이상</h5>
									<ol>
										<li>환자의 신분증 사본</li>
										<li>신청자의 신분증 사본</li>
										<li>가족관계 증명서, 등본 등 친족 관계를 확인할 수 있는 서류</li>
										<li>환자 자필서명 동의서</li>
									</ol>
									<h5>환자가 만 14세 이상 ~ 만 17세 이상</h5>
									<ol>
										<li>환자의 신분증 사본(학생증)</li>
										<li>신청자의 신분증 사본</li>
										<li>가족관계 증명서, 등본 등 친족 관계를 확인할 수 있는 서류</li>
										<li>환자 자필서명 동의서</li>
									</ol>
									<h5>환자가 만 14세 미만</h5>
									<ol>
										<li>법정대리인 신분증</li>
										<li>가족관계 증명서, 등본 등 법정 대리인을 증명할 수 있는 서류</li>
									</ol>
									<p>의료보험증은 인정안됨</p>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-3" class="collapsed">
										제 3자(대리인)
									</a>
								</h4>
							</div>
							<div id="rules-3" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>제 3자(대리인)</h4>
									<h5>환자가 만 17세 이상</h5>
									<ol>
										<li>환자의 신분증 사본</li>
										<li>신청자의 신분증 사본</li>
										<li>환자 자필서명 동의서</li>
										<li>환자 자필서명 위임장</li>
									</ol>
									<h5>환자가 만 14세 이상 ~ 만 17세 이상</h5>
									<ol>
										<li>환자의 신분증 사본</li>
										<li>신청자의 신분증 사본</li>
										<li>환자 자필서명 동의서</li>
										<li>환자 자필서명 위임장</li>
									</ol>
									<h5>환자가 만 14세 미만</h5>
									<ol>
										<li>법정대리인 신분증</li>
										<li>가족관계 증명서, 등본 등 법정 대리인을 증명할 수 있는 서류<p>의료보험증은 인정안됨</p></li>
										<li>법정대리인 자필서명 동의서</li>
										<li>법정대리인 자필서명 위임장</li>
									</ol>
									
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-4" class="collapsed">
										환자가 군복무중인 경우 (친족)
									</a>
								</h4>
							</div>
							<div id="rules-4" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>환자가 군복무중인 경우 (친족)</h4>
									<h5>환자가 만 17세 이상</h5>
									<ol>
										<li>신청인의 신분증</li>
										<li>가족관계 증명서, 등본 등 친족 관계를 확인할 수 있는 서류</li>
										<li>병적증명서 또는 복무확인서</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-5" class="collapsed">
										환자가 사망한 경우
									</a>
								</h4>
							</div>
							<div id="rules-5" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>환자가 사망한 경우</h4>
									<ol>
										<li>신청인의 신분증</li>
										<li>가족관계 증명서, 등본 등 친족관계를 확인할 수 있는 서류</li>
										<li>사망진단서 또는 제적등본</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-6" class="collapsed">
										환자가 의식불명 또는 의식불명은<br> 아니지만 중증의 질환·부상으로 자필서명을<br> 할 수 없는 경우
									</a>
								</h4>
							</div>
							<div id="rules-6" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>환자가 의식불명 또는 의식불명은 아니지만 중증의 질환·부상으로 자필서명을 할 수 없는 경우</h4>
									<ol>
										<li>신청인의 신분증</li>
										<li>가족관계 증명서, 등본 등 친족관계를 확인할 수 있는 서류</li>
										<li>주민등록등본, 법원의 실종선고 결정문 사본 등 행방불명 사실을 확인할 수 있는 서류</li>
									</ol>
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a role="button" data-toggle="collapse" data-parent="#rules-list" href="#rules-7" class="collapsed">
										환자가 행방불명인 경우
									</a>
								</h4>
							</div>
							<div id="rules-7" class="panel-collapse collapse">
								<div class="panel-body">
									<h4>환자가 행방불명인 경우</h4>
									<ol>
										<li>신청인의 신분증</li>
										<li>가족관계 증명서, 등본 등 친족관계를 확인할 수 있는 서류</li>
										<li>주민등록등본, 법원의 실종선고 결정문 사본 등 행방불명 사실을 확인할 수 있는 서류</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="btn-area">
					<p>
						<a href="#" class="btn btn-pink">동의서 다운로드</a>
						<a href="#" class="btn btn-gray">위임장 다운로드</a>
					</p>
				</div>
			</section>
			<section class="outpatients">
				<div class="section-header">
					<h4>증명서 발급 절차안내 (외래환자)</h4>
				</div>
				<div class="section-content">
					
				</div>
			</section>
		</div>
	</main>
<style>
.customer.certificate .certificate-info .section-header {padding:20px 0; }
.customer.certificate .certificate-info .section-header h3 {background:none !important; }
.customer.certificate .certificate-info .section-header p {color:#666; font-size:12px; line-height:18px; margin-top:14px; }

/* certificate */
/* panel-group */
.customer.certificate .certificate-info .section-content .panel-group .panel .panel-heading h4 a {padding:20px; }
.customer.certificate .certificate-info .section-content .panel-group .panel .panel-body {padding:20px 10px; }
.customer.certificate .certificate-info .section-content .panel-group .panel .panel-body h4 {
	padding-top: 20px;
    margin-top: 0;
    margin-bottom: 0;
    font-size: 14px;
    color: #e9193a;
    line-height: 23px;
    background-image: url("/mobile/images/ico_section_header.png");
    background-size: 20px auto;
    background-repeat: no-repeat;
}
.customer.certificate .certificate-info .section-content .panel-group .panel .panel-body h5 {margin-top:60px; font-size:13px; color:#333; }
.customer.certificate .certificate-info .section-content .panel-group .panel .panel-body h5:nth-of-type(1) {margin-top:30px; }
.customer.certificate .certificate-info .section-content .panel-group .panel .panel-body ol li {position:relative; margin-top:10px; font-size:12px; color:#666; padding-left:15px; }
.customer.certificate .certificate-info .section-content .panel-group .panel .panel-body ol li:before {
	position:absolute; 
	top:0; left:0; 
	content:"▶"; 
	font-size:10px; 
	color: #e9193a;
}
.customer.certificate .certificate-info .section-content .panel-group .panel .panel-body p {position:relative; font-size:12px; color:#666; padding-left:15px; }
.customer.certificate .certificate-info .section-content .panel-group .panel .panel-body p:before {
	position:absolute; 
	top:0; left:0; 
	content:"*"; 
}

.customer.certificate .container .btn-area {margin:20px 0 60px 0; }
.customer.certificate .container .btn-area .btn-pink {
	background-image:url("/mobile/images/customer/down_bg.png"); 
	background-size:9px auto; 
	background-position:8px 11px; 
	background-repeat:no-repeat; 
	padding-left:20px;
	margin-right:10px;
}
.customer.certificate .container .btn-area .btn-gray { 
	background-image:url("/mobile/images/customer/down_bg.png"); 
	background-size:9px auto; 
	background-position:8px 11px; 
	background-repeat:no-repeat; 
	padding-left:20px;
}

.customer.certificate .outpatients .section-header h4 {background:none !important; padding:0 !important; }










</style>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>
		
