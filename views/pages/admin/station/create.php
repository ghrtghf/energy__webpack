<?php
/** 
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\SessionInterface $session
 * @var \App\Kernel\Translater\TranslaterInterface $translater
 * @var \App\Models\Station $station
*/
?>

<?php $view->component('start') ?>
<h1>update station page</h1>
<form action="" method="post">
            <input type="text" name="name" placeholder="название">
            <?php if ($session->has('name')) { ?>
                <?php echo $session->getFlash('name')[0] ?>
            <?php } ?>
            <input type="text" name="body_protection" placeholder="защита корпуса">
            <?php if ($session->has('body_protection')) { ?>
                <?php echo $session->getFlash('body_protection')[0] ?>
            <?php } ?>
    <button>добавить</button>
</form>
<?php $view->component('end') ?>