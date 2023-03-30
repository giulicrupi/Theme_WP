<?php get_header(); ?>

<section class="sect1-contato" style="background-image: url(<?php echo site_url(); ?>/wp-content/uploads/2023/02/bg.jpg);">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="cont">
					<p class="title">Entre em contato 						<svg class="linha" xmlns="http://www.w3.org/2000/svg" width="262.895" height="14.968" viewBox="0 0 262.895 14.968">
						  <g id="linha_texto" data-name="linha texto" transform="translate(2.891 2.536)">
						    <path id="Caminho_9560" data-name="Caminho 9560" d="M-.345,3.007s92.124-16,257.365-6.559" transform="translate(0.345 6.534)" fill="none" stroke="#e38a30" stroke-linecap="round" stroke-width="5"/>
						  </g>
						</svg></p>
						<div class="form">
							<?php echo do_shortcode('[contact-form-7 id="78" title="Contato"]'); ?>
						</div>
				</div>
			</div>
			<div class="col-lg-6 alinhar">
				<div class="cont2">
					<p class="texto1">
						Fique à vontade para entrar em contato com a gente. Em breve vamos retornar o seu contato!
					</p>
					<div class="lista">
						<p><i class="fa-solid fa-check"></i> Tem alguma dúvida sobre os nossos produtos?</p>
						<p><i class="fa-solid fa-check"></i> Quer fazer um agendamento?</p>
						<p><i class="fa-solid fa-check"></i> Deseja saber mais sobre a nossa metodologia?</p>
					</div>
					<div class="contato">
						<p><i class="fa-brands fa-whatsapp"></i> +55 (11) 96135-1881</p>
						<p><i class="fa-solid fa-location-arrow"></i> contato@falcontrader.com.br</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>