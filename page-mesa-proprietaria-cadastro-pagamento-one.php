<?php get_header(); ?>
	<section class="bg-mesa" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2023/02/bg-1.jpg);">
		<div class="overlay" >
			<section class="sect1-mesa">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 alinhar">
							<div class="content">
								<p class="title">Trader + <br> Profitchart <b>One</b>
								</p>
								<p class="sub"><span>Intermediário</span> <svg class="linha" xmlns="http://www.w3.org/2000/svg" width="262.895" height="14.968" viewBox="0 0 262.895 14.968">
								  <g id="linha_texto" data-name="linha texto" transform="translate(2.891 2.536)">
								    <path id="Caminho_9560" data-name="Caminho 9560" d="M-.345,3.007s92.124-16,257.365-6.559" transform="translate(0.345 6.534)" fill="none" stroke="#e38a30" stroke-linecap="round" stroke-width="5"/>
								  </g>
								</svg></p>
								<div class="texto">
									<p>Olá, <span>antes de concluir sua compra</span>, precisamos dos dados abaixo para abertura de conta e liberação da sua plataforma com mais agilidade.</p> <br>
									<p><b>Após preencher os dados, você será redirecionado para o Mercado Pago para efetuar o pagamento.</b></p>
								</div>
															
							</div>
						</div>
						<div class="col-lg-6">
							<div class="formulario-pro">
								<?php echo do_shortcode('[contact-form-7 id="212" title="Cadastro pro"]'); ?>
							</div>
						</div>
					</div>
				</div>				
			</section>

		</div>
	</section>

<?php get_footer(); ?>


