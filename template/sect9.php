<section class="sect9">
	<div class="container">
		<div class="top">
			<div class="topico">
				<svg xmlns="http://www.w3.org/2000/svg" width="15.493" height="22.365" viewBox="0 0 15.493 22.365">
				  <g id="ic-contact-map-pin" transform="translate(-4.251 -0.85)">
				    <path id="Caminho_82" data-name="Caminho 82" d="M12.76,1.6H11.24c-5,.49-7.68,6.14-5.31,10.54L11.23,22a.87.87,0,0,0,1.54,0l5.3-9.83C20.44,7.74,17.73,2.09,12.76,1.6Z" fill="none" stroke="#ef9a5a" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="1.5"/>
				    <rect id="Retângulo_26" data-name="Retângulo 26" width="5" height="5" rx="2.5" transform="translate(9.5 6)" fill="none" stroke="#ef9a5a" stroke-linecap="round" stroke-linejoin="bevel" stroke-width="1.5"/>
				  </g>
				</svg>

				<p class="text-center">onde estamos</p>							
			</div>				
		</div>	
		<p class="title text-center"><span>Nossas</span> Unidades</p>
		<div class="row">
			 <?php     

		        $listagem_home = new WP_Query(array(
		        'post_type' => 'unidades',

		        
		        'posts_per_page' => 3)
		        );
		                  

		        if($listagem_home->have_posts()) : 

		            while($listagem_home->have_posts()) : $listagem_home->the_post(); 
		            	$imagem = get_field('imagem_da_unidade');
		            	?>		
		            	<div class="col-lg-4">
		            		<div class="card-unidade">
		            			<div class="centro">
		            				<div class="img" style="background-image: url(<?php echo $imagem['url']; ?>);">
		            				
		            				</div>
		            				<p class="title-unidade"><?php the_title(); ?></p>
		            				<p class="endereco"><?php the_field('endereco'); ?></p>
		            				<div class="categorias">
										<?php   // Get terms for post
										 $terms = get_the_terms( $post->ID , 'unidade-categoria' );
										 // Loop over each item since it's an array
										 if ( $terms != null ){
										 foreach( $terms as $term ) {
										 // Print the name method from $term which is an OBJECT
										 echo '<div class="cat"><p>' . $term->slug . '</p></div>';
										 // Get rid of the other data stored in the object, since it's not needed
										 unset($term);
										} } ?>				            					
		            				</div>
		            				<div class="botao">
		            					<a href="#">
		            						<button>chame no whats <i class="fa-solid fa-chevron-right"></i></button>
		            					</a>
		            				</div>
								 		            				
		            			</div>
		            		</div>
		            	</div>
		            <?php endwhile; ?>	
		        <?php endif ?>    		
		</div>		
	</div>
</section>