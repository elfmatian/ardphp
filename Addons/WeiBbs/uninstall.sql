DELETE FROM `wp_attribute` WHERE model_id = (SELECT id FROM wp_model WHERE `name`='weisite_category' ORDER BY id DESC LIMIT 1);
DELETE FROM `wp_model` WHERE `name`='weisite_category' ORDER BY id DESC LIMIT 1;
DROP TABLE IF EXISTS `wp__category`;


DELETE FROM `wp_attribute` WHERE model_id = (SELECT id FROM wp_model WHERE `name`='weisite_cms' ORDER BY id DESC LIMIT 1);
DELETE FROM `wp_model` WHERE `name`='weisite_cms' ORDER BY id DESC LIMIT 1;
DROP TABLE IF EXISTS `wp__cms`;


DELETE FROM `wp_attribute` WHERE model_id = (SELECT id FROM wp_model WHERE `name`='weisite_footer' ORDER BY id DESC LIMIT 1);
DELETE FROM `wp_model` WHERE `name`='weisite_footer' ORDER BY id DESC LIMIT 1;
DROP TABLE IF EXISTS `wp__footer`;


DELETE FROM `wp_attribute` WHERE model_id = (SELECT id FROM wp_model WHERE `name`='weisite_slideshow' ORDER BY id DESC LIMIT 1);
DELETE FROM `wp_model` WHERE `name`='weisite_slideshow' ORDER BY id DESC LIMIT 1;
DROP TABLE IF EXISTS `wp__slideshow`;


