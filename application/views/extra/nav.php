<nav class="navbar navbar-default <?php if ($page == "/index.php") echo(' navbar-main-index');?>" role="navigation">
	<div class="container text-center">
		<div class="additional-container additional-container-nav ">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					  </button>
					<a class="navbar-brand" href="/">Limea</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li<?php if ($page == "/collect") echo(' class="active"');?> ><a href="/collect">Collect</a></li>
						<li<?php if ($page == "/planning") echo(' class="active"');?> ><a href="/planning">Planning</a></li>
						<li<?php if ($page == "/ads") echo(' class="active"');?> ><a href="/ads">Ads </a></li>
						<li<?php if ($page == "/upload") echo(' class="active"');?> ><a href="/upload">Upload </a></li>
						<li<?php if ($page == "/blog") echo(' class="active"');?> ><a href="/blog">Blog </a></li>
						<li<?php if ($page == "/contacts") echo(' class="active"');?> ><a href="/contacts">Contacts </a></li>
					</ul>

					<?

					if (empty($_SESSION['login']) and empty($_SESSION['password'])) {
						echo '
					<div class="btn-group pull-right contaner-btn-send-keywords">
					  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal1">Войти</button>
					  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2">Регистрация</button>
					</div>
					';
					}
					else {
						echo $_SESSION['login'].'<br><a href="/exit">exit</a>';
					}?>
					<!-- Modal -->
					<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h4 class="modal-title" id="myModalLabel">Вход</h4>
					      </div>
							<form class="form-horizontal" role="form" id="form_autorization" action = "/cabinet" method="post">
							  <div class="modal-body">

								<!--Авторизация -->
								  <div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-10">
									  <input type="email" class="form-control" id="inputEmail3" form="form_autorization" placeholder="Email" name="email_aut" <?if (isset($_COOKIE['login'])) //есть    ли переменная с логином в COOKIE. Должна быть,    если пользователь при предыдущем входе нажал на чекбокс "Запомнить    меня"
										{
										//если да, то вставляем в форму ее значение. При этом    пользователю отображается, что его логин уже вписан в нужную графу
										echo    ' value="'.$_COOKIE['login'].'"';
										}?>>
									</div>
								  </div>
								  <div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" id="inputPassword3" form="form_autorization" placeholder="Password" name="passwors_aut" <? if (isset($_COOKIE['password']))//есть    ли переменная с паролем в COOKIE. Должна быть,    если пользователь при предыдущем входе нажал на чекбокс "Запомнить    меня"
										{
										//если да, то вставляем в форму ее значение. При этом пользователю    отображается, что его пароль уже вписан в нужную графу
										echo    ' value="'.$_COOKIE['password'].'"';
										}?>>
									</div>
								  </div>
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-4">
									  <div class="checkbox">
										<label>
										  <input type="checkbox" form="form_autorization" name="save" value="1"> Запомнить меня

										</label>
									  </div>
									</div>
								  </div>

							  </div>
							  <div class="modal-footer">
									<button type="submit" class="btn btn-success" form="form_autorization">Войти</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
							  </div>
							</form>
					    </div>
					  </div>
					</div>


					<!-- Регистрация -->
					<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					        <h4 class="modal-title" id="myModalLabel">Регистрация</h4>
					      </div>
							<form class="form-horizontal" role="form" action="/registration" method="post" id="form_reg">

								<div class="modal-body">
								  <div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label" >Email</label>
									<div class="col-sm-10">
									  <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email_reg" form="form_reg">
									</div>
								  </div>
								  <div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Пароль</label>
									<div class="col-sm-10">
									  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password_reg" form="form_reg">
									</div>
								  </div>
								  </div>
								  <div class="modal-footer">
									<button type="submit" class="btn btn-success" form="form_reg">Зарегистрироваться</button>
									<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
								  </div>
							</form>
					    </div>
					  </div>
					</div>

				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</div>
	</div>
</nav>