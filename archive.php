<?php get_header();  
$acat = single_cat_title("", false) ? strtolower(single_cat_title("", false)) : get_theme_mod('mcbra_models_cat_default');
$acat = (strpos($acat, 'autom')) ? 'automoveis' : $acat;
$acat = (strpos($acat, 'nibus')) ? 'onibus' : $acat;
$acat = (strpos($acat, 'camin')) ? 'caminhoes' : $acat;
$cat = array( 'automoveis' => 1, 'onibus' => 2, 'vans' => 3, 'amg' => 4, 'caminhoes' => 5);
$c = $cat[$acat]; 

$tag = get_queried_object();
$stag = ($tag->slug == 'videos') ? 1 : 0;
?>
<style>
    <!--
    .entry {
        padding: 70px 0 70px 0;
        min-height: calc(100vh - 480px);
        height: 100% !important;
    }
    .entry .entry-container {
        width: calc(100% - 25px);
        border-left: 0;
    }
    .entry-title {
        /*width: calc(33.3334% - 2px);*/
        width: 314px;
        /*padding: 14% 0 0;*/
        padding: 135px 0 0;
        float: left;
        position: relative;
        background: black;
        margin: 0 1px 2px;
        background-size: cover !important;
    }
    .entry-title a {
        font-size: 20px !important;
        color: white !important;
        position: absolute;
        top: 20px;
        left: 20px;
    }
    .entry-title a:hover {
        color: #00adef !important;
    }
    .entry-title a:before {
    width: 60px;
    height: 2px;
    background-color: #FFF;
    display: block;
    content: '';
    margin: 0 0 18px;
    box-shadow: 1px 0 2px #000;
    }
    .entry-title a:hover:before {
         background-color: #00adef !important;
    }
    -->
</style>
<div class='entry'>

<?php if ( have_posts() ) : ?>
    <div class="entry-container">
        <? if ($stag==0) { ?>
        <div class='entry-header'>
            <h1>
                <?php the_archive_title(); ?>
            </h1>
        </div>
        <? } ?>
<?php while ( have_posts() ) : the_post();
    $thumbed = '';
      /*if (get_post_thumbnail_id( $post->ID )) :
    	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
    	$thumbed = ' style="background: #000 url('.$thumb[0].') no-repeat center center"';
    endif*/
    /*
    if (kdmfi_get_featured_image_id( 'miniatura', $post_id )) :
    	$thumb = kdmfi_get_featured_image_src( 'miniatura', 'single-post-thumbnail', $post_id);
    	$thumbed = ' style="background: #000 url('.$thumb.') no-repeat center center"';
    endif*/
    
?>
    <h1 class='entry-title'<?=$thumbed?>>
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php the_title(); ?>
        </a>
    </h1>
<?php endwhile; else: ?>
    <div class="entry-container">
        <div class='entry-header'>
                <h1 class='entry-title'><?php single_cat_title(); ?></h1>
                <?php if ( category_description() ) : ?><h2><?php echo category_description(); ?></h2><?php endif; ?>
        </div>
        <div class='entry-content'>
            <article>
				Desculpe-nos, mas ainda não há nada aqui.
            </article>
        </div>
<?php endif; ?>
    </div>
    <div style="clear:both"></div>
</div>

<?php get_footer(); ?>