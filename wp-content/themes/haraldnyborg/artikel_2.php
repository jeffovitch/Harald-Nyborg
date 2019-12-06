<?php

/*
Template name: artikel 2
*/

wp_nav_menu( array( 'theme_location' => 'header-menu' ) );

get_header();
$artikel_2_header = get_field('header');
?>

<h1 class="articleHeader"><?php echo $artikel_2_header['header_title']; ?></h1>


<img class="articleImg" src="<?php echo $artikel_2_header['header_image']; ?>">

<p class="articleTeaser"><?php echo $artikel_2_header['header_teaser']; ?></p>


<?php $artikel_2_section_1 = get_field('first_section'); ?>

<article class="articleSection odd">
	<h2 class="sectionHeader"><?php echo $artikel_2_section_1['section_header']; ?></h2>
	
	<?php if($artikel_1_section_1['section_image']): ?>
        <img class="sectionImage" src="<?php echo $artikel_2_section_1['section_image']; ?>" alt="image">
    <?php endif; ?>
	<p class="sectionContent"><?php echo $artikel_2_section_1['section_content']; ?>
	</p>
</article>

<?php $artikel_2_section_2 = get_field('second_section'); ?>
<article class="articleSection even">
	<h2 class="sectionHeader"><?php echo $artikel_2_section_2['section_header']; ?></h2>
	
	<?php if($artikel_1_section_2['section_image']): ?>
        <img class="sectionImage" src="<?php echo $artikel_2_section_2['section_image']; ?>" alt="image">
    <?php endif; ?>
	<p class="sectionContent"><?php echo $artikel_2_section_2['section_content']; ?>
	</p>
</article>

<?php $artikel_2_section_3 = get_field('third_section'); ?>
<article class="articleSection odd">
	<h2 class="sectionHeader"><?php echo $artikel_2_section_3['section_header']; ?></h2>
	
	<?php if($artikel_2_section_3['section_image']): ?>
        <img class="sectionImage" src="<?php echo $artikel_2_section_3['section_image']; ?>" alt="image">
    <?php endif; ?>
	<p class="sectionContent"><?php echo $artikel_2_section_3['section_content']; ?>
	</p>
</article>

<?php $artikel_2_section_4 = get_field('fourth_section'); ?>
<article class="articleSection even">
	<h2 class="sectionHeader"><?php echo $artikel_2_section_4['section_header']; ?></h2>
	
	<?php if($artikel_2_section_4['section_image']): ?>
        <img class="sectionImage" src="<?php echo $artikel_2_section_4['section_image']; ?>" alt="image">
    <?php endif; ?>
	<p class="sectionContent"><?php echo $artikel_2_section_4['section_content']; ?>
	</p>
</article>

<?php $artikel_2_section_5 = get_field('fifth_section'); ?>
<article class="articleSection odd">
	<h2 class="sectionHeader"><?php echo $artikel_2_section_5['section_header']; ?></h2>
	
	<?php if($artikel_2_section_5['section_image']): ?>
        <img class="sectionImage" src="<?php echo $artikel_2_section_5['section_image']; ?>" alt="image">
    <?php endif; ?>
	<p class="sectionContent"><?php echo $artikel_2_section_5['section_content']; ?>
	</p>
</article>

<?php $artikel_2_section_6 = get_field('sixth_section'); ?>
<article class="articleSection even">
	<h2 class="sectionHeader"><?php echo $artikel_2_section_6['section_header']; ?></h2>
	
	<?php if($artikel_2_section_6['section_image']): ?>
        <img class="sectionImage" src="<?php echo $artikel_2_section_6['section_image']; ?>" alt="image">
    <?php endif; ?>
	<p class="sectionContent"><?php echo $artikel_2_section_6['section_content']; ?>
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