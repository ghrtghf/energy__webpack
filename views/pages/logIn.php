<?php
/** 
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
*/
?>

<?php $view->component('start') ?>
<h1>Login page</h1>

<form action="/login" method="post">
    <p>email</p>
    <input type="text" name="email">
    <p>password</p>
    <input type="password" name="password">
    <!-- создаем вывод ошибок -->
    <!-- проверяем сессию на наличие ошибок  -->
    <?php if($session->has(key:'error')){ ?>
        <p style="color: red">
            <?php echo $session->getFlash(key:'error') ?>
        </p>
    <?php } ?>
    <button>Log In</button>

    

</form>
<?php $view->component('end') ?>