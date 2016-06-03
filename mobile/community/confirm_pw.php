<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/community.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="community confirm-pw">
		<div class="page-title">
			<h2>비밀번호 확인</h2>
		</div>
		<div class="container">
			<div class="pw-check">
				<h4>글작성시 입력하신 비밀번호를 입력해주세요.</h4>
				<form class="pw-input"> 
					<div class="form-group">
						<label class="sr-only" for="user-password">비밀번호</label>
						<input type="password" class="form-control" id="user-password" placeholder="비밀번호를 입력해주세요.">
					</div>
					<div class="btn-area">
						<p>
							<a href="#" class="btn btn-pink">확인</a>
							<a href="#" class="btn btn-gray">취소</a>
						</p>
					</div>
				</form>
			</div>
		</div>
	</main>
<style>
.community.confirm-pw .pw-check {
	padding:30px 0 60px 0;
	background-image:url('/mobile/images/community/community_bg.png');
	background-repeat:no-repeat;
	background-size:99px auto;
	background-position:20% 23%;
}
.community.confirm-pw .pw-check > h4 {
	background-image:url('/mobile/images/community/lock.png');
	background-repeat:no-repeat;
	background-size:24px auto;
	background-position:50% 0;
	text-align:center;
	padding-top:48px;
	font-size:12px; 
	color:#666;
	margin:0;
}
.community.confirm-pw .pw-check .pw-input .form-group {text-align:center;}
.community.confirm-pw .pw-check .pw-input .form-group input { 
	margin:18px 0 20px 0 !important;
	width:200px;
	height:28px;
	border-radius:0;
	display:inline;
	font-size:12px;
}
.community.confirm-pw .pw-check .pw-input .btn-area {
	text-align:center;
}
.community.confirm-pw .pw-check .pw-input .btn-area p .btn {
	min-width:70px !important; 
	height:31px !important;
}
.community.confirm-pw .pw-check .pw-input .btn-area p .btn-pink {margin-right:10px; }


</style>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>