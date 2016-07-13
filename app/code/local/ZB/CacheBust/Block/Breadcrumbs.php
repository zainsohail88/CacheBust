<?php

class ZB_CacheBust_Block_Breadcrumbs extends Mage_Page_Block_Html_Breadcrumbs
{
    /**
     * Get cache key informative items
     *
     * @return array
     */
    public function getCacheKeyInfo()
    {
        return array(
            'ZB_CACHEBUST_BREADCRUMBS_CACHE',
            Mage::app()->getStore()->getCode(),
            $this->getTemplateFile(),
            'template' => $this->getTemplate(),
            microtime()
        );
    }
}