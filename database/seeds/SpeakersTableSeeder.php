<?php

use Illuminate\Database\Seeder;

class SpeakersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('speakers')->delete();
        
        \DB::table('speakers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dave Hempy',
                'avatar' => 'http://www.redbullflugtag.com/usa-louisville/wp-content/uploads/sites/17/2016/06/David-H-532x398.jpeg',
                'website' => '',
                'twitter' => '',
                'facebook' => '',
                'linkedin' => '',
                'created_at' => '2016-11-26 14:16:42',
                'updated_at' => '2016-11-26 14:16:42',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Christopher Davis',
                'avatar' => 'http://christopherdavis.me/images/christopher-davis.png',
                'website' => 'http://christopherdavis.me',
                'twitter' => 'http://twitter.com/chrisguitarguy',
                'facebook' => '',
                'linkedin' => '',
                'created_at' => '2016-11-26 14:25:58',
                'updated_at' => '2016-11-26 14:25:58',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Colan Connon',
                'avatar' => 'https://avatars2.githubusercontent.com/u/6674648?v=3&s=466',
                'website' => 'https://github.com/colanconnon',
                'twitter' => '',
                'facebook' => '',
                'linkedin' => '',
                'created_at' => '2016-11-26 14:29:39',
                'updated_at' => '2016-11-26 14:29:39',
            ),
        ));
        
        
    }
}
