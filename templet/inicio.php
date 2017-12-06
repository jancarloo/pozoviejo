	<div class="row"><div class="carousel_in">
      <div><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/slider/habitacion.jpg" alt=""><div class="caption"><h3>Comodidad</h3></div></div>
      <div><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/slider/boda.jpg" alt=""><div class="caption"><h3>Bodas </h3></div></div>
      <div><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/slider/comida.jpg" alt=""><div class="caption"><h3>Comida </h3></div></div>
	  <div><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/slider/temazcal.jpg" alt=""><div class="caption"><h3>Temazcal</h3></div></div>
      <div><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/slider/cumple.jpg" alt=""><div class="caption"><h3>Cumpleaños</h3></div></div>
      <div><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/slider/piscina.jpg" alt=""><div class="caption"><h3>Piscina</h3></div></div>
      <div><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/slider/visita.jpg" alt=""><div class="caption"><h3>Paseos</h3></div></div>
      
    </div> </div>   

	
	
	
	<div class="container_styled_1">
        <div class="container margin_60">
            <div class="row">
                <div class="col-lg-12">
                    <figure class="room_pic">  
					
					
					
        <div class="col-lg-12">  
            <div id="sub_content"> 
                <div id="book_container">
                    <form method="post" action="assets/check_avail_home.php" id="check_avail_home" autocomplete="off">
                        <div id="group_1">
                            <div id="container_1">
                                <h4 style="color:white;">Llegada</h4>
                            	<input class="startDate1 form-control datepick" type="text" data-field="date" data-startend="start" data-startendelem=".endDate1" readonly placeholder="Arrival" id="check_in" name="check_in">
                            </div>
                            <div id="container_2">
                                <h4 style="color:white;">Salida</h4>
                                 <input class="endDate1 form-control datepick" type="text" data-field="date" data-startend="end" data-startendelem=".startDate1" readonly placeholder="Departure" id="check_out" name="check_out">
                            </div>
                        </div><!-- End group_1 -->
                        <div id="group_2">
                            <div id="container_3">
                                <h4 style="color:white;">Adultos</h4>
                                <div class="qty-buttons">
                                    <input type="button" value="-" class="qtyminus" name="adults">
                                    <input type="text" name="adults" id="adults" value="" class="qty form-control" placeholder="0">
                                    <input type="button" value="+" class="qtyplus" name="adults">
                                </div>
                            </div>
                            <div id="container_4">
                                <h4 style="color:white;">Niños</h4>
                                <div class="qty-buttons">
                                    <input type="button" value="-" class="qtyminus" name="children">
                                    <input type="text" name="children" id="children" value="" class="qty form-control" placeholder="0">
                                    <input type="button" value="+" class="qtyplus" name="children">
                                </div>
                            </div>
                        </div><!-- End group_2 -->
                        <div id="group_3">
                            <div id="container_5">
                                <h4 style="color:white;">Nombre</h4>
                                <input type="text" class="form-control" name="name_booking" id="name_booking" placeholder="Nombres">
                            </div>
                            <div id="container_6">
                                <h4 style="color:white;">Email</h4>
                                <input type="text" class="form-control" name="email_booking" id="email_booking" placeholder="email">
                            </div>
                        </div><!-- End group_3 -->
                        <div id="container_7">
                            <input type="submit" value="Check availability" class="btn_1" id="submit-booking">
                        </div>
                    </form>
                </div><!-- End book_container -->
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
					
					
					</figure>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End container_styled_1 -->
	
	
	
	<!-- SubHeader =============================================== -->
    <div class="row">;<div class="" id="booking" >
        <div class="col-sm-10 col-md-offset-3">  
            <div id="sub_content"> 
                <div id="book_container">
                    <form method="post" action="assets/check_avail_home.php" id="check_avail_home" autocomplete="off">
                        <div id="group_1">
                            <div id="container_1">
                                <label>Arrival date</label>
                            	<input class="startDate1 form-control datepick" type="text" data-field="date" data-startend="start" data-startendelem=".endDate1" readonly placeholder="Arrival" id="check_in" name="check_in">
                                <span class="input-icon"><i class="icon-calendar-7"></i></span>
                            </div>
                            <div id="container_2">
                                <label>Departure date</label>
                                 <input class="endDate1 form-control datepick" type="text" data-field="date" data-startend="end" data-startendelem=".startDate1" readonly placeholder="Departure" id="check_out" name="check_out">
                                <span class="input-icon"><i class="icon-calendar-7"></i></span>
                            </div>
                        </div><!-- End group_1 -->
                        <div id="group_2">
                            <div id="container_3">
                                <label>Adults</label>
                                <div class="qty-buttons">
                                    <input type="button" value="-" class="qtyminus" name="adults">
                                    <input type="text" name="adults" id="adults" value="" class="qty form-control" placeholder="0">
                                    <input type="button" value="+" class="qtyplus" name="adults">
                                </div>
                            </div>
                            <div id="container_4">
                                <label>Children</label>
                                <div class="qty-buttons">
                                    <input type="button" value="-" class="qtyminus" name="children">
                                    <input type="text" name="children" id="children" value="" class="qty form-control" placeholder="0">
                                    <input type="button" value="+" class="qtyplus" name="children">
                                </div>
                            </div>
                        </div><!-- End group_2 -->
                        <div id="group_3">
                            <div id="container_5">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name_booking" id="name_booking" placeholder="Name and Last name">
                            </div>
                            <div id="container_6">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email_booking" id="email_booking" placeholder="Your email">
                            </div>
                        </div><!-- End group_3 -->
                        <div id="container_7">
                            <input type="submit" value="Check availability" class="btn_1" id="submit-booking">
                        </div>
                    </form>
                </div><!-- End book_container -->
            </div><!-- End sub_content -->
        </div><!-- End subheader -->
    </div></div><!-- End parallax-window -->
    <!-- End SubHeader ============================================ -->
	
	<hr>
	
    <div class="container_styled_1">
        <h1 class="main_title"><em></em>Bienvenido a Pozo Viejo <span>Hotel, cama y desayuno</span></h1>
        <p class="lead styled">
            ¿Qué te parece pasar un fin de semana, fecha especial o vacaciones con nosotros?
			Nuestra mayor satisfacción será poder atenderte.
			¡Los esperamos!
        </p>
            <div class="col-sm-6 ">
                <div class="mosaic_container ">
                    <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/glorieta.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Al aire libre</span>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-xs-12">
                    <div class="mosaic_container">
                        <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/mesa.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Sala de Estar</span>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="mosaic_container">
                        <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/bano.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Comodidad</span>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="mosaic_container">
                        <img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/limonada.jpg" alt="" class="img-responsive add_bottom_30"><span class="caption_2">Delicia</span>
                    </div>
                </div>
            </div>
        </div><!-- End row -->
    
    <div class="container_styled_1">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <figure class="room_pic"><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#"><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/cama_individual1.jpg" alt="" class="img-responsive"></a>
                    <?php /*<span class="wow zoomIn"><sup>$</sup>800<small>Por Noche</small></span>*/ ?></figure>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="room_desc_home">
                        <h3>Habitaci&oacute;n individual</h3>
                        <p>
                             Cuando estes de paso, y deseas descansar, ven y si&eacute;ntete en casa con nuestro servicio.
                        </p>
                        <ul>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                <div class="tooltip-content">
                                    Cama king size
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-118"></i></span>
                                <div class="tooltip-content">
                                    Regadera
                                </div>
                            </div>
                            </li>
                            <li>
                            <?php /*<div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                <div class="tooltip-content">
                                    Plasma TV
                                </div>
                            </div>  */ ?>
                            </li>
                        </ul>
                         <?php /*<a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#0" class="btn_1_outline">Read more</a> */ ?>
                    </div><!-- End room_desc_home -->
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End container_styled_1 -->
    
    <div class="container_styled_1">
	<div class="container margin_60">
        <div class="row">
            <div class="col-md-5 col-md-offset-1 col-md-push-5">
                  <figure class="room_pic left"><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#"><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/cama_doble.jpg" alt="" class="img-responsive"></a>
				  <?php /*<span class="wow zoomIn"><sup>$</sup>150<small>Per night</small></span>*/ ?></figure>
            </div>
            <div class="col-md-4 col-md-offset-1 col-md-pull-6">
                <div class="room_desc_home">
                    <h3>Doble Habitaci&oacute;n </h3>
                    <p>
                        Nuestros diferentes servicios estan pensados, para cualquier idea que tengas en mente.
                    </p>
                    <ul>
                        <li>
                        <div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                            <div class="tooltip-content">
                                Cama King size 
                            </div>
                        </div>
                        </li>
                        <li>
                        <?php /*<div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_2_icon-111"></i></span>
                            <div class="tooltip-content">
                                Bathtub
                            </div>
                        </div>*/ ?>
                        </li>
                        <li>
						<div class="tooltip_styled tooltip-effect-4">
							<span class="tooltip-item"><i class="icon_set_2_icon-118"></i></span>
							<div class="tooltip-content">
								Regadera
							</div>
                        </div>
                        <?php /*<div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                            <div class="tooltip-content">
                                Plasma TV
                            </div>
                        </div>*/ ?>
                        </li>
                        <li>
                         <?php /*<div class="tooltip_styled tooltip-effect-4">
                            <span class="tooltip-item"><i class="icon_set_2_icon-106"></i></span>
                            <div class="tooltip-content">
                                Safe box
                            </div>
                        </div>*/ ?>
                        </li>
                    </ul>
                    <?php /* <a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#0" class="btn_1_outline">Read more</a> */ ?>
                </div><!-- End room_desc_home -->
            </div>
        </div><!-- End row -->
    </div><!-- End container -->
    </div><!-- End container -->
    
    <div class="container_styled_1">
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-5 col-md-offset-1">
                    <figure class="room_pic"><a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#"><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/varios.jpg" alt="" class="img-responsive"></a><?php /*<span class="wow zoomIn"><sup>$</sup>190<small>Per night</small></span>*/ ?></figure>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="room_desc_home">
                        <h3> En grupo</h3>
                        <p>
                             Esta habitación es ideal para un grupo de amigos, ánimate y ven a visitarnos.
                        </p>
                        <ul>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-104"></i></span>
                                <div class="tooltip-content">
                                    King size bed
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
							<span class="tooltip-item"><i class="icon_set_2_icon-118"></i></span>
							<div class="tooltip-content">
								Regadera
							</div>
							</div>
                            </li>
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-116"></i></span>
                                <div class="tooltip-content">
                                    TV
                                </div>
                            </div>
                            </li>
                            <li>
                             <?php /*<div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_1_icon-15"></i></span>
                                <div class="tooltip-content">
                                    Welcome bottle
                                </div>
                            </div>*/ ?>
                            </li>
                            <li>
                            <?php /* <div class="tooltip_styled tooltip-effect-4">
                                <span class="tooltip-item"><i class="icon_set_2_icon-106"></i></span>
                                <div class="tooltip-content">
                                    Safe box
                                </div>
                            </div> */ ?>
                            </li>
                        </ul>
                        <?php /* <a href="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>#0" class="btn_1_outline">Read more</a> */ ?>
                    </div><!-- End room_desc_home -->
                </div>
            </div><!-- End row -->
        </div><!-- End container -->
    </div><!-- End container_styled_1 -->
    
    <section class="promo_full">
    <div class="promo_full_wp">
        <div>
            <h3>Comentarios<span>Nos interesa escucharte</span></h3>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="carousel_testimonials">
                        
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/avatar3.jpg" alt="" class="img-circle"></figure>
                                        <h4>Eustoquia Vazquez Rojas<small>6 Noviembre 2017</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Un lugar excelente con atención de maravilla!!! Me gustó muchísimo. En la noche una elegante iluminación en su centro una fuente hermosa simplemente me fascinó. Valió la pena viajar hasta allá y pasar una excelente noche.."
                                    </div>
                                </div><!-- End box_overlay -->
                            </div>
                            
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/avatar2.jpg" alt="" class="img-circle"></figure>
                                        <h4>Moisés Montiel Vázquez<small>2 Abril 2015</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Me gusta muchisimo,es un lugar para olvidarse del stress y disfrutar de la naturaleza y de los bellos paisajes de mi bella Zacapoaxtla Puebla"
                                    </div>
                                </div><!-- End box_overlay -->
                            </div>
                            
                            <div>
                                <div class="box_overlay">
                                    <div class="pic">
                                        <figure><img src="<?php echo RUTA_ACTUAL.BASE_TEMPLET; ?>img/avatarXD.gif" alt="" class="img-circle"></figure>
                                        <h4>Ivie Alcántara<small>10 Abril 2017</small></h4>
                                    </div>
                                    <div class="comment">
                                        "Excelente lugar, la comida simplemente deliciosa. Habitaciones confortables e instalaciones de primera. Un lugar en el que sólo se antoja pasarla bien."
                                    </div>
                                </div><!-- End box_overlay -->
                            </div>
                            
                        </div><!-- End carousel_testimonials -->
                    </div><!-- End col-md-8 -->
                </div><!-- End row -->
            </div><!-- End container -->
        </div><!-- End promo_full_wp -->
    </div><!-- End promo_full -->
    </section><!-- End section -->    
    
    <div id="dtBox"></div><!-- End datepicker -->
    