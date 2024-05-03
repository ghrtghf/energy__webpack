<?php
/** 
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
*/
?>

<?php $view->component('start') ?>
<h1>Add catalog page</h1>

<form action="/admin/catalog/add" method="post">
    <p>Name</p>
    <div>
    <input type="text" name="name">
    </div>

    <!-- создаем вывод ошибок -->
    <!-- проверяем сессию на наличие ошибок  -->
    <?php if($session->has(key:'name')){ ?>
    <div>
        <ul>
            <!-- перебираем ошибки и выводим -->
            <?php foreach($session->getFlash(key:'name') as $error){ ?>
                <li><?= $error ?></li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>
    <div>

    <button>Add</button>
    </div>
</form>
<?php $view->component('end') ?>
