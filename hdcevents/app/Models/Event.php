<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts =[
        'items' => 'array'
    ];
	/**
	 * @return mixed
	 */
	function getCats() {
		return $this->cats;
	}
	
	/**
	 * @param mixed $cats 
	 * @return Event
	 */
	function setCats($cats): self {
		$this->cats = $cats;
		return $this;
	}
}
