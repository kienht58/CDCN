<?php

use Illuminate\Database\Seeder;
use App\Models\Game;
use Carbon\Carbon;

class GamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
        	'name' => 'League of Legends',
        	'description' => 'League of Legends (abbreviated LoL or just League) is a multiplayer online battle arena video game developed and published by Riot Games for Microsoft Windows and OS X. The game follows a freemium model and is supported by microtransactions, and was inspired by the Warcraft III: The Frozen Throne mod, Defense of the Ancients.',
        	'minimumRequirement' => 'CPU Speed:	2 GHz processor
									RAM:	1 GB RAM (Windows Vista and 7 users will want 2 GB of RAM or more)
									OS:	Windows XP SP2, Windows Vista SP1, or Windows 7
									Video Card:	DirectX 9.0 capable video card support Shader 2.0
									Free Disk Space:	8 GB',
			'recommendRequirement' => 'CPU Speed:	3 GHz processor
									RAM:	2 GB of RAM (Windows Vista and 7 users should use 4 GB of RAM or more.)
									OS:	Windows XP SP2, Windows Vista SP1, or Windows 7
									Video Card:	Nvidia GeForce 8800/AMD Radeon HD 5670 or equivalent video card (Dedicated GPU with 512MB+ Video Memory(VRAM))
									Free Disk Space:	12 GB',
			'category' => '1',
			'releaseTime' => Carbon::now(),
			'downloadLink' => 'http://lienminh.garena.vn/download',
			'size' => '5.5'
        ]);

        Game::create([
        	'name' => 'Defense of the Ancients 2',
        	'description' => 'Dota 2 is a free-to-play multiplayer online battle arena (MOBA) video game developed and published by Valve Corporation. The game is the stand-alone sequel to Defense of the Ancients (DotA), a mod for the 2002 video game Warcraft III: Reign of Chaos and its expansion pack, The Frozen Throne. Dota 2 was released for Microsoft Windows, OS X, and Linux in July 2013, following a Windows-only public beta testing phase that began in 2011, and is one of the most actively played games on Steam, with maximum peaks of over a million concurrent players.',
        	'minimumRequirement' => '
									CPU:	Info
									CPU Speed:	Dual core from Intel or AMD at 2.8 GHz
									RAM:	4 GB
									OS:	Windows 7
									Video Card:	nVidia GeForce 8600/9600GT, ATI/AMD Radeon HD2600/3600
									Sound Card:	Yes
									Free Disk Space:	8 GB',
			'recommendRequirement' => '',
			'category' => '1',
			'releaseTime' => Carbon::createFromDate(2012, 12, 31),
			'downloadLink' => 'not available',
			'size' => '7.8'
        ]);

        Game::create([
        	'name' => 'Overwatch',
        	'description' => 'Overwatch is a multiplayer first-person shooter video game developed and published by Blizzard Entertainment. It was released in May 2016 for Microsoft Windows, PlayStation 4, and Xbox One.',
        	'minimumRequirement' => '
									CPU:	Intel Core i3 or AMD Phenom X3 8650
									CPU Speed:	Info
									RAM:	4 GB
									OS:	Windows Vista/7/ 8/10 64-bit (latest Service Pack)
									Video Card:	Nvidia GeForce GTX 460, ATI Radeon HD 4850, or Intel HD Graphics 4400
									Free Disk Space:	30 GB',
			'recommendRequirement' => '
									CPU:	Intel Core i5 or AMD Phenom II X3, 2.8 GHz
									CPU Speed:	Info
									RAM:	6 GB
									OS:	Windows Vista/7/ 8/10 64-bit (latest Service Pack)
									Video Card:	Nvidia GeForce GTX 660 or ATI Radeon HD 7950
									Free Disk Space:	30 GB',
			'category' => '1',
			'releaseTime' => Carbon::createFromDate(2016, 12, 31),
			'downloadLink' => 'not available',
			'size' => '30'
		]);
    }
}
