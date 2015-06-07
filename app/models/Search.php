<?php
/**
 * Created by PhpStorm.
 * User: Joaquim
 * Date: 03/06/2015
 * Time: 23:23
 */

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Search extends Eloquent {

    use SoftDeletingTrait;

    protected $table = 'searches';
    protected $softDelete = true;
    protected $fillable = array('origin', 'destination');

    public function user() {
        return $this->belongsTo('User');
    }

}
