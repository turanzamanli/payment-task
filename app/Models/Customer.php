<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
class Customer extends Eloquent
{
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
       'firstname',
       'lastname',
       'ssn',
       'email'
   ];

   /*
   * Get Customers
   *
   */
   public function todo()
   {
       return $this->hasMany('Todo');
   }
 }