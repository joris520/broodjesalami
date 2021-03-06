<?php

/**
 * Description of DocumentClusterView
 *
 * @author ben.dokter
 */

require_once('modules/interface/interfaceobjects/base/BaseValueObjectInterfaceObject.class.php');

class DocumentClusterView extends BaseValueObjectInterfaceObject
{
    const TEMPLATE_FILE = 'library/documentClusterView.tpl';

    private $editLink;
    private $removeLink;

    static function createWithValueObject(  DocumentClusterValueObject $valueObject,
                                            $displayWidth)
    {
        return new DocumentClusterView( $valueObject,
                                        $displayWidth,
                                        self::TEMPLATE_FILE);
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    function setEditLink($editLink)
    {
        $this->editLink = $editLink;
    }

    function getEditLink()
    {
        return $this->editLink;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////
    function setRemoveLink($removeLink)
    {
        $this->removeLink = $removeLink;
    }

    function getRemoveLink()
    {
        return $this->removeLink;
    }

}

?>
