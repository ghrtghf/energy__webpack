<?php
/** 
 * @var \App\Kernel\View\View $view
*/
?>

<?php $view->component('start') ?>
<h1>Add catalog page</h1>

<form action="/admin/catalog/add" method="post">
    <p>Name</p>
    <div>
    <input type="text" name="name">
    </div>
    <div>
    <button>Add</button>
    </div>
</form>
<?php $view->component('end') ?>
