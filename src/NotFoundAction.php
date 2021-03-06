<?php
namespace Teto\Routing;

/**
 * NotFoundAction object
 *
 * @package    Teto\Routing
 * @author     USAMI Kenta <tadsan@zonu.me>
 * @copyright  2015 USAMI Kenta
 * @license    http://www.apache.org/licenses/LICENSE-2.0
 *
 * @property-read string[] $methods
 * @property-read string[] $split_path
 * @property-read array    $param_pos
 * @property-read mixed    $value
 * @property-read string   $extension
 * @property-read boolean  $is_wildcard
 * @property-read string[] $available_extensions
 */
class NotFoundAction extends Action
{
    use \Teto\Object\TypedProperty;

    private static $property_types = [
        'methods'     => 'string[]', // expects any HTTP-method
        'split_path'  => 'string[]',
        'param_pos'   => 'array',
        'value'       => 'mixed',
        'param'       => 'array',
        'extension'   => 'string',
        'is_wildcard' => 'bool',
        'available_extensions' => 'array',
    ];
}
