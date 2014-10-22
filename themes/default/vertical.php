<?php if (isset($error_messages)):?>
    <?php echo $error_messages?>
<?php endif?>
<?php $rows = count($blocks); foreach ($blocks as $counter => $block):?>
<div class="row<?php echo ($counter % 2 == 0 ? ' even' : '') . ($counter == $rows ? ' last' : '')?>">
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
</div>
<?php endforeach?>