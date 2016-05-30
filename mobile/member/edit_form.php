<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/member.css" rel="stylesheet" />
</head>
<body>
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
	<main id="content" class="member edit-form">
		<div class="page-title">
			<h2>개인정보수정<br>
				<small>Modify</small>
			</h2>
		</div>
		<div class="container">
			<section class="edit">
				<div class="section-header">
					<h3>회원정보 입력</h3>
					<p>아래의 정보를 빠짐없이 입력해주세요.</p>
				</div>
				<div class="section-content">
					<form class="join-write">
						<table>
							<colgroup>
								<col style="min-width: 80px" />
								<col style="min-width: 220px" />
							</colgroup>
							<tbody>
								<tr>
									<th><label for="user-id">아이디</label></th>
									<td>
										test
									</td>
								</tr>
								<tr>
									<th><label for="user-name">이름</label></th>
									<td>
										테스트
									</td>
								</tr>
								<tr>
									<th><label for="password">비밀번호</label></th>
									<td>
										<input type="password" class="form-control" id="password">
									</td>
								</tr>
								<tr>
									<th><label for="pw-check">비밀번호<br>확인</label></th>
									<td>
										<input type="password" class="form-control" id="pw-check">
									</td>
								</tr>
								<tr>
									<th><label for="email-addr">이메일</label></th>
									<td>
										<input type="email" class="form-control" name="email" id="email-addr">@
										<label><input type="email" class="form-control" name="email" id="email-domain"></label>
									</td>
								</tr>
								<tr>
									<th><label for="birthdate">생년월일</label></th>
									<td>
										<input type="text" class="form-control" id="birthdate">
										<div class="btn-area">
											<p>
												<a href="#"><img src="/mobile/images/member/join_img.png" alt="달력"></a>
											</p>
										</div>
									</td>
								</tr>
								<tr>
									<th>성별</th>
									<td>
										<label><input type="radio" name="sex" id="sex" checked>&nbsp;남자</label>
										<label><input type="radio" name="sex" id="woman">&nbsp;여자</label>
									</td>
								</tr>
								<tr>
									<th><label for="address">주소</label></th>
									<td>
										<input type="text" class="form-control" name="address" id="address">
										<div class="btn-area">
											<p>
												<a href="#" class="btn btn-gray">우편번호 검색</a>
											</p>
										</div>
										<label><input type="text" class="form-control" name="address" id="detailed-addr"></label>
										<label><input type="text" class="form-control" name="address" id="house-number"></label>
									</td>
								</tr>
								<tr>
									<th><label for="tel">전화번호</label></th> 
									<td>
										<input type="text" class="form-control" name="tel" id="tel">-
										<label><input type="text" class="form-control" name="tel" id="tel2">-</label>
										<label><input type="text" class="form-control" name="tel" id="tel3"></label>
									</td>
								</tr>
								<tr>
									<th><label for="phone">휴대전화</label></th>
									<td>
										<input type="text" class="form-control" name="phone" id="phone">-
										<label><input type="text" class="form-control" name="phone" id="phone2">-</label>
										<label><input type="text" class="form-control" name="phone" id="phone3"></label>
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</section>
			<div class="btn-area">
				<p>
					<a href="#" class="btn btn-pink">이전으로</a>
					<a href="#" class="btn btn-gray">수정완료</a>
				</p>
			</div>
		</div>
	</main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>