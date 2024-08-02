<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantcareController extends Controller{
    public function content(){
        $content = [
            [
                'name' => 'Tutorial',
                'desc' => 'Learn how to properly care for your plants with Planty. Our step-by-step guides cover watering, fertilizing, pruning, and specialized care tips for various plant types. Whether youre a beginner or an experienced plant parent, our tutorials will help your plants thrive. Our comprehensive tutorials are designed to take you from novice to expert. We cover everything from basic plant care to advanced techniques like propagation and pest management. With video demonstrations, interactive quizzes, and personalized care schedules, youll have all the tools you need to become a confident plant caretaker.'
            ],
            [
                'name' => 'Fun Facts',
                'desc' => 'Explore fascinating facts about the plant world. Did you know some plants can communicate with each other? Or that certain plants can move quickly? Discover natures wonders and boost your botanical knowledge with Plantys unique plant trivia. Dive deeper into the mysterious world of plants with our curated collection of fun facts. Learn about record-breaking plants, unusual adaptations, and the role of plants in history and culture. Our fun facts section is regularly updated, ensuring you always have new and exciting plant knowledge to share with friends and family.'
            ],
            [
                'name' => 'Diseases',
                'desc' => 'Quickly identify and address plant health issues. Our database covers common symptoms, causes, and solutions for various plant diseases. With our expert guidance, you can diagnose problems and take appropriate action to keep your plants healthy. Our disease identification tool uses advanced image recognition to help you spot issues early. Simply upload a photo of your troubled plant, and our AI will suggest possible causes and treatments. We also provide preventive care tips and organic treatment options to keep your plants thriving naturally.'
            ],
            [
                'name' => 'Don’ts',
                'desc' => 'Avoid common plant care mistakes. Learn what not to do when caring for your green friends, from overwatering to improper lighting. Our donts section helps you steer clear of practices that could harm your plants, ensuring they stay happy and healthy. We have compiled a comprehensive list of plant care donts based on years of experience and expert advice. Each entry explains why certain practices are harmful and offers better alternatives. From choosing the right pot to understanding fertilizer ratios, our donts section will help you avoid pitfalls and become a more confident plant caretaker.'
            ],
        ];

        return view('plant_care', compact('content'));
    }
}
