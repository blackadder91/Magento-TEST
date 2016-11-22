<?php
$installer = $this;
$installer->startSetup();

$attribute  = array(
    'type' => 'text',
    'label'=> 'Top Description',
    'input' => 'textarea',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'visible' => 1,
    'required' => 0,
	'wysiwyg_enabled' => true,
    'user_defined' => 1,
    'default' => "",
    'group' => "General Information",
	'visible_on_front' => true,
);

$installer->addAttribute('catalog_category', 'top_description', $attribute);
$categoryEntityTypeId = $installer->getEntityTypeId('catalog_category');
$installer->updateAttribute($categoryEntityTypeId, 'top_description', 'is_wysiwyg_enabled', 1);
$installer->updateAttribute($categoryEntityTypeId, 'top_description', 'is_html_allowed_on_front', 1);
$installer->endSetup();
?>
