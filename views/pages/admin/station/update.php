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
    <input type="hidden" name="id" value="<?php echo $station->id() ?>">
    <?php foreach( $station->all() as $key => $value ){ ?>
        <?php if($key != 'id'){ ?>
            <input type="text" name="<?php  echo $key ?>" placeholder="<?= $translater->translate($key) ?>" value="<?= $value ?>">
            <?php if ($session->has($key)) { ?>
                <?php echo $session->getFlash($key)[0] ?>
            <?php } ?>
        <?php } ?>
    <?php } ?>
    <button>изменить</button>
</form>
<?php $view->component('end') ?>