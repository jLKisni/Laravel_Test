<?php

namespace Test_Laravel;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
   // Table Name
   protected $table = 'employees';
   // Primary Key
   public $pk = 'id';
   //Timestamps
   public $timestamps = true;


}

Employee::all();