<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>global</title>
    </head>
    <body>
        <header>
            <?php
            echo '<pre>';
            print_r($content);
            echo '</pre>';
            ?>

            <?php if(array_key_exists(0, $content)): ?>
                <div style="border:1px solid blue;" data-content-id="<?=$content[0]['CONTENT_ID'];?>"><?=$content[0]['CONTENT'];?></div>
            <?php endif; ?>

            <?php if(array_key_exists(1, $content)): ?>
                <div style="border:1px solid red;" data-content-id="<?=$content[1]['CONTENT_ID'];?>"><?=$content[1]['CONTENT'];?></div>
            <?php endif; ?>
        </header>
    </body>
</html>
