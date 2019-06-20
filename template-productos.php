<?php
/*
Template Name: Productos
*/
?>

<?php get_header(); ?>

<div id="content" class="pg-about-content">
<!-- Title Banner of Page with Big Image -->
   <div id="pg-about-banner-container">
	 <div id="pg-about-banner"></div>
   </div>
<!-- Beginning of Content  -->   
    <div id="title-banner" class="large-centered cell">
		<h1 class="text-center"><?php the_field('title_banner_text'); ?></h1>							
	</div>
 <div id="inner-about-content">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	    <!-- Content section 1 -->
			<div id="pg-about-section-one">
			 <div class="grid-x" id="pg-about-content-row">
			  <div class="small-12 large-12 cell">
				 <h2 class="text-center"><?php the_field('section_one_title'); ?></h2>
			  </div>
			  <!-- <div class="grid-x"> -->
				  <div class="small-12 medium-10 medium-offset-1 large-6 large-offset-3"><?php the_field('section_one_text'); ?></div>
			  <!-- </div> -->
			 </div>
			</div>
			
		<!-- Content section 2 -->
			<div id="pg-about-section-two" class="">

				<div class="grid-container">

			 <div class="grid-x grid-margin-x" id="pg-about-content-row">
              
              <div class="small-12 medium-6 large-4 cell">
			  
			   <div class="flip-card">
				<div class="flip-card-front" style="background-image: url('https://pregelamericalatina.com/wp-content/uploads/sites/26/2018/04/Bases.jpg'); background-size: cover; background-position: center;">
				 <div class="flip-card-back">
				  <!-- <h3 class="flip-card-back-title">BASES</h3> -->
				  <div class="flip-card-back-text-container">
				  <p class="flip-card-back-text">Bases en polvo que solo requieren de la parte líquida y de azúcares. Garantizan una calidad constante, simplicidad y velocidad de ejecución. Permiten la personalización del helado:</p>
				  <ul class="productos-card-list">
				  	<li>Bases de leche y de fruta</li>
				  	<li>Procesos en frío y en caliente</li>
				  	<li>Helados sin azúcares añadidos, edulcorados con Stevia, veganos y a base de soya</li>
				  	<li>Para helados de chocolate y con alcohol</li>
				  </ul>
				  </div>
				 </div>
				</div>
			   </div>
			  
				<h3 id="flavor-title">BASES</h3>
			  </div>

			  <div class="small-12 medium-6 large-4 cell">
			   
			   <div class="flip-card">
				<div class="flip-card-front" style="background-image: url('https://pregelamericalatina.com/wp-content/uploads/sites/26/2018/04/Stabilizer.jpg'); background-size: cover; background-position: center;">
				 <div class="flip-card-back">
				  <!-- <h3 class="flip-card-back-title">NEUTROS Y MEJORADORES DE ESTRUCTURA</h3> -->
				  <div class="flip-card-back-text-container">
				  <p class="flip-card-back-text">Mejoradores de estructura y estabilizantes de baja dosificación para optimizar:</p>
				  <ul class="productos-card-list">
				  	<li>Cremosidad</li>
				  	<li>Espatulabilidad</li>
				  	<li>Conservación en vitrina</li>
				  </ul>
				  </div>
				 </div>
				</div>
			   </div>
			  
				<h3 id="flavor-title">NEUTROS Y MEJORADORES DE ESTRUCTURA</h3>
			  </div>

			  <div class="small-12 medium-6 large-4 cell">
			   
			   <div class="flip-card">
				<div class="flip-card-front" style="background-image: url('https://pregelamericalatina.com/wp-content/uploads/sites/26/2018/04/Flavorings.jpg'); background-size: cover; background-position: center;">
				 <div class="flip-card-back">
				  <!-- <h3 class="flip-card-back-title">SABORES</h3> -->
				  <div class="flip-card-back-text-container">
				  <p class="flip-card-back-text">La calidad de un producto empieza con la calidad de las materias primas empleadas en su elaboración.</p>
				  <ul class="productos-card-list">
				  	<li>Pastas concentradas a base de frutas.</li>
				  	<li>Pastas en sabores clásicos y de tendencia para heladería de alta calidad.</li>
				  	<li>Saborizantes en polvo, concentrados y de alto rendimiento.</li>
				  </ul>
				  </div>
				 </div>
				</div>
			   </div>
			  
				<h3 id="flavor-title">SABORES</h3>
			  </div>

			 <!-- </div> -->

			 <!-- <div class="grid-x" id="pg-about-content-row"> -->

			  <div class="small-12 medium-6 large-4 cell">
			   
			   <div class="flip-card">
				<div class="flip-card-front" style="background-image: url('https://pregelamericalatina.com/wp-content/uploads/sites/26/2018/04/Toppings.jpg'); background-size: cover; background-position: center;">
				 <div class="flip-card-back">
				  <!-- <h3 class="flip-card-back-title">SALSAS, RELLENOS, TOPPINGS Y COBERTURAS</h3> -->
				  <div class="flip-card-back-text-container">
				  <p class="flip-card-back-text">Salsas y rellenos densos y listos para el consumo. En sabores clásicos y de tendencia.
                   Para decorar, como toppings, para realzar sabores, agregar textura y como veteados para helados. 
                   Estos toppings contienen más de 30% de fruta natural. Salsas para realzar el sabor y la apariencia del helado en la cubeta y en la copa.</p>
                   <ul class="productos-card-list">	
                       <li>Coberturas para paletas con un terminado homogéneo, crujiente y llamativo. </li>
                   </ul>
                  </div>
				 </div>
				</div>
			   </div>

				<h3 id="flavor-title">SALSAS, RELLENOS, TOPPINGS Y COBERTURAS</h3>
			  </div>

			  <div class=" small-12 medium-6 large-4 cell">
			   
			   <div class="flip-card">
				<div class="flip-card-front" style="background-image: url('https://pregelamericalatina.com/wp-content/uploads/sites/26/2018/04/Pastry.jpg'); background-size: cover; background-position: center;">
				 <div class="flip-card-back">
				  <!-- <h3 class="flip-card-back-title">PASTELERíA</h3> -->
				  <div class="flip-card-back-text-container">
				  <p class="flip-card-back-text">Elaborados con ingredientes cuidadosamente seleccionados para garantizar rendimiento y postres de excelente acabado:</p>
				  <ul class="productos-card-list">
				  	<li>Sabores</li>
				  	<li>Glaseados</li>
				  	<li>Bases para productos al horno, para semifreddo y pastelería fría. </li>
				  </ul>
				  </div>
				 </div>
				</div>
			   </div>
			  
				<h3 id="flavor-title">PASTELERíA</h3>
			  </div>

			  <div class="small-12 medium-6 large-4 cell">
			  
			   <div class="flip-card">
				<div class="flip-card-front" style="background-image: url('https://pregelamericalatina.com/wp-content/uploads/sites/26/2018/04/Service.jpg'); background-size: cover; background-position: center;">
				 <div class="flip-card-back">
				  <!-- <h3 class="flip-card-back-title">UTENSILIOS PARA ELABORAR Y SERVIR POSTRES</h3> -->
				  <div class="flip-card-back-text-container">
				  <p class="flip-card-back-text">Utensilios para elaborar y servir postres.</p>
				  <ul class="productos-card-list">
				  	<li>Copas y cucharitas</li>
				  	<li>Recipientes para transportar gelato</li>
				  	<li>Moldes para paletas</li>
				  	<li>Bandejas para exhibir paletas en vitrinas</li>
				  	<li>Mangas pasteleras</li>
				  </ul>
				  </div>
				 </div>
				</div>
			   </div>
			 
				<h3 id="flavor-title">UTENSILIOS PARA ELABORAR Y SERVIR POSTRES</h3>
			  </div>


			 </div>
			</div>

			</div>
 <?php endwhile; endif; ?>	
 </div> <!-- end #pg-inner-content -->
</div> <!-- end #pg-about-content -->
<?php get_footer(); ?>