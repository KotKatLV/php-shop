<div class="container">
    <nav class="nav nav-menu">
        <a class="nav-link active" href="/">Всё меню</a>
        <?
        use yii\helpers\Url;
        foreach ($data as $id) { ?>
            <a class="nav-link" data-id="<?=$id['cat_name']?>" href="<?=Url::to(['category/view','id'=>$id['cat_name']])?>"><?= $id['browser_name'] ?></a>
        <? } ?>
    </nav>
</div>
