<?php
/** 
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\SessionInterface $session
 * @var \App\Kernel\Translater\TranslaterInterface $translater
 * @var array<\App\Models\Station> $stations
 * @var \App\Models\Model $model
*/
?>

<?php $view->component('start') ?>
<h1>update station page</h1>
<form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $model->id() ?>">
    <?php foreach( $model->all() as $key => $value ){ ?>
        <?php if($key != 'id'){ ?>
            <?php if($key == 'station_id'){ ?>
                <select name="station_id" id="">
                    <?php foreach ($stations as $station){ ?>
                        <option value="<?php echo  $station->id() ?>" <?php echo $station->id() == $model->station_id() ? 'selected' : '' ?>><?php echo $station->name() ?></option>
                    <?php } ?>
                </select>
            <?php }else{ ?>
            <input type="<?php echo $key == 'image' ? 'file' : 'text' ?>" name="<?php  echo $key ?>" placeholder="<?= $translater->translate($key) ?>" value="<?= $value ?>">
            <?php if ($session->has($key)) { ?>
                <?php echo $session->getFlash($key)[0] ?>
            <?php } ?>
        <?php }} ?>
    <?php } ?>
    <button>изменить</button>
</form>
<?php $view->component('end') ?>