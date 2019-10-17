<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
/**
*class menu
*
@property int id
@property int parent_id
@property int sort
@property string name
@property string link
@property string type
@property bool active
*/

class Menu extends Model
{
    public const TYPE_CATEGORY = 'category';
    public const TYPE_MENU = 'menu';
    /** @return array ...*/
    public static function getTypes():array
    {
 		return [
 			self::TYPE_CATEGORY => 'Category',
    		self::TYPE_MENU => 'Menu',
 		];
    }
    protected $fillable = [
	'id',
	'parent_id',
	'sort',
	'name',
	'link',
	'type',
	'active',
    ];
}
