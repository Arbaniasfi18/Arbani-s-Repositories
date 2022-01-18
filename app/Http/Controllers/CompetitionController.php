<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\Competition;

class CompetitionController extends Controller
{
    public function index(){
        return view('pages.competition.home', [
            'competitions' => [
                [
                    'competition_name'  => 'Software Development',
                    'slug'              => 'software-development',
                    'description'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae necessitatibus reiciendis, blanditiis praesentium, veritatis repellendus iure ipsum itaque earum ullam suscipit saepe enim assumenda beatae.',
                    'image'             => 'competition-images/placeholder.png'
                ],
                [
                    'competition_name'  => 'Game Development',
                    'slug'              => 'game-development',
                    'description'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae necessitatibus reiciendis, blanditiis praesentium, veritatis repellendus iure ipsum itaque earum ullam suscipit saepe enim assumenda beatae.',
                    'image'             => 'competition-images/placeholder.png'
                ],
                [
                    'competition_name'  => 'E-Sports',
                    'slug'              => 'e-sports',
                    'description'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae necessitatibus reiciendis, blanditiis praesentium, veritatis repellendus iure ipsum itaque earum ullam suscipit saepe enim assumenda beatae.',
                    'image'             => 'competition-images/placeholder.png'
                ],
                [
                    'competition_name'  => 'IT Business Case',
                    'slug'              => 'it-business-case',
                    'description'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae necessitatibus reiciendis, blanditiis praesentium, veritatis repellendus iure ipsum itaque earum ullam suscipit saepe enim assumenda beatae.',
                    'image'             => 'competition-images/placeholder.png'
                ],
                [
                    'competition_name'  => 'Poster Design',
                    'slug'              => 'poster-design',
                    'description'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae necessitatibus reiciendis, blanditiis praesentium, veritatis repellendus iure ipsum itaque earum ullam suscipit saepe enim assumenda beatae.',
                    'image'             => 'competition-images/placeholder.png'
                ],
                [
                    'competition_name'  => 'UI/UX Design',
                    'slug'              => 'ui-ux-design',
                    'description'       => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae necessitatibus reiciendis, blanditiis praesentium, veritatis repellendus iure ipsum itaque earum ullam suscipit saepe enim assumenda beatae.',
                    'image'             => 'competition-images/placeholder.png'
                ],
            ]
                        // => Competition::all()
        ]);
    }

    public function detail(Request $request){
        return view('pages.competition.detail');
        // => Competition::where('slug', $slug)->firstOrFail();
    }
}
