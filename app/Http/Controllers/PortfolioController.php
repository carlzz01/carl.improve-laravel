<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = [

         
            // Basic Info
            'name'          => 'Carl Angelo E. Dela Cruz',
            'title'         => 'Fullstack Web Developer',
            'bio'           => 'I’m a 2nd-year IT student who loves learning how technology works and how to turn ideas into real projects. I’m currently exploring web development and programming while building my skills for future opportunities.',
            'profile_image' => asset('images/unnamed.jpg'),


            // Contact Info
            'email'    => 'carldelacruz0321@gmail.com',
            'phone'    => '09945349328',
            'location' => 'Manila, Philippines',

            
            // Skills         
            'skills' => [
                'Active listening skills',
                'Time management skill',
                'Can work under pressure',
                'Teamwork',
                'Multi-tasking',
            ],

            
            // Work Experience          
            'experience' => [
                [
                    'role'     => 'Waiter',
                    'company'  => 'Chef Patrick’s Kitchen',
                    'duration' => '2021-2022',
                ],
                [
                    'role'     => 'Service Crew',
                    'company'  => 'Greenwich - FisherMall Malabon',
                    'duration' => '2022-2023',
                ],
                [
                    'role'     => 'Service Crew',
                    'company'  => 'Jollibee Concepcion Malabon',
                    'duration' => '2024-2025',
                ],
            ],

            
            // Education
            'education' => [
                [
                    'degree' => 'BS in Information Technology',
                    'school' => 'Global Reciprocal College',
                    'year'   => '2nd Year',
                ],
            ],

            // Social Links
            'social_links' => [
                'facebook'  => 'https://www.facebook.com/share/1CfMUyBJbj/?mibextid=wwXIfr',
                'instagram' => 'https://www.instagram.com/invites/contact/?igsh=1qv1vkpi49xhi&utm_content=xmmc1jp',
                'github'    => 'https://github.com/carlzz01',
            ],
        ];

        return view('portfolio.portfolio', compact('portfolio'));
    }
}
