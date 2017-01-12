<?php
use LizardsAndPumpkins\MagentoConnector\Uploader;
use LizardsAndPumpkins\MagentoConnector\XmlBuilder\CatalogMerge;

require __DIR__ . '/lib/autoload.php';

/**
 * Created by PhpStorm.
 * User: a.ziethen
 * Date: 12.01.17
 * Time: 10:43
 */
class azlizardsimport extends oxUBase
{
    protected $defaultVAT = 19;

    protected $products;

    public function render()
    {
        $this->_generateLizardsXML();

        exit;
    }


    protected function _generateLizardsXML()
    {
        $filename = tmpfile();

        $xmlBuilderAndUploader = new Export(
            $merge = new CatalogMerge(),
            $uploader = new Uploader($filename)
        );

        /**
         * @var oxArticle $articleObject
         */
        $articlelist = oxNew(oxArticleList::class);
        $select = 'SELECT oxid FROM oxarticles';
        $articlelist->selectString($select);

        foreach ($articlelist as $sku => $simpleArticleObject) {
            $articleObject = oxNew(oxArticle::class);
            $articleObject->load($sku);


            $product = [];
            $product['type_id'] = 'simple';
            $product['tax_class'] = $articleObject->getArticleVat();
            $product['sku'] = $sku;


            $picturePath = 'product/1/';
            $pictureFileName = $articleObject->oxarticles__oxpic1->value;
            $product['images'] = [
                [
                    'main'  => true,
                    'file'  => $picturePath . $pictureFileName,
                    'label' => $articleObject->oxarticles__oxtitle->value,
                ],
            ];

            $attributes = [
                'category'         => $articleObject->getCategory()->getTitle(),
                'title'            => $articleObject->oxarticles__oxtitle->value,
                'price'            => $articleObject->getPrice()->getBruttoPrice(),
                'shortdescription' => $articleObject->oxarticles__oxshortdesc->value,
                'longdescription'  => $articleObject->getLongDesc(),
                'stockquantity'    => $articleObject->oxarticles__oxstock->value,
            ];
            $product['attributes'] = $attributes;


            $this->products[] = $product;

            $xmlBuilderAndUploader->process($product);
        }

        $uploader->writePartialXmlString($merge->finish());

        return $filename;

        //var_dump($this->products);
    }


}
