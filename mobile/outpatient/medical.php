<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/outpatient.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="introduce medical">
		<div class="page-title">
			<h2>
				진료안내<br>
				<small>Medical Information</small>
			</h2>
		</div>
		<section class="medical-intro">
			<div class="container">
				<div class="section-header">
					<h3>외래진료안내</h3>
				</div>
				<div class="section-content">
					<ol>
						<li>
							<img class="img-responsive" src="/mobile/images/outpatient/medical_img1.png" alt="내원 (팩스)" />	
							<p>내원 (팩스)</p>
						</li>
						<li>
							<img class="img-responsive" src="/mobile/images/outpatient/medical_img2.png" alt="원무부에서 진료신청서작성" />	
							<p>원무부에서<br>진료신청서작성</p>
						</li>
						<li>
							<img class="img-responsive" src="/mobile/images/outpatient/medical_img3.png" alt="내원 (팩스)" />	
							<p>내원 (팩스)</p>
						</li>
						<li>
							<img class="img-responsive" src="/mobile/images/outpatient/medical_img4.png" alt="내원 (팩스)" />	
							<p>내원 (팩스)</p>
						</li>
						<li>
							<img class="img-responsive" src="/mobile/images/outpatient/medical_img5.png" alt="내원 (팩스)" />	
							<p>내원 (팩스)</p>
						</li>
						<li>
							<img class="img-responsive" src="/mobile/images/outpatient/medical_img6.png" alt="내원 (팩스)" />	
							<p>내원 (팩스)</p>
						</li>
					</ol>

					<h4>외래진료 접수시 환전본인 신분증 제출<br>(의료보험카드, 주민등록증, 여권)</h4>
					<dl>
						<dt>초진시</dt>
						<dd>진료신청서 작성 후 접수</dd>
						<dt>재진시</dt>
						<dd>환자분 확인 후 접수 (친족 외 타인 명의 접수 불가)</dd>
					</dl>

					<h4>환자 친족 (배우자, 직계존속ㆍ비속)이 신청하는 경우</h4>
					<p>신청인 신분증, 가족관계 증명서 혹은 주민등록등본 서류<br>(의료보험증 인정 안됨)</p>
					<p>환자 자필 서명동의서, 환자 신분증 사본</p>
				</div>
			</div>
		</section>
		<section class="schedule">
			<div class="container">
				<div class="section-header">
					<h3>외래 진료시간표</h3>
					<p>12:00~13:00 까지 점심시간입니다.</p>
				</div>
				<div class="section-content">
					<div class="morning">
						<h4>오전</h4>
						<div class="table-wrap">
							<table class="table">
								<colgroup>
									<col style="width: 35px">
									<col style="width: 53px">
									<col style="width: 53px">
									<col style="width: 53px">
									<col style="width: 53px">
									<col style="width: 53px">
								</colgroup>
								<thead>
									<tr>
										<th>진료<br>시간</th>
										<th>1진료실</th>
										<th>2진료실</th>
										<th>3진료실</th>
										<th>4진료실</th>
										<th>5진료실</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>셀내용1</td>
										<td>셀내용2</td>
										<td>셀내용3</td>
										<td>셀내용4</td>
										<td>셀내용5</td>
										<td>셀내용5</td>
									</tr>
									<tr>
										<td>셀내용1</td>
										<td>셀내용2</td>
										<td>셀내용3</td>
										<td>셀내용4</td>
										<td>셀내용5</td>
										<td>셀내용5</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="afternoon">
						<h4>오후</h4>
						<div class="table-wrap">
							<table class="table">
								<colgroup>
									<col style="width: 100px">
									<col>
									<col>
									<col>
									<col>
									<col>
								</colgroup>
								<thead>
									<tr>
										<th>셀제목1</th>
										<th>셀제목2</th>
										<th>셀제목3</th>
										<th>셀제목4</th>
										<th>셀제목5</th>
										<th>셀제목5</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>셀내용1</td>
										<td>셀내용2</td>
										<td>셀내용3</td>
										<td>셀내용4</td>
										<td>셀내용5</td>
										<td>셀내용5</td>
									</tr>
									<tr>
										<td>셀내용1</td>
										<td>셀내용2</td>
										<td>셀내용3</td>
										<td>셀내용4</td>
										<td>셀내용5</td>
										<td>셀내용5</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
<style type="text/css">
/* medical */
.introduce.medical .medical-intro .section-content ol {overflow:hidden; width:100%; }
.introduce.medical .medical-intro .section-content ol li {width:50%; text-align:center; display:inline-block; padding:0 23px; }
.introduce.medical .medical-intro .section-content ol li:nth-of-type(1) {
	float:left;
	padding-bottom:40px;
	background-image:url("/mobile/images/outpatient/right_arrow.png");
	background-size:7px auto;
	background-position:100% 40%;
	background-repeat:no-repeat;
}
.introduce.medical .medical-intro .section-content ol li:nth-of-type(2) {
	float:right;
	background-image:url("/mobile/images/outpatient/bottom_arrow.png");
	background-size:auto 7px;
	background-position:50% 100%;
	background-repeat:no-repeat;
	padding-bottom:20px;
}
.introduce.medical .medical-intro .section-content ol li:nth-of-type(3) {
	float:right; 
	padding-top:20px;
	background-image:url("/mobile/images/outpatient/left_arrow.png");
	background-size:7px auto;
	background-position:0 50%;
	background-repeat:no-repeat;

}
.introduce.medical .medical-intro .section-content ol li:nth-of-type(4) {
	float:left; 
	padding-top:20px; 
}
.introduce.medical .medical-intro .section-content ol li:nth-of-type(5) {
	clear:both;
	float:left; 
}
.introduce.medical .medical-intro .section-content ol li:nth-of-type(6) {
	float:right; 
}

.introduce.medical .medical-intro .section-content h4 {font-size:13px; color:#333; line-height:21px; text-align:left; font-weight:300; margin-top:30px; }
.introduce.medical .medical-intro .section-content dl {overflow:hidden; margin-top:30px; }
.introduce.medical .medical-intro .section-content dl dt {position:relative; float:left; padding:0 10px 0 15px; font-size:12px; color:#333; font-weight:300; }
.introduce.medical .medical-intro .section-content dl dt:before {position:absolute; top:0; left:0; content:"▶"; color:#e9193a; font-size:10px; }
.introduce.medical .medical-intro .section-content dl dt:after {position:absolute; top:0; right:0; content:":"; font-weight:300; }
.introduce.medical .medical-intro .section-content dl dd {font-size:12px; color:#666; padding-left:65px; }
.introduce.medical .medical-intro .section-content dl dd:nth-of-type(1) {margin-bottom:10px; }
.introduce.medical .medical-intro .section-content h4:nth-of-type(2) {margin:60px 0 30px 0; }
.introduce.medical .medical-intro .section-content p {position:relative; padding:0 10px 0 15px; font-size:12px; color:#333; font-size:12px; }
.introduce.medical .medical-intro .section-content p:nth-of-type(1) {margin-bottom:10px; }
.introduce.medical .medical-intro .section-content p:before {position:absolute; top:0; left:0; content:"▶"; color:#e9193a; font-size:10px; }

.introduce.medical .schedule .section-header {margin-top:60px; }
.introduce.medical .schedule .section-header p {position:relative; padding-left:15px; font-size:12px; color:#666; margin:10px 0 0 0; }
.introduce.medical .schedule .section-header p:before {position:absolute; top:0; left:0; content:"※"; }

.introduce.medical .schedule .section-content {margin-top:30px; }
.introduce.medical .schedule .section-content h4 {position:relative; padding-left:15px; font-size:12px; color:#333; margin:10px 0 0 0; }
.introduce.medical .schedule .section-content h4:before {position:absolute; top:0; left:0; content:"▶"; color:#e9193a; font-size:10px; }


.introduce.medical .schedule .section-content .morning .table-wrap .table { 

}
.introduce.medical .schedule .section-content .morning .table-wrap .table tr th{ 
	font-size:12px;
	letter-spacing:-2px;
	vertical-align:middle;
}
.introduce.medical .schedule .section-content .afternoon .table-wrap .table {

}
.introduce.medical .schedule .section-content .afternoon .table-wrap .table {

}



</style>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>