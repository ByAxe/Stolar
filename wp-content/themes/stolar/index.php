<?php get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php include "index-components/slider.php"; ?>

            <?php include "index-components/advantages.php"; ?>

            <?php include "index-components/reasons.php"; ?>

            <?php include "index-components/portfolio.php"; ?>

            <?php include "index-components/clients.php"; ?>

            <?php include "index-components/contract.php"; ?>

            <?php include "index-components/order-form.php"; ?>

            <?php include "common-components/bottom.php"; ?>

            <?php include "common-components/widget-phones.php"; ?>

            <?php include "common-components/aside.php"?>
        </main><!-- #main -->
    </div><!-- #primary -->



<?php
//get_sidebar();
get_footer();
?>

<?php
if ($_GET['su'] == 't') {
    print "
        <script async language='javaScript'>
            alert('Ваша заявка была успешно доставлена! С вами свяжутся в ближайшее время.')
        </script>
    ";
}
?>
