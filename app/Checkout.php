<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    public $table = "shoppingcart";

    protected $fillable = ['fname','lname','email','state','city','address','mphone','item','quantity','amount'];
}
