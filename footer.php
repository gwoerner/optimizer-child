<?php 
/**
 * The Footer for Optimizer
 *
 * Displays the footer area of the template.
 *
 * @package Optimizer
 * 
 * @since Optimizer 1.0
 */
global $optimizer;?>

	<?php /*To Top Button */?>
	<a class="to_top <?php if (empty ($optimizer['totop_id'])) { ?>hide_totop<?php } ?>"><i class="fa-angle-up fa-2x"></i></a>



<!--Footer Start-->
<div class="footer_wrap layer_wrapper <?php if(!empty($optimizer['hide_mob_footwdgt'])){ echo 'mobile_hide_footer';} ?>">
    <div class="footer">
        <div class="3colonnes">
            <p>CETIAC<br>
                18 rue Pasteur - 69007 Lyon<br>
                <i class="fa-envelop"></i> contact@cetiac.fr<br>
                <i class="fa-phone"></i> 06 XX XX XX XX</p>
        </div>
        <div class="3colonnes">
            <ul>
                <li>Accueil</li>
                <li>Compensation agricole</li>
                <li>CETIAC</li>
                <li>Actualités</li>
                <li>Contactez-nous</li>
            </ul>
        </div>
        <div class="3colonnes">
            <p class="reseaux-sociaux">Suivez-nous sur les réseaux sociaux<br>
                <i class="fa-twitter"></i><i class="fa-linkedin"></i></p>
        </div>
    </div>
</div><!--layer_wrapper class END-->


<?php wp_footer(); ?>
</body>
</html>