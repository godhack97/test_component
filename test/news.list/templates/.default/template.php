
<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="container">
    <div class="row" style="margin-top: 50px;border: solid 1px black;padding: 35px;">
        <?foreach ($arResult['ITEMS'] as $arItem): ?>
            <div class="col-6"><?=$arItem['NAME']?></div>
        <?endforeach;?>
    </div>
<div class="col-12">
    <nav aria-label="">
    <ul class="pagination justify-content-center">
        <?for($i=1;$i<$arResult['PAGE_COUNT']+1;$i++):?>
        <li class="page-item"><a class="page-link" href="?nav=page-<?=$i?>"><?=$i?></a></li>
        <?endfor;?>
    </ul>
</nav>
</div>
</div>