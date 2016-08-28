<style media="screen">html{ background-color: #ccc; color: #111; }</style>

<h1>Editing <?=$PAGE_NAME;?></h1>
<div class="page-editor" style="border:1px solid red;">


    <?php
        $SECTION_ID = 1;
        if($EDIT_MODE || array_key_exists($SECTION_ID, $PAGE_CONTENT_DATA['CONTENT_ITEMS'])):?>
        <div>
            <?= addSectionContent($SECTION_ID, $PAGE_CONTENT_DATA);?>
        </div>
    <?php endif; ?>

    <?php
        $SECTION_ID = 2;
        if($EDIT_MODE || array_key_exists($SECTION_ID, $PAGE_CONTENT_DATA['CONTENT_ITEMS'])):?>
        <div>
            <?= addSectionContent($SECTION_ID, $PAGE_CONTENT_DATA); ?>
        </div>
    <?php endif; ?>



</div>
