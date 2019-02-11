<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Series::create([

    		'title' => 'Vue JS 2.0',
    		'slug' => str_slug('Vue JS 2.0'),
    		'category' => str_slug('web_development'),
    		'image_url' => 'series/vuejs.jpeg',
    		'description' => 'From startups to Fortune 500 companies, Trello is the most visual way for teams to collaborate on any project. Uniquely evolve equity invested value vis-a-vis proactive testing procedures. Collaboratively create worldwide results without resource maximizing. Uniquely evolve equity invested value vis-a-vis proactive testing procedures. Collaboratively create worldwide results without resource maximizing.'
    	]);

    	App\Series::create([

    		'title' => 'Laravel 5.7',
    		'slug' => str_slug('Laravel 5.7'),
    		'category' => str_slug('web_development'),
    		'image_url' => 'series/laravel.png',
    		'description' => 'From startups to Fortune 500 companies, Trello is the most visual way for teams to collaborate on any project. Uniquely evolve equity invested value vis-a-vis proactive testing procedures. Collaboratively create worldwide results without resource maximizing. Uniquely evolve equity invested value vis-a-vis proactive testing procedures. Collaboratively create worldwide results without resource maximizing.'
    	]);

    	App\Series::create([

    		'title' => 'Introduction to MySQL',
    		'slug' => str_slug('Introduction to MySQL'),
    		'category' => str_slug('database'),
    		'image_url' => 'series/mysql.jpg',
    		'description' => 'From startups to Fortune 500 companies, Trello is the most visual way for teams to collaborate on any project. Uniquely evolve equity invested value vis-a-vis proactive testing procedures. Collaboratively create worldwide results without resource maximizing. Uniquely evolve equity invested value vis-a-vis proactive testing procedures. Collaboratively create worldwide results without resource maximizing.'
    	]);

    	App\Series::create([

    		'title' => 'Oracle Administration',
    		'slug' => str_slug('Oracle Administration'),
    		'category' => str_slug('database'),
    		'image_url' => 'series/oracle.jpg',
    		'description' => 'From startups to Fortune 500 companies, Trello is the most visual way for teams to collaborate on any project. Uniquely evolve equity invested value vis-a-vis proactive testing procedures. Collaboratively create worldwide results without resource maximizing. Uniquely evolve equity invested value vis-a-vis proactive testing procedures. Collaboratively create worldwide results without resource maximizing.'
    	]);
    }

    }

