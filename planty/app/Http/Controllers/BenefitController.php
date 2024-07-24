<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BenefitController extends Controller
{
     public function benefit()
    {
        $benefits =
        [
            [
                'emot' => '😄',
                'title' => 'Reduce Stress',
                'desc' => 'Indoor plants create a calming environment, helping to lower stress levels and promote relaxation in your home or office space.',
            ],
            [
                'emot' => '😊',
                'title' => 'Improve Mood',
                'desc' => 'The presence of greenery and nature indoors can boost your mood, increase feelings of happiness, and reduce symptoms of anxiety and depression.',
            ],
            [
                'emot' => '❤️',
                'title' => 'Enhance Creativity',
                'desc' => 'Surrounding yourself with plants can stimulate your mind, inspire new ideas, and enhance problem-solving skills in both work and personal environments.',
            ],
            [
                'emot' => '🚀',
                'title' => 'Boost Productivity',
                'desc' => 'Studies show that having plants in your workspace can increase concentration, improve memory, and boost overall productivity by up to 15%.',
            ],
            [
                'emot' => '🌱',
                'title' => 'Improve Air Quality',
                'desc' => 'Many indoor plants act as natural air purifiers, removing toxins and increasing oxygen levels, leading to cleaner, healthier air in your living spaces.',
            ],
            [
                'emot' => '🙏',
                'title' => 'Increase Mindfulness',
                'desc' => 'Caring for plants encourages mindfulness and connection with nature, helping you stay present and grounded in your daily life.',
            ],
        ];

        return view('funfact', ['benefits' => $benefits]);
    }
}
