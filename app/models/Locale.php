<?php
/**
 * Created by PhpStorm.
 * User: Joaquim
 * Date: 03/06/2015
 * Time: 23:23
 */

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Locale extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'locales';
    protected $softDelete = true;
    protected $fillable = array('address');

}
