
<x-app-layout>
    
    <x-slot name="header">
        <div>
            <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                Student Resources
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Explore your learning materials
            </p>
        </div>
    </x-slot>

    
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

           
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600
                        rounded-2xl shadow-lg p-8 mb-8 text-white">

                <p class="text-indigo-100 text-sm font-medium mb-2">
                    YOUR LEARNING SPACE
                </p>

                <h1 class="text-3xl sm:text-4xl font-bold mb-3">
                    Hello, {{ auth()->user()->name }}!
                </h1>

                <p class="text-indigo-100">
                    Continue learning and build your Laravel development skills
                    with the lessons available below.
                </p>
            </div>

    
            <div class="mb-6">
                <h3 class="text-2xl font-bold text-gray-800 mb-2">
                    Available Lessons
                </h3>

                <p class="text-gray-500">
                    These learning resources are available to registered students.
                </p>
            </div>

        
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

         
                <div class="bg-white rounded-2xl shadow-sm border
                            border-gray-200 p-6 hover:shadow-md
                            transition duration-200">

                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-indigo-100
                                    flex items-center justify-center
                                    text-2xl">
                            💻
                        </div>

                        <span class="text-xs font-semibold bg-indigo-100
                                     text-indigo-700 px-3 py-1 rounded-full">
                            LESSON 01
                        </span>
                    </div>

                    <h4 class="text-xl font-bold text-gray-800 mb-2">
                        Introduction to Laravel
                    </h4>

                    <p class="text-gray-500 text-sm leading-relaxed">
                        Get introduced to Laravel and understand its role
                        in developing web applications.
                    </p>
                </div>

                
                <div class="bg-white rounded-2xl shadow-sm border
                            border-gray-200 p-6 hover:shadow-md
                            transition duration-200">

                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-purple-100
                                    flex items-center justify-center
                                    text-2xl">
                            🛠️
                        </div>

                        <span class="text-xs font-semibold bg-purple-100
                                     text-purple-700 px-3 py-1 rounded-full">
                            LESSON 02
                        </span>
                    </div>

                    <h4 class="text-xl font-bold text-gray-800 mb-2">
                        Routes and Controllers
                    </h4>

                    <p class="text-gray-500 text-sm leading-relaxed">
                        Learn how routes direct requests and how controllers
                        handle application logic in Laravel.
                    </p>
                </div>

    
                <div class="bg-white rounded-2xl shadow-sm border
                            border-gray-200 p-6 hover:shadow-md
                            transition duration-200">

                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-blue-100
                                    flex items-center justify-center
                                    text-2xl">
                            🗄️
                        </div>

                        <span class="text-xs font-semibold bg-blue-100
                                     text-blue-700 px-3 py-1 rounded-full">
                            LESSON 03
                        </span>
                    </div>

                    <h4 class="text-xl font-bold text-gray-800 mb-2">
                        Database Migrations
                    </h4>

                    <p class="text-gray-500 text-sm leading-relaxed">
                        Understand how Laravel migrations create and manage
                        your application's database structure.
                    </p>
                </div>

    
                <div class="bg-white rounded-2xl shadow-sm border
                            border-gray-200 p-6 hover:shadow-md
                            transition duration-200">

                    <div class="flex items-center justify-between mb-5">
                        <div class="w-12 h-12 rounded-xl bg-pink-100
                                    flex items-center justify-center
                                    text-2xl">
                            🔐
                        </div>

                        <span class="text-xs font-semibold bg-pink-100
                                     text-pink-700 px-3 py-1 rounded-full">
                            LESSON 04
                        </span>
                    </div>

                    <h4 class="text-xl font-bold text-gray-800 mb-2">
                        Laravel Breeze Authentication
                    </h4>

                    <p class="text-gray-500 text-sm leading-relaxed">
                        Explore how Laravel Breeze supports login,
                        registration, and user authentication.
                    </p>
                </div>

            </div>

         
            <div class="mt-8 flex flex-col sm:flex-row
                        sm:items-center sm:justify-between gap-4">

                <p class="text-sm text-gray-500">
                    Keep practicing and developing your skills!
                </p>

                <a href="{{ route('dashboard') }}"
                   class="inline-flex items-center justify-center gap-2
                          rounded-xl bg-indigo-600 px-6 py-3
                          text-white font-semibold hover:bg-indigo-700
                          transition duration-200 shadow-sm">

                    <span aria-hidden="true">←</span>
                    Back to Dashboard
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
