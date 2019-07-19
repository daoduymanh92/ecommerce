<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
    	// get database
    	// collection
    	$items = array( // array
    		array(
    			'image' => 'http://placehold.it/700x400',
    			'title' => 'Item One',
    			'price' => '$ 23.4',
    			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
    		),
    		array(
    			'image' => 'http://placehold.it/700x400',
    			'title' => 'Item One',
    			'price' => '$ 23.4',
    			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
    		),
    		array(
    			'image' => 'http://placehold.it/700x400',
    			'title' => 'Item One',
    			'price' => '$ 23.4',
    			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
    		),
    		array(
    			'image' => 'http://placehold.it/700x400',
    			'title' => 'Item One',
    			'price' => '$ 23.4',
    			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
    		),
    		array(
    			'image' => 'http://placehold.it/700x400',
    			'title' => 'Item One',
    			'price' => '$ 23.4',
    			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
    		),
    		array(
    			'image' => 'http://placehold.it/700x400',
    			'title' => 'Item One',
    			'price' => '$ 23.4',
    			'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!'
    		),
    	);
    	// xu ly du lieu
    	// Connection Database
    	return view('index')->with('items', $items);
    }
}
