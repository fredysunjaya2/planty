<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function values(){
        $values = [
            [
                'name' => 'Sustainability',
                'desc' => 'We prioritize eco-friendly practices in all aspects of our business, from packaging to plant care.',
                'img' => '/assets/aboutus/our-values-1.png'
            ],
            [
                'name' => 'Education',
                'desc' => 'We empower our customers with knowledge to become successful, eco-conscious plant parents.',
                'img' => '/assets/aboutus/our-values-2.png'
            ],
            [
                'name' => 'Community',
                'desc' => 'We foster a supportive network of plant enthusiasts, promoting shared learning and sustainable practices.',
                'img' => '/assets/aboutus/our-values-3.png'
            ],
            [
                'name' => 'Innovation',
                'desc' => 'We continuously seek and implement cutting-edge, sustainable solutions in plant care and business operations.',
                'img' => '/assets/aboutus/our-values-4.png'
            ],
            [
                'name' => 'Quality',
                'desc' => 'We ensure the highest standards in plant health and product excellence, prioritizing long-lasting, sustainable results.',
                'img' => '/assets/aboutus/our-values-5.png'
            ],
            [
                'name' => 'Responsibility',
                'desc' => 'We commit to ethical sourcing, fair labor practices, and reducing our environmental impact at every step.',
                'img' => '/assets/aboutus/our-values-6.png'
            ]
        ];

        $team = [
            [
                'name' => 'Fredy Sunjaya',
                'nim' => '2602189240',
                'img' => '/assets/aboutus/our-team-1.png'
            ],
            [
                'name' => 'Putu A. D. Kenzhie',
                'nim' => '2602200294',
                'img' => '/assets/aboutus/our-team-2.png'
            ],
            [
                'name' => 'Stephanie Anastasia',
                'nim' => '2602189796',
                'img' => '/assets/aboutus/our-team-3.png'
            ],
            [
                'name' => 'Felix Gustino Tjuatja',
                'nim' => '2602189234',
                'img' => '/assets/aboutus/our-team-4.png'
            ],
            [
                'name' => 'Neisya Holly Santoso',
                'nim' => '2602189934',
                'img' => '/assets/aboutus/our-team-5.png'
            ]
        ];

        return view('about_us', compact('values', 'team'));
    }
}
