<?php
/** 
 * @var \App\Kernel\View\View $view
 * @var array<\App\Models\Station> $stations
 * @var array<\App\Models\Model> $models
 * @var \App\Kernel\Storage\StorageInterface $storage
*/
?>



<?php $view->component('start') ?>
<h1>Admin page</h1>
<div class="">
    <a href="/admin/station/add">создать станцию</a>
    <form action="/admin/station/destroy" method="post">
        <?php foreach($stations as $station){ ?>
            <input type="hidden" name="id" value="<?php  echo $station->id() ?>">
            <p><?php echo  $station->name() ?></p>
            <button>удалить</button>
            <a href="/admin/station/update?id=<?php echo $station->id() ?>">изменить</a>
         <?php } ?>
    </form>
</div>
<div class="">
    <a href="/admin/model/add">создать модель</a>
            <?php foreach( $models as $model ){ ?>
                <p><?php echo $model->name() ?></p>
                <p><?php echo $model->description() ?></p>
                <p><?php echo $model->price() ?></p>
                <img src="<?php echo $storage->url($model->image()) ?>" alt="">
                <a href="/admin/model/update?id=<?php echo  $model->id() ?>">изменить</a>
                <form action="/admin/model/destroy" method="post">
                    <input type="hidden" value="<?php  echo $model->id() ?>" name="id">
                    <button>удалить</button>
                </form>
            <?php } ?>
</div>
<?php $view->component('end') ?>