<?php
require_once 'header.php';
?>
      
       	<!-- MAIN SLIDER -->
    	<section id="main-slider" class="fixed-height"  >      	
            
            <!-- MAIN SLIDER TITLE OUTTER WRAPPER -->
        	<div class="slide-title-outter-wrapper">
            	
            	<!-- MAIN SLIDER TITLE INNER WRAPPER -->
				<div class="slide-title-inner-wrapper">
                            	
					<!-- TITLE 1  -->
					<div class="slide-title align-bottom">
                                	
						<div class="container">
                        	<div class="row">
                        		<div class="col-md-offset-2 col-md-8">                                     
                                     
                                    <div class="page-title">
                                		<h1>RSVP</h1>
                               		
                                        <div class="heart-divider">
                                    		<span class="white-line"></span>
                                        	<i class="de-icon-heart pink-heart"></i>
                                        	<i class="de-icon-heart white-heart"></i>
                                        	<span class="white-line"></span>
                                   		</div>
                                    	
                                        <p>Confirme sua presença</p>
                                    </div>
                                   
								</div>
							</div>
						</div>
                                    
					</div>
                                
				</div><!-- END of MAIN SLIDER TITLE INNER WRAPPER -->
                
			</div> <!-- END of MAIN SLIDER TITLE OUTTER WRAPPER -->
                         
            <!-- MAIN SLIDER IMAGES -->            
  			<div class="slides">
    				<!-- SLIDE IMAGE -->
                	<div data-stellar-ratio="0.5" class="slide-image" style="background-image:url(images/wedding/parallax-1.jpg); background-position:top;">
                    </div>
                    
                    <div class="slide-overlay" style="opacity:0.2"> </div> 
    		</div>	<!-- END of MAIN SLIDER IMAGES -->
            
		</section><!-- ENF of MAIN SLIDER -->
        
        
        
        <!--CONTENT SECTION-->
        <section id="content">
        
        	<!-- ICON -->
        	<div class="icon-title">
           		<div class="de-icon circle light large-size aligncenter">
					<i class="de-icon-mail-2"></i>
 				</div>
			</div>
        
        	<!-- CONTAINER -->
			<div class="container">
                <form method="post" action="rsvp.php" id="rsvpform">
                <!--TEXT SECTION-->
                <div class="row">
                	<div id="message" class="col-md-offset-2 col-md-8 message">
                    	<!-- Show Message -->
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-offset-2 col-md-8">
                    	
                        <div class="form-group">
    						<label for="inputname">*NOME COMPLETO</label>
                            <div class="input-group">
                            	<div class="input-group-addon"><i class="de-icon-heart-empty"></i></div>
    							<input type="name" id="inputname"  class="form-control ajax-input" placeholder="" data-required="Nome obrigatório" data-output-label="Nome">
                          	</div>
 						</div>
                        <div class="form-group">
    						<label for="inputname">*TELEFONE</label>
                            <div class="input-group">
                            	<div class="input-group-addon"><i class="de-icon-heart-empty"></i></div>
    							<input type="phone" id="inputphone"  class="form-control ajax-input" placeholder="" data-required="Telefone obrigatório" data-output-label="Telefone">
                          	</div>
 						</div>                                                
                        <div class="form-group">
    						<label for="inputemail">*EMAIL</label>
                            <div class="input-group">
                            	<div class="input-group-addon"><i class="de-icon-mail"></i></div>
    							<input type="email" id="inputemail"  class="form-control ajax-input" placeholder="" data-required="Email obrigatório" data-output-label="Output Email">
                          	</div>
 						</div>                    
                        
                        <div class="form-group">
    						<label for="inputmessage">DEIXE SUA MENSAGEM</label>
    						<textarea id="message" class="form-control ajax-input" rows="4" data-output-label="Output Message"></textarea>
 						</div>       
                        
                        <div class="form-group submit-wrapper">
    						<input type="submit" id="submitButton"  name="submitButton" class="button medium reverse" value="ENVIAR" style="width:100%;">
 						</div>
                              
                    </div>
                   
				</div><!--END of TEXT SECTION-->
                
              
                </form>
           	</div><!-- END of CONTAINER -->    
                        
        </section> <!--END of CONTENT SECTION-->        
        
<?php
require_once 'footer.php';
?>
    