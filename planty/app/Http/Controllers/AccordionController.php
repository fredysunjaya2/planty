<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccordionController extends Controller
{
    public function accordion()
    {
        $accordions = [
     [
        'title' => 'What is included in each monthly plant kit?',
        'content' => 'Each monthly plant kit includes a selection of seasonal plants, essential gardening tools, and accessories tailored to the current season. You\'ll also receive detailed care guides and access to exclusive online content, including tutorial videos and expert tips.'
    ],
     [
        'title' => 'How do I choose the right plant kit for me?',
        'content' => 'The best plant kit for you depends on your gardening experience and preferences. Here\'s a quick guide to help you decide: ...'
    ],
    [
        'title' => 'How often will I receive a plant kit?',
        'content' => 'You\'ll receive a new plant kit every month unless you pause or cancel your subscription. We offer flexible subscription options to fit your needs.'
    ],
    [
        'title' => 'How do I care for my plants?',
        'content' => 'Each plant kit includes detailed care guides specific to the plants you receive. You\'ll also have access to exclusive online resources, including tutorial videos and expert tips, to help you keep your plants thriving.'
    ],
    [
        'title' => 'What happens if my plant arrives damaged?',
        'content' => 'We take pride in carefully packaging our plants to ensure they arrive safely. However, if your plant arrives damaged, please contact us within 48 hours of receiving your kit and we\'ll be happy to replace it for free.'
    ]
];
    return view('subscription',compact("accordions"));
    }

}
