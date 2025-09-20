<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller

{

    public function index()

    {

        // Your portfolio data - you can modify these details

        $portfolio = [

            'name' => 'Dela cruz, Carl Angelo E.',

            'title' => 'Full Stack Web Developer',

            'email' => 'carldelacruz0321@gmail.com',

            'phone' => '+9945349328',

            'location' => 'PH, Manila',

            'bio' => 'Passionate web developer with 5+ years of experience in creating responsive and dynamic web applications.',

            'profile_image' => './image/unnamed.jpg',

            'skills' => ['Laravel', 'PHP', 'JavaScript', 'HTML5', 'CSS3'],

            'projects' => [], // Project data

            'experience' => [], // Experience data

            'education' => [], // Education data

            'social_links' => [] // Social media links

        ];

        return view('portfolio.index', compact('portfolio'));

    }

}