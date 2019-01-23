<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Storage;

class createSeriesTest extends TestCase
{
	use RefreshDatabase;

   public function test_a_series_must_be_created_with_a_title()
    {
    	$this->post('/admin/series/store', [
    		'series_description' => 'the best vue casts ever',
    		'series_image_url' => UploadedFile::fake()->image('image-series.png')
    	])->assertSessionHasErrors('title');
    }
    public function test_a_series_must_be_created_with_a_description()
    {
        
    	$this->post('/admin/series/store', [
    		'series_title' => 'the best vue casts ever',
    		'series_image_url' => UploadedFile::fake()->image('image-series.png')
    	])->assertSessionHasErrors('description'); 
    }
    public function test_a_series_must_be_created_with_an_image()
    {
           	$this->post('/admin/series/store', [ 
    		'series_title' => 'the best vue casts ever',
    		'series_description' => 'course description'
    	])->assertSessionHasErrors('image');
    }
    public function test_a_series_must_be_created_with_an_image_which_is_actually_an_image()
    {
        
    	$this->post('/admin/series/store', [
    		'series_title' => 'the best vue casts ever',
    		'series_description' => 'course description',
    		'series_image_url' => 'STRING_INVALID_IMAGE'
    	])->assertSessionHasErrors('image');
    }

}
