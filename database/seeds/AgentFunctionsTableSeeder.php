<?php

use Illuminate\Database\Seeder;
use memsWebpanel\AgentFunction;

class AgentFunctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $func = new AgentFunction();
        $func->name = 'production agent';
        $func->save();

        $func = new AgentFunction();
        $func->name = 'storage agent';
        $func->save();

		$func = new AgentFunction();
        $func->name = 'household agent';
        $func->save();

        $func = new AgentFunction();
        $func->name = 'microgrid agent';
        $func->save();
    }
}
