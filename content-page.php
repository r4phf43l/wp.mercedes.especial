<?php
if (get_post_thumbnail_id( $post->ID )) :
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
	$pos_text = ' entry-container-img';
	$thumbed = ' style="background: #FFF url('.$thumb[0].') no-repeat center top"';
endif
?>
<div class='entry'<?=$thumbed?>>

<div class="widgts-pages corppages">
<?php if (is_page('Veículos Novos') || is_page('Veículos AMG Novos') || is_page('Ônibus Novos') || is_page('Caminhões Novos')) {  get_template_part('sidebar-novos'); } else { get_template_part('sidebar','sidebar'); } 

if ( is_user_logged_in() ) { get_template_part('sidebar','cliente'); }

?>

</div>
    <!--<div class="entry-container"<?=$pos_text?>>-->
    <div class="entry-container<?=$pos_text?>">
        <div class='entry-header'>
                <h1 class='entry-title'><?php the_title(); ?></h1>
        </div>
        <div class='entry-content'>
            <article>
                <?php the_content(); ?>
<?
        $attachments = get_posts( array(
            'post_type' => 'attachment',
            'posts_per_page' => -1,
            'post_parent' => $post->ID,             
        ) );
		$i=1;
        if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
				$chkurl = wp_get_attachment_image_src( $attachment->ID, 'single-post-thumbnail', true );
				if ($chkurl[0] != $thumb[0]) {
					$thumbimg = wp_get_attachment_image_src( $attachment->ID, 'img_gal', true );					
					$class = ($i % 2 == 0) ? 'par' : 'impar';
					$ligals .= '<li class="'.$class.'" style="background: #FFF url('.$thumbimg[0].') no-repeat center center"></li>';
					$i++;
				}
            }

        }		
?>            </article>
        </div>
    </div>
    <div style="clear:both"></div>
</div>
<?
$post = $wp_query->get_queried_object();  
$pagename = $post->post_name;
$pageparent = get_post($post->post_parent)->post_name;

if ($pagename == 'seminovos' || $pagename == 'destaques-do-mes') {
	get_template_part('content-seminovos');
}

if ($pagename == 'mercedes-collection' || $pageparent == 'mercedes-collection') {
	get_template_part('content-collection');
}
?>