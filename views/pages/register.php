<?php
/** 
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
*/
?>

<?php $view->component('start') ?>
<h1>Sign Up page</h1>

<form action="/register" method="post">
    <p>email</p>
    <input type="text" name="email">
    <!-- создаем вывод ошибок -->
    <!-- проверяем сессию на наличие ошибок  -->
    <?php if($session->has(key:'email')){ ?>
    <div>
        <ul>
            <!-- перебираем ошибки и выводим -->
            <?php foreach($session->getFlash(key:'email') as $error){ ?>
                <li><?= $error ?></li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>
    <p>password</p>
    <input type="password" name="password">
    <!-- создаем вывод ошибок -->
    <!-- проверяем сессию на наличие ошибок  -->
    <?php if($session->has(key:'password')){ ?>
    <div>
        <ul>
            <!-- перебираем ошибки и выводим -->
            <?php foreach($session->getFlash(key:'password') as $error){ ?>
                <li><?= $error ?></li>
            <?php } ?>
        </ul>
    </div>
    <?php } ?>
    <button>Register</button>

    

</form>
<?php $view->component('end') ?>