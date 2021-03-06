<?php

namespace Drupal\apidae_drupal_module\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Field\FormatterBase;

/**
 * Plugin implementation of the 'ao Key Value' formatter.
 *
 * @FieldFormatter (
 *   id = "ao_key_value_formatter",
 *   label = @Translation("AO Key Value"),
 *   field_types = {
 *     "ao_key_value"
 *   }
 * )
 */
class AoKeyValueFormatter extends FormatterBase
{

    /**
     * Builds a renderable array for a field value.
     *
     * @param \Drupal\Core\Field\FieldItemListInterface $items
     *   The field values to be rendered.
     * @param string $langcode
     *   The language that should be used to render the field.
     *
     * @return array
     *   A renderable array for $items, as an array of child elements keyed by
     *   consecutive numeric indexes starting from 0.
     */
    public function viewElements(FieldItemListInterface $items, $langcode)
    {
        $elements = array();
        foreach ($items as $delta => $item) {

            $source = array(
                '#markup' => $item->value,
                '#key' => $item->key,
                '#value' => $item->value,
            );

            $elements[$delta] = $source;
        }

        return $elements;
    }
}