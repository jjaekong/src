<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/community.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="community news-write">
		<div class="page-title">
			<h2>병원소식</h2>
		</div>
		<section class="write">
			<div class="container">
				<form class="write-form">
					<div class="form-group">
						<table>
							<colgroup>
								<col style="min-width: 30%" />
								<col style="min-width: 70%" />
							</colgroup>
							<tbody>
								<tr>
									<th class="col-sm-2 control-label"><label for="user-name">작성자</label></th>
									<td class="col-sm-10"><input type="text" class="form-control" id="user-name"></td>
								</tr>
								<tr>
									<th class="col-sm-2 control-label"><label for="password">비밀번호</label></th>
									<td class="col-sm-10"><input type="password" class="form-control" id="password"></td>
								</tr>
								<tr>
									<th class="col-sm-2 control-label"><label for="subject">제목</label></th>
									<td class="col-sm-10"><input type="text" class="form-control" id="subject"></td>
								</tr>
								<tr>
									<td colspan="2" class="col-sm-10"><textarea class="form-control"></textarea></td>
								</tr>
								<tr>
									<th class="col-sm-2 control-label"><label for="file">첨부파일</label></th>
									<td class="col-sm-10"><input type="file" class="form-control" id="file"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</form>
				<div class="btn-area">
					<p>
						<a href="#" class="btn btn-pink">완료</a>
						<a href="#" class="btn btn-gray">목록</a>
					</p>
				</div>
			</div>
		</section>
	</main>
<style>
/* news-write */
.community.news-write .write .write-form {margin-top:20px; }
.community.news-write .write .write-form .form-group table {border-top:2px solid #444; width:100%; }
.community.news-write .write .write-form .form-group table tr {border-bottom:1px solid #f3f3f3; height:40px; }
.community.news-write .write .write-form .form-group table tr th {background-color:#f7f7f7; vertical-align:middle; line-height:40px; width:30%; font-size:12px; color:#444; font-weight:normal; }
.community.news-write .write .write-form .form-group table tr th label {font-weight:normal; }
.community.news-write .write .write-form .form-group table tr td {padding:6px 0 6px 10px; }
.community.news-write .write .write-form .form-group table tr td input {width:60%; border-radius:0; }
.community.news-write .write .write-form .form-group table tr:nth-of-type(3) td input {width:95%; border-radius:0; }
.community.news-write .write .write-form .form-group table tr:nth-of-type(4) td {padding:6px 0; }
.community.news-write .write .write-form .form-group table tr:nth-of-type(4) {height:142px; }
.community.news-write .write .write-form .form-group table tr:nth-of-type(4) td textarea {border-radius:0; height:130px; }
.community.news-write .write .write-form .form-group table tr:nth-of-type(5) td input {width:100px; height:35px;  }

.community.news-write .write .btn-area {overflow:hidden; padding:30px 0 60px 0; }
.community.news-write .write .btn-area p {float:right; }
.community.news-write .write .btn-area p a {min-width:70px !important; margin-left:10px !important; font-size:12px; }
.community.news-write .write .btn-area p a:first-child {min-width:70px !important; margin-left:0px !important; }
</style>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>