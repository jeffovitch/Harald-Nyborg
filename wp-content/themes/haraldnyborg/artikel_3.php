<?php

/*
Template name: artikel 3
*/

wp_nav_menu( array( 'theme_location' => 'header-menu' ) );

get_header();
$artikel_3_header = get_field('header');
?>



<h1 class="articleHeader"><?php echo $artikel_3_header['header_title']; ?></h1>


<img class="articleImg" src="<?php echo $artikel_3_header['header_image']; ?>">

<p class="articleTeaser"><?php echo $artikel_3_header['header_teaser']; ?></p>


<?php $artikel_3_section_1 = get_field('first_section'); ?>

<article class="articleSection odd">
	<h2 class="sectionHeader"><?php echo $artikel_3_section_1['section_header']; ?></h2>
	
	<?php if($artikel_3_section_1['section_image']): ?>
        <img class="sectionImage" src="<?php echo $artikel_3_section_1['section_image']; ?>" alt="image">
    <?php endif; ?>
	<p class="sectionContent"><?php echo $artikel_3_section_1['section_content']; ?>
	</p>
</article>

<?php $artikel_3_section_2 = get_field('second_section'); ?>
<article class="articleSection even">
	<h2 class="sectionHeader"><?php echo $artikel_3_section_2['section_header']; ?></h2>
	
	<?php if($artikel_1_section_1['section_image']): ?>
        <img class="sectionImage" src="<?php echo $artikel_3_section_2['section_image']; ?>" alt="image">
    <?php endif; ?>
	<p class="sectionContent"><?php echo $artikel_3_section_2['section_content']; ?>
	</p>
</article>




<form class="signupForm" action="">
	<h3 class="formHeader">Er du ikke tilmeldt endnu?</h3>
	<p class="formText">Tilmeld vores nyhedsbrev for flere gode tips</p>
	<input class="mail" type="text" placeholder="Indtast din e-mail">
	<input class="submit" type="submit" value="TILMELD">
</form>

<ul class="adminMenu">
	<p>Navigering - kun til fremvisning</p>
	<li><a href="page-1">artikel 1</a></li>
	<li><a href="page-2">artikel 2</a></li>
	<li><a href="page-3">artikel 3</a></li>
</ul>


<?php 

get_footer() 
?>