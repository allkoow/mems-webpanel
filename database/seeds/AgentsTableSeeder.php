<?php

use Illuminate\Database\Seeder;
use memsWebpanel\Agent;

class AgentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agent = new Agent();
        $agent->name = "agent001";
        $agent->user_id = 1;
        $agent->function_id = 1;
        $agent->save();

        $agent = new Agent();
        $agent->name = "agent002";
        $agent->user_id = 1;
        $agent->function_id = 2;
        $agent->save();

        $agent = new Agent();
        $agent->name = "agent003";
        $agent->user_id = 1;
        $agent->function_id = 1;
        $agent->save();

        $agent = new Agent();
        $agent->name = "agent004";
        $agent->user_id = 1;
        $agent->function_id = 3;
        $agent->save();

        $agent = new Agent();
        $agent->name = "agent005";
        $agent->user_id = 1;
        $agent->function_id = 4;
        $agent->save();
    }
}
