<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
class Loan extends Eloquent
{
   /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
   protected $fillable = [
       'customerId',
       'reference',
       'state',
       'amount_issued',
       'amount_to_pay'
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