<?php
/** 
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\SessionInterface $session
 * @var \App\Kernel\Translater\TranslaterInterface $translater
 * @var array<\App\Models\Station> $stations
*/
?>

<?php $view->component('start') ?>
<h1>update station page</h1>
<form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="название">
            <?php if ($session->has('name')) { ?>
                <?php echo $session->getFlash('name')[0] ?>
            <?php } ?>
            <input type="text" name="price" placeholder="цена">
            <?php if ($session->has('price')) { ?>
                <?php echo $session->getFlash('price')[0] ?>
            <?php } ?>
            <textarea name="description" placeholder="описание"></textarea>
            <?php if ($session->has('description')) { ?>
                <?php echo $session->getFlash('description')[0] ?>
            <?php } ?>
            <input type="file" name="image">
            <select name="station" id="">
                <?php foreach ($stations as $station){ ?>
                    <option value="<?php echo  $station->id() ?>"><?php echo $station->name() ?></option>
                <?php } ?>
            </select>
    <button>добавить</button>
</form>
<?php $view->component('end') ?>