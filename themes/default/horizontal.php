<table cellspacing="0" cellpadding="0">
    <?php if (isset($error_messages)):?>
    <tr>
        <td colspan="2">
            <?php echo $error_messages?>
        </td>
    </tr>
    <?php endif?>
    <?php $rows = count($blocks); foreach ($blocks as $counter => $block):?>
    <tr class="row<?php echo ($counter % 2 == 0 ? ' even' : '') . ($counter == $rows ? ' last' : '')?>">
        <td>
            <?php if (isset($block['label'])): echo $block['label']; unset($block['label']); endif?>
        </td>
        <td>
            <?php foreach ($block as $element):?>
            <?php if (is_array($element)):?>
                <?php foreach ($element as $control):?>
                <div class="cell"><?php echo $control?></div>
                <?php endforeach?>
                <div class="clear"></div>
            <?php else:?>
            <?php echo $element?>
            <?php endif?>
            <?php endforeach?>
        </td>
    </tr>
    <?php endforeach?>
</table>