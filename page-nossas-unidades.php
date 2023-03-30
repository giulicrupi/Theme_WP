<?php get_header(); ?>
<section class="bg1" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2023/02/bg.jpg);">
	<section class="sect9">
		<div class="container">

			<p class="title "><span>Nossas</span> Unidades 						<svg class="linha" xmlns="http://www.w3.org/2000/svg" width="262.895" height="14.968" viewBox="0 0 262.895 14.968">
						  <g id="linha_texto" data-name="linha texto" transform="translate(2.891 2.536)">
						    <path id="Caminho_9560" data-name="Caminho 9560" d="M-.345,3.007s92.124-16,257.365-6.559" transform="translate(0.345 6.534)" fill="none" stroke="#e38a30" stroke-linecap="round" stroke-width="5"/>
						  </g>
						</svg></p>
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
</section>	
<?php get_footer(); ?>