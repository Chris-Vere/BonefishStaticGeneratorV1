<h1>the <em>view all</em> page</h1>
<table cellspacing="1" cellpadding="5" border="1">
    <thead>
        <tr>
            <th>&nbsp;</th>
            <?php foreach ($PAGES[0] as $key => $value): ?>
                <th><?= trim($key); ?></th>
            <?php endforeach; ?>
        </tr>
    </thead>
    <tbody>
        <?php for($i = 0; $i < count($PAGES); $i++):?>
            <tr>
                <td><a href="/cms/page/edit/<?=$PAGES[$i]['PAGE_ID'];?>">Edit</a></td>
                <?php foreach ($PAGES[$i] as $key => $value): ?>
                    <td>
                        <?php
                            echo trim($value);
                            if($key == "URL"){
                                $segments = explode("/", $PAGES[$i]['URL']);
                                echo("<pre>"); print_r($segments); echo ("</pre>");
                            }
                        ?>
                    </td>
                <?php endforeach; ?>
            </tr>
        <?php endfor; ?>
    </tbody>
</table>
