<?php


class TSubtotal
{
	
    public static $module_number = 104777;
	
    public static function addSubTotalLine(&$object, $label, $qty)
    {
        if ((float)DOL_VERSION <= 3.4) {
            /**
			 * @var $object Facture
			 */

			if ($object->element=='facture') {
			    $res =  $object->addline($object->id, $label, 0, $qty, 0, 0, 0, 0, 0, '', '', 0, 0, '', 'HT', 0, 9, -1, TSubtotal::$module_number);
			}
			/**
			 * @var $object Propal
			 */
			elseif ($object->element=='propal') {
			    $res =  $object->addline($object->id, $label, 0, $qty, 0, 0, 0, 0, 0, 'HT', 0, 0, 9, -1, TSubtotal::$module_number);
			}
			/**
			 * @var $object Commande
			 */
			elseif ($object->element=='commande') {
			    $res =  $object->addline($object->id, $label, 0, $qty, 0, 0, 0, 0, 0, 0, 0, 'HT', 0, '', '', 9, -1, TSubtotal::$module_number);
			}
        } else {
            /**
			 * @var $object Facture
			 */

			if ($object->element=='facture') {
			    $res =  $object->addline($label, 0, $qty, 0, 0, 0, 0, 0, '', '', 0, 0, '', 'HT', 0, 9, -1, TSubtotal::$module_number);
			}
			/**
			 * @var $object Propal
			 */
			elseif ($object->element=='propal') {
			    $res = $object->addline($label, 0, $qty, 0, 0, 0, 0, 0, 'HT', 0, 0, 9, -1, TSubtotal::$module_number);
			}
			/**
			 * @var $object Commande
			 */
			elseif ($object->element=='commande') {
			    $res =  $object->addline($label, 0, $qty, 0, 0, 0, 0, 0, 0, 0, 'HT', 0, '', '', 9, -1, TSubtotal::$module_number);
			}
        }
    }
}
