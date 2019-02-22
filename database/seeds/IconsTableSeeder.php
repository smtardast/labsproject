<?php

use Illuminate\Database\Seeder;
use App\Icon;

class IconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $icons = [
            'picture',
            'caliper',
            'energy-drink',
            'build',
            'thinking-1',
            'prism',
            'paint',
            'team',
            'idea-3',
            'diamond',
            'compass',
            'cube',
            'puzzle',
            'magic-wand',
            'book',
            'vision',
            'notebook',
            'laptop-1',
            'coffee-cup',
            'creativity',
            'thinking',
            'branding',
            'flask',
            'idea-2',
            'imagination',
            'search',
            'monitor',
            'idea-1',
            'sketchbook',
            'computer',
            'scheme',
            'explorer',
            'museum',
            'cactus',
            'smartphone',
            'brainstorming',
            'idea',
            'graphic-tool-1',
            'vector',
            'rgb',
            'graphic-tool',
            'typography',
            'sketch',
            'paint-bucket',
            'video-player',
            'laptop',
            'artificial-intelligence',
            'abstract',
            'projector',
            'satellite'
        ];
        for ($i=1; $i < 51; $i++) { 
            if($i < 10){
                Icon::create([
                    'code' => 'flaticon-00' . $i . '-' . $icons[$i-1]
                ]);
            }else{
                Icon::create([
                    'code' => 'flaticon-0' . $i . '-' . $icons[$i-1]
                ]);
            }
        }
    }
}
