<?php
function addContentText($index, $source){
    if(array_key_exists($index, $source)){
         return $source[$index]['CONTENT'];
    }else{
        return '[No text entered]';
    }
}

function addEditButton($input, $IS_EDIT_MODE){
    if($IS_EDIT_MODE){
        $CI =& get_instance();

        $contentID = "";
        if(array_key_exists($input['SECTION_ID'], $input['CONTENT_ITEM_LIST'])){
            $contentID = $input['CONTENT_ITEM_LIST'][$input['SECTION_ID']]['CONTENT_ID'];
        }

        $button = $CI->load->view(
            'cms/partials/v--edit-button',
            array(
                'PAGE_ID'    => $input['PAGE_ID'],
                'CONTENT_ID' => $contentID,
                'SECTION_ID' => $input['SECTION_ID']
            ),
            true
        );
        return $button;
    }else{
        return '';
    }
}

/*
function addSectionContent($PAGE_ID, $SECTION_ID, $CONTENT_ITEMS, $EDIT_MODE){
    $content = addContentText($SECTION_ID, $CONTENT_ITEMS);

    $button = addEditButton(array(
        'PAGE_ID'           => $PAGE_ID,
        'SECTION_ID'        => $SECTION_ID,
        'CONTENT_ITEM_LIST' => $CONTENT_ITEMS
    ), $EDIT_MODE);

    return $content . $button;
}
*/

function addSectionContent($SECTION_ID, $PAGE_CONTENT_DATA){
    $content = addContentText($SECTION_ID, $PAGE_CONTENT_DATA['CONTENT_ITEMS']);

    $button = addEditButton(array(
        'PAGE_ID'           => $PAGE_CONTENT_DATA['PAGE_ID'],
        'CONTENT_ITEM_LIST' => $PAGE_CONTENT_DATA['CONTENT_ITEMS'],
        'SECTION_ID'        => $SECTION_ID
    ), $PAGE_CONTENT_DATA['EDIT_MODE']);

    return $content . $button;

    //return $content;
}
