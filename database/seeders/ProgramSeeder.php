<?php

namespace Database\Seeders;

use App\Models\Data\Program;
use App\Models\Data\SubProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prg = Program::create([
            'name' => 'Creative',
            'pid' => public_id(),
        ]);
       
        SubProgram::insert([
            ['name' => 'film','pid' => public_id(), 'program_pid' => $prg->pid ],
            ['name' => 'theatre','pid' => public_id(),'program_pid' => $prg->pid],
            ['name' => 'music','pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'dance','pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'literature','pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'fashion','pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'television','pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'arts','pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'sports','pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'media','pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'advertising','pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'gaming','pid' => public_id(), 'program_pid' => $prg->pid],
        ]);
        $prg = Program::create([
            'name' => 'Innovative',
            'pid' => public_id(),
        ]);

        SubProgram::insert([
            ['name' => 'Information Technology', 'pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'FinTech', 'pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'E-commerce', 'pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'Digital Health', 'pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'EdTech', 'pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'Softwares', 'pid' => public_id(), 'program_pid' => $prg->pid],
            ['name' => 'Cybersecurity', 'pid' => public_id(), 'program_pid' => $prg->pid],
        ]);
    }
}
