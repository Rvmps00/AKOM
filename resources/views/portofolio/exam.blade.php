
<x-guest-layout>
    <x-layouts.demo>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Portal - Professional Assessment</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body class="font-['Inter'] bg-gradient-to-br from-gray-100 to-gray-200 min-h-screen">

<!-- Navigation & Timer -->
<nav class="bg-white shadow-sm  w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center">
                <span class="text-2xl font-bold text-purple-600">ExamPro</span>
            </div>
            <div class="flex items-center space-x-4">
                <div class="bg-gray-100 px-4 py-2 rounded-lg">
                    <span class="text-gray-700">⏳ 45:00</span>
                </div>
                <div class="w-8 h-8 bg-purple-600 text-white rounded-full flex items-center justify-center">
                    25
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Progress Bar -->
<div class="pt-16">
    <div class="h-1 bg-purple-200">
        <div class="h-full bg-purple-600 w-3/4 transition-all duration-300"></div>
    </div>
</div>

<main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="grid lg:grid-cols-3 gap-8">
        <!-- Question Section -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl shadow-lg p-6 mb-6">
                <div class="flex items-center justify-between mb-6">
                    <span class="text-gray-500">Question 15/50</span>
                    <span class="bg-purple-100 text-purple-600 px-3 py-1 rounded-full text-sm">
                        2 Marks
                    </span>
                </div>
                
                <h2 class="text-xl font-semibold mb-6">
                    Which of the following is NOT a characteristic of object-oriented programming?
                </h2>

                <!-- Options -->
                <div class="space-y-4">
                    <label class="flex items-center p-4 border rounded-lg hover:border-purple-400 cursor-pointer transition-all">
                        <input type="radio" name="answer" class="h-5 w-5 text-purple-600 border-2 border-gray-300">
                        <span class="ml-3 text-gray-700">Inheritance</span>
                    </label>

                    <label class="flex items-center p-4 border rounded-lg hover:border-purple-400 cursor-pointer transition-all bg-purple-50 border-purple-200">
                        <input type="radio" name="answer" class="h-5 w-5 text-purple-600 border-2 border-purple-400" checked>
                        <span class="ml-3 text-gray-700">Polymorphism</span>
                    </label>

                    <label class="flex items-center p-4 border rounded-lg hover:border-purple-400 cursor-pointer transition-all">
                        <input type="radio" name="answer" class="h-5 w-5 text-purple-600 border-2 border-gray-300">
                        <span class="ml-3 text-gray-700">Encapsulation</span>
                    </label>

                    <label class="flex items-center p-4 border rounded-lg hover:border-purple-400 cursor-pointer transition-all">
                        <input type="radio" name="answer" class="h-5 w-5 text-purple-600 border-2 border-gray-300">
                        <span class="ml-3 text-gray-700">Abstraction</span>
                    </label>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="grid grid-cols-2 gap-4">
                <button class="bg-gray-100 text-gray-600 px-6 py-3 rounded-lg hover:bg-gray-200 transition-all">
                    ← Previous
                </button>
                <button class="bg-purple-600 text-white px-6 py-3 rounded-lg hover:bg-purple-700 transition-all">
                    Next Question →
                </button>
            </div>
        </div>

        <!-- Questions Navigation -->
        <div class="bg-white rounded-xl shadow-lg p-6 h-fit sticky top-24">
            <h3 class="text-lg font-semibold mb-4">Questions</h3>
            <div class="grid grid-cols-5 gap-2">
                @for($i=1; $i<=25; $i++)
                    <a href="#" class="
                        w-10 h-10 flex items-center justify-center rounded-lg
                        @if($i ==15) bg-purple-600 text-white
                        @elseif($i <15) bg-green-100 text-green-600
                        @else bg-gray-100 text-gray-600 hover:bg-gray-200
                        @endif
                    ">
                        {{ $i }}
                    </a>
                @endfor
            </div>
            
            <div class="mt-6 space-y-2">
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-green-100 rounded"></div>
                    <span class="text-sm">Answered</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-purple-600 rounded"></div>
                    <span class="text-sm">Current</span>
                </div>
                <div class="flex items-center space-x-2">
                    <div class="w-4 h-4 bg-gray-100 rounded"></div>
                    <span class="text-sm">Unanswered</span>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer class="bg-white border-t mt-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
        <div class="text-center text-gray-600">
            <p>© 2024 ExamPro. All rights reserved</p>
            <div class="mt-2 flex justify-center space-x-4">
                <a href="#" class="hover:text-purple-600">Terms of Service</a>
                <a href="#" class="hover:text-purple-600">Privacy Policy</a>
            </div>
        </div>
    </div>
</footer>

<!-- Floating Action Button (Mobile) -->
<div class="fixed bottom-4 right-4 lg:hidden">
    <button class="bg-purple-600 text-white p-4 rounded-full shadow-lg hover:bg-purple-700 transition-all">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>
</div>

</body>
</html>
    </x-layouts.demo>
</x-guest-layout>