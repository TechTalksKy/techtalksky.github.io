<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('posts')->delete();
        
        \DB::table('posts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'MVC Architecture',
                'slug' => 'first-meetup',
                'type' => 'meetup',
                'description' => 'Come listen to Dave Hempy talk about Ruby on Rails. Expect a good introduction to the MVC architecture and the Ruby programming language.',
                'content' => 'Learn about the MVC architecture with examples from the Rails framework written in the Ruby programming language from speaker Dave Hempy.

Dave has been programming for years, and loves open source stacks. And most recently participated in RedBull\'s Flugtag in Louisville. Dave also helps run the [Kre8now Makerspace](http://www.kre8now.com/).',
                'video_url' => '',
                'speaker_id' => 1,
                'meetup_date' => '2016-09-14 18:00:00',
                'city' => 'Lexington',
                'facebook_link' => 'https://www.facebook.com/events/336427056696877',
                'meetup_link' => '',
                'created_at' => '2016-11-26 14:16:15',
                'updated_at' => '2016-11-26 14:16:15',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Dave Hempy talk on MVC now online',
                'slug' => 'dave-hempy',
                'type' => 'video',
                'description' => 'Dave\'s talk from September can now be watched here!',
                'content' => '',
                'video_url' => 'https://www.youtube.com/embed/dO7D--52ois',
                'speaker_id' => 1,
                'meetup_date' => '2016-09-14 18:00:00',
                'city' => 'Lexington',
                'facebook_link' => '',
                'meetup_link' => '',
                'created_at' => '2016-11-26 14:21:52',
                'updated_at' => '2016-11-26 14:21:52',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Deploying Applications with Terraform & AWS Container Service',
                'slug' => '2016-10-12-terraform-and-aws',
                'type' => 'meetup',
                'description' => 'Christopher Davis will be talking about Terraform and AWS, describing your infrastructure as code.',
                'content' => 'Explore the benefits of describing your infrastructure as code. We\'ll build a small application using.

[Chirstoper Davis](http://christopherdavis.me) has been building web things for eight years. A classical musician by training, Chris came to the software world via WordPress and is currently a lead developer at [PMG](https://www.pmg.com) where he builds internal advertising tools and deals with a lot of bigger than excel data. Find him around the web [@chrisguitarguy](http://twitter.com/chrisguitarguy).',
                'video_url' => '',
                'speaker_id' => 2,
                'meetup_date' => '2016-10-12 18:00:00',
                'city' => 'Lexington',
                'facebook_link' => 'https://www.facebook.com/events/605156676321055/',
                'meetup_link' => 'http://www.meetup.com/Tech-Talks-KY/events/234621599/',
                'created_at' => '2016-11-26 14:25:21',
                'updated_at' => '2016-11-26 14:25:21',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Managing Frontend State with Redux',
                'slug' => '2016-10-11-managing-frontend-state-with-redux',
                'type' => 'meetup',
                'description' => 'Colan Connon will be talking about Redux, a state container for Javascript apps.',
                'content' => 'Struggling with managing state in a consistent way in your javascript applications? Want to learn more about modern front-end architectures? In this talk we will explore using redux with angular, react, and plain javascript.

[Redux](http://redux.js.org)

[Colan Connon](https://github.com/colanconnon) has been programming for 5 years, starting out in a .NET stack.  He\'s been playing with React and Angular for the past 2 years and is currently an Engineer at [Generation Tux](http://generationtux.com)',
                'video_url' => '',
                'speaker_id' => 3,
                'meetup_date' => '2016-10-11 18:00:00',
                'city' => 'Louisville',
                'facebook_link' => 'https://www.facebook.com/events/1455873317761591/',
                'meetup_link' => 'http://www.meetup.com/Tech-Talks-KY/events/234621660/',
                'created_at' => '2016-11-26 14:27:03',
                'updated_at' => '2016-11-26 14:27:03',
            ),
        ));
        
        
    }
}
