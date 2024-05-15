@extends('layouts.app')
@section('content')

    <div class="profile-full-name">
        <span class="text-semibold"></span>Hotel Alvear
    </div>
    <div class="profile-row">
			<div class="left-col">
				<div class="profile-block">
					<div class="panel profile-photo">
						<img src="{{ asset('assets/demo/avatars/aloha.jpg') }}" alt="">
					</div><br>
					<a href="#" class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Inventario</a>&nbsp;&nbsp;
					<a href="#" class="btn"><i class="fa fa-comment"></i></a>
				</div>
				
				<div class="panel panel-transparent">
					<div class="panel-heading">
						<span class="panel-title">Descripción</span>
					</div>
					<div class="panel-body">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <a href="#">dolore magna</a> aliqua.
					</div>
				</div>

				<div class="panel panel-transparent">
					<div class="panel-heading">
						<span class="panel-title">Estadísticas</span>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item"><strong>126</strong> Habitaciones</a>
						<a href="#" class="list-group-item"><strong>57</strong> Reservas / Sem.</a>
						<a href="#" class="list-group-item"><strong>100</strong> Reservas / Mes.</a>
					</div>
				</div>

				<div class="panel panel-transparent profile-skills">
					<div class="panel-heading">
						<span class="panel-title">Palabras Clave</span>
					</div>
					<div class="panel-body">
						<span class="label label-primary">Flexible</span>
						<span class="label label-primary">Desayuno</span>
						<span class="label label-primary">Parqueadero</span>
						<span class="label label-primary">Piscina</span>
						<span class="label label-primary">Descuentos</span>
					</div>
				</div>

				<div class="panel panel-transparent">
					<div class="panel-heading">
						<span class="panel-title">Social</span>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item"><i class="profile-list-icon fa fa-twitter" style="color: #4ab6d5"></i> @AlvearHotel</a>
						<a href="#" class="list-group-item"><i class="profile-list-icon fa fa-facebook-square" style="color: #1a7ab9"></i> Alvear</a>
						<a href="#" class="list-group-item"><i class="profile-list-icon fa fa-envelope" style="color: #888"></i> reservas@Alvear.com</a>
					</div>
				</div>

			</div>
			<div class="right-col">

				<hr class="profile-content-hr no-grid-gutter-h">
				
				<div class="profile-content">

					<ul id="profile-tabs" class="nav nav-tabs">
						<li>
							<a href="#profile-tabs-board" data-toggle="tab">Mensajes</a>
						</li>
						<li  class="active">
							<a href="#profile-tabs-activity" data-toggle="tab">Información</a>
						</li>
						<li>
							<a href="#profile-tabs-followers" data-toggle="tab">Niveles - Zonas</a>
						</li>
						<li>
							<a href="#profile-tabs-following" data-toggle="tab">Categorías</a>
						</li>
					</ul>

					<div class="tab-content tab-content-bordered panel-padding">
						<div class="widget-article-comments tab-pane panel no-padding no-border fade" id="profile-tabs-board">
							<div class="comment">
								<img src="assets/demo/avatars/1.jpg" alt="" class="comment-avatar">
								<div class="comment-body">
									<form action="" id="leave-comment-form" class="comment-text no-padding no-border">
										<textarea class="form-control" rows="1"></textarea>
										<div class="expanding-input-hidden" style="margin-top: 10px;">
											<label class="checkbox-inline pull-left">
												<input type="checkbox" class="px">
												<span class="lbl">Private message</span>
											</label>
											<button class="btn btn-primary pull-right">Leave Message</button>
										</div>
									</form>
								</div> <!-- / .comment-body -->
							</div>

							<hr class="no-panel-padding-h panel-wide">

							<div class="comment">
								<img src="assets/demo/avatars/2.jpg" alt="" class="comment-avatar">
								<div class="comment-body">
									<div class="comment-text">
										<div class="comment-heading">
											<a href="#" title="">Robert Jang</a><span>14 hours ago</span>
										</div>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
									</div>
									<div class="comment-footer">
										<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
										<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
										&nbsp;&nbsp;·&nbsp;&nbsp;
										<a href="#">Reply</a>
									</div>
								</div> <!-- / .comment-body -->

								<div class="comment">
									<img src="assets/demo/avatars/4.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-text">
											<div class="comment-heading">
												<a href="#" title="">Timothy Owens</a><span>14 hours ago</span>
											</div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-footer">
											<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
											<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
											&nbsp;&nbsp;·&nbsp;&nbsp;
											<a href="#">Reply</a>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="assets/demo/avatars/5.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-text">
											<div class="comment-heading">
												<a href="#" title="">Denise Steiner</a><span>14 hours ago</span>
											</div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-footer">
											<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
											<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
											&nbsp;&nbsp;·&nbsp;&nbsp;
											<a href="#">Reply</a>
										</div>
									</div> <!-- / .comment-body -->

									<div class="comment">
										<img src="assets/demo/avatars/1.jpg" alt="" class="comment-avatar">
										<div class="comment-body">
											<div class="comment-text">
												<div class="comment-heading">
													<a href="#" title="">John Doe</a><span>14 hours ago</span>
												</div>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</div>
											<div class="comment-footer">
												<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
												<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												<a href="#">Reply</a>
											</div>
										</div> <!-- / .comment-body -->
									</div> <!-- / .comment -->
								</div> <!-- / .comment -->
							</div> <!-- / .comment -->

							<div class="comment">
								<img src="assets/demo/avatars/3.jpg" alt="" class="comment-avatar">
								<div class="comment-body">
									<div class="comment-text">
										<div class="comment-heading">
											<a href="#" title="">Michelle Bortz</a><span>14 hours ago</span>
										</div>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
									</div>
									<div class="comment-footer">
										<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
										<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
										&nbsp;&nbsp;·&nbsp;&nbsp;
										<a href="#">Reply</a>
									</div>
								</div> <!-- / .comment-body -->
							</div> <!-- / .comment -->

							<div class="comment">
								<img src="assets/demo/avatars/2.jpg" alt="" class="comment-avatar">
								<div class="comment-body">
									<div class="comment-text">
										<div class="comment-heading">
											<a href="#" title="">Robert Jang</a><span>14 hours ago</span>
										</div>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
									</div>
									<div class="comment-footer">
										<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
										<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
										&nbsp;&nbsp;·&nbsp;&nbsp;
										<a href="#">Reply</a>
									</div>
								</div> <!-- / .comment-body -->

								<div class="comment">
									<img src="assets/demo/avatars/4.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-text">
											<div class="comment-heading">
												<a href="#" title="">Timothy Owens</a><span>14 hours ago</span>
											</div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-footer">
											<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
											<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
											&nbsp;&nbsp;·&nbsp;&nbsp;
											<a href="#">Reply</a>
										</div>
									</div> <!-- / .comment-body -->
								</div> <!-- / .comment -->

								<div class="comment">
									<img src="assets/demo/avatars/5.jpg" alt="" class="comment-avatar">
									<div class="comment-body">
										<div class="comment-text">
											<div class="comment-heading">
												<a href="#" title="">Denise Steiner</a><span>14 hours ago</span>
											</div>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
										</div>
										<div class="comment-footer">
											<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
											<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
											&nbsp;&nbsp;·&nbsp;&nbsp;
											<a href="#">Reply</a>
										</div>
									</div> <!-- / .comment-body -->

									<div class="comment">
										<img src="assets/demo/avatars/1.jpg" alt="" class="comment-avatar">
										<div class="comment-body">
											<div class="comment-text">
												<div class="comment-heading">
													<a href="#" title="">John Doe</a><span>14 hours ago</span>
												</div>
												Lorem ipsum dolor sit amet, consectetur adipisicing elit.
											</div>
											<div class="comment-footer">
												<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
												<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
												&nbsp;&nbsp;·&nbsp;&nbsp;
												<a href="#">Reply</a>
											</div>
										</div> <!-- / .comment-body -->
									</div> <!-- / .comment -->
								</div> <!-- / .comment -->
							</div> <!-- / .comment -->

							<div class="comment">
								<img src="assets/demo/avatars/3.jpg" alt="" class="comment-avatar">
								<div class="comment-body">
									<div class="comment-text">
										<div class="comment-heading">
											<a href="#" title="">Michelle Bortz</a><span>14 hours ago</span>
										</div>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.
									</div>
									<div class="comment-footer">
										<a href="#"><i class="fa fa-thumbs-o-up"></i></a>&nbsp;&nbsp;
										<a href="#"><i class="fa fa-thumbs-o-down"></i></a>
										&nbsp;&nbsp;·&nbsp;&nbsp;
										<a href="#">Reply</a>
									</div>
								</div> <!-- / .comment-body -->
							</div> <!-- / .comment -->

						</div> <!-- / .tab-pane -->
						<div class="tab-pane fade in active" id="profile-tabs-activity">
							<div class="comment">
                                <div class="row">
                                    <div class="panel-body">
                                        <div class="form-group col-sm-6">
                                                <label for="inputEmail2" class="col-sm-3 control-label">Nombre</label>
                                                <div class="col-sm-9">
                                                    Hotel Alvear
                                                </div>
                                        </div><!-- / .form-group -->
                                        <div class="form-group col-sm-6">
                                            <label for="inputEmail2" class="col-sm-3 control-label">Nombre</label>
                                            <div class="col-sm-9">
                                                Hotel Alvear
                                            </div>
                                        </div><!-- / .form-group -->
                                        <div class="form-group col-sm-6">
                                                <label for="inputEmail2" class="col-sm-3 control-label">NIT</label>
                                                <div class="col-sm-9">
                                                    9004987454 - 2
                                                </div>
                                        </div><!-- / .form-group -->
                                        <div class="form-group col-sm-6">
                                            <label for="inputEmail2" class="col-sm-3 control-label">Página WEB</label>
                                            <div class="col-sm-9">
                                                www.hotelalvear.com.ar
                                            </div>
                                        </div><!-- / .form-group -->
                                        <div class="form-group col-sm-6">
                                                <label for="inputEmail2" class="col-sm-3 control-label">Dirección</label>
                                                <div class="col-sm-9">
                                                    Kr 56 No 67 - 78 
                                                </div>
                                        </div><!-- / .form-group -->
                                        <div class="form-group col-sm-6">
                                            <label for="inputEmail2" class="col-sm-3 control-label">Teléfono</label>
                                            <div class="col-sm-9">
                                                321 7634763
                                            </div>
                                        </div><!-- / .form-group -->
                                        <div class="form-group col-sm-6">
                                                <label for="inputEmail2" class="col-sm-3 control-label">Niveles - Zonas</label>
                                                <div class="col-sm-9">
                                                    <ul>
                                                        <li>Piso 1 (35)</li>
                                                        <li>Piso 2 (30)</li>
                                                        <li>Piso 3 (5)</li>
                                                    </ul>
                                                </div>
                                        </div><!-- / .form-group -->
                                        <div class="form-group col-sm-6">
                                            <label for="inputEmail2" class="col-sm-3 control-label">Categorías</label>
                                            <div class="col-sm-9">
                                                <ul>
                                                    <li>Básico (40)</li>
                                                    <li>Estandar (20)</li>
                                                    <li>Premium (10)</li>
                                                <ul>
                                            </div>
                                        </div><!-- / .form-group -->
                                        <div class="form-group col-sm-6">
                                                <label for="inputEmail2" class="col-sm-3 control-label">Descripción Corta</label>
                                                <div class="col-sm-9">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                                                </div>
                                        </div><!-- / .form-group -->
                                        <div class="form-group col-sm-6">
                                            <label for="inputEmail2" class="col-sm-3 control-label">Descripción Larga</label>
                                            <div class="col-sm-9">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.    
                                            </div>
                                        </div><!-- / .form-group -->
                                    </div>   
                                </div>
							</div> <!-- / .timeline -->
						</div> <!-- / .tab-pane -->
						<div class="tab-pane fade widget-followers" id="profile-tabs-followers">
							<div class="follower">
								<div class="body">
                                    <div class="follower-controls">
                                        <a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i><span>&nbsp;&nbsp;Nuevo</span></a>
                                    </div>

                                    <ul>
                                        <li><a href="#" class="follower-name">Piso 1 ( 35 )</a></li>
                                        <li><a href="#" class="follower-name">Piso 2 ( 30 )</a></li>
                                        <li><a href="#" class="follower-name">Piso 3 ( 5 )</a></li>
                                    </ul>
                                </div>
							</div>

							
						</div> <!-- / .tab-pane -->
						<div class="tab-pane fade widget-followers" id="profile-tabs-following">
							<div class="follower">
                                <div class="body">
                                    <div class="follower-controls">
                                        <a href="#" class="btn btn-sm btn-success"><i class="fa fa-check"></i><span>&nbsp;&nbsp;Nuevo</span></a>
                                    </div>

                                    <ul>
                                        <li><a href="#" class="follower-name">Básico ( 40 )</a></li>
                                        <li><a href="#" class="follower-name">Estándar ( 20 )</a></li>
                                        <li><a href="#" class="follower-name">Premium ( 10 )</a></li>
                                    </ul>
                                </div>
							</div>

							
						</div> <!-- / .tab-pane -->
					</div> <!-- / .tab-content -->
				</div>
			</div>
		</div>
@endsection