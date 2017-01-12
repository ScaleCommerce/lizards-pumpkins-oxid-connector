<?php

/**
 * Created by PhpStorm.
 * User: a.ziethen
 * Date: 12.01.17
 * Time: 10:43
 */
class AzLizardsImport extends oxUBase
{
    protected $defaultVAT = 19;

    protected $products;

    public function render()
    {
        $this->_generateLizardsXML();

        return parent::render(); // TODO: Change the autogenerated stub
    }


    protected function _generateLizardsXML()
    {
        /**
         * @var oxArticle $articleObject
         */
        $articlelist = oxNew(oxArticleList::class);
        $select = 'SELECT oxid FROM oxarticles';
        $articlelist->selectString($select);

        foreach ($articlelist as $sku => $articleObject) {
            $product = array();
            $product['type_id'] = 'simple';
            $product['tax_class'] = $articleObject->getArticleVat();
            $product['sku'] = $sku;

            //$gallery = $articleObject->getPictureGallery();
            //dumpVar($gallery);

            //$masterPic = 'product/1' . $articleObject->getPictureFieldValue('oxpic', 1);
            $tmp = $articleObject->oxarticles__oxpic1->value;
            echo 'tmp: '.$tmp;
            echo 'masterPic: '.$masterPic."<br>";
            $picturePath = $this->getConfig()->getMasterPicturePath($masterPic);

            echo $sku."<br>";
            echo $picturePath."<br><br>";

            /*
            $product['images'] = array(
                array(
                    'main' => $articleObject->getPictureGal
                )
            )
            */




        }
    }
}