<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

    $classes = 'nav_main';
    $divID = 'id=\'nav\'';
    $items = [];       // Пункты меню
    $chainItems = [];  // Пункты меню 2 уровня

    if($arParams['CATALOG_MODALS']) {
        $classes = '';
        $divID = '';
    }

    foreach ($arResult as $item)
    {
        if($item['DEPTH_LEVEL'] == 1)
        {
            $items[] = $item;
        }else{
            $chainItems[$item['CHAIN'][0]][] = $item;
        }
        unset($item);
    }
    unset($arResult);


    $i = 0;
    foreach ($items as $item)
    {
        if(array_key_exists($item['TEXT'], $chainItems))
        {
            $items[$i]['CHAIN'] = $chainItems[$item['TEXT']];
        }
        $i++;
        unset($item);
    }
    unset($chainItems);
    unset($i);
?>

<? if (!empty($items)): ?>
    <div class="nav nav_desktop <?=$classes?>" <?=$divID?>>
        <ul>
            <? foreach ($items as $itemMenu): ?>
                <? if(count($itemMenu['CHAIN']) > 1): ?>
                    <li class="nav_block nav_submenu">
                        <div class="nav_link"><?=$itemMenu['TEXT']?><i class="icon-triangle"></i></div>
                        <div class="submenu">
                            <ul>
                                <? foreach ($itemMenu['CHAIN'] as $chainItem): ?>
                                    <li>
                                        <a class="submenu_link" href="<?=$chainItem['LINK']?>"><?=$chainItem['TEXT']?></a>
                                    </li>
                                <? endforeach; ?>
                            </ul>
                        </div>
                    </li>
                <? else: ?>
                    <li class="nav_block">
                        <a class="nav_link" href="<?=$itemMenu['LINK']?>"><?=$itemMenu['TEXT']?></a>
                    </li>
                <? endif; ?>
            <? endforeach; ?>
        </ul>
    </div>
<? endif ?>
