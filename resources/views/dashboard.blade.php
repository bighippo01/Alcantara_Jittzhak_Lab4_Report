
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-bold text-2xl text-gray-800 leading-tight">
                    Student Dashboard
                </h2>
                <p class="text-sm text-gray-500 mt-1">
                    Your personal learning space
                </p>
            </div>

            <span class="hidden sm:inline-block bg-indigo-100 text-indigo-700
                         text-sm font-semibold px-4 py-2 rounded-full">
                Student Portal
            </span>
        </div>
    </x-slot>

   
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

   
            <div class="bg-gradient-to-r from-indigo-600 to-purple-600
                        rounded-2xl shadow-lg p-8 mb-8 text-white">

                <p class="text-indigo-100 text-sm font-medium mb-2">
                    WELCOME BACK!
                </p>

                <h1 class="text-3xl sm:text-4xl font-bold mb-3">
                    Hello, {{ auth()->user()->name }}!
                </h1>

                <p class="text-indigo-100 text-base">
                    Welcome to your student portal.
                    Everything you need for your learning journey starts here.
                </p>
            </div>

     
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">

      
                <div class="bg-white rounded-2xl shadow-sm border
                            border-gray-200 p-6">

                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-14 h-14 rounded-full bg-indigo-100
                                    flex items-center justify-center
                                    text-indigo-700 text-2xl font-bold">
                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                        </div>

                        <div>
                            <h3 class="text-lg font-bold text-gray-800">
                                My Profile
                            </h3>
                            <p class="text-sm text-gray-500">
                                Your account information
                            </p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <div class="border-b border-gray-100 pb-3">
                            <p class="text-sm text-gray-500 mb-1">
                                Full Name
                            </p>
                            <p class="font-semibold text-gray-800">
                                {{ auth()->user()->name }}
                            </p>
                        </div>

                        <div class="border-b border-gray-100 pb-3">
                            <p class="text-sm text-gray-500 mb-1">
                                Email Address
                            </p>
                            <p class="font-semibold text-gray-800 break-words">
                                {{ auth()->user()->email }}
                            </p>
                        </div>

                        <div>
                            <p class="text-sm text-gray-500 mb-1">
                                Member Since
                            </p>
                            <p class="font-semibold text-gray-800">
                                {{ auth()->user()->created_at?->format('F d, Y') ?? 'Not available' }}
                            </p>
                        </div>
                    </div>
                </div>

                {{-- Resources Card --}}
                <div class="bg-white rounded-2xl shadow-sm border
                            border-gray-200 p-6 flex flex-col">

                    <div class="w-14 h-14 rounded-xl bg-purple-100
                                flex items-center justify-center
                                text-3xl mb-5">
                        📚
                    </div>

                    <h3 class="text-xl font-bold text-gray-800 mb-2">
                        Student Resources
                    </h3>

                    <p class="text-gray-500 leading-relaxed mb-6">
                        Access your available learning resources and
                        study materials through the student portal.
                    </p>

                    <div class="mt-auto">
                        <a href="{{ route('student.resources') }}"
                           class="inline-flex items-center justify-center gap-2
                                  w-full sm:w-auto rounded-xl bg-indigo-600
                                  px-6 py-3 text-white font-semibold
                                  hover:bg-indigo-700 transition duration-200
                                  shadow-sm">

                            View Student Resources
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>

            </div>

            {{-- Bottom Information --}}
            <div class="bg-white rounded-2xl border border-gray-200
                        p-5 flex flex-col sm:flex-row sm:items-center
                        justify-between gap-3">

                <div>
                    <h3 class="font-semibold text-gray-800">
                        Keep learning, keep growing!
                    </h3>
                    <p class="text-sm text-gray-500 mt-1">
                        Make the most of your student portal.
                    </p>
                </div>

                <span class="text-sm font-medium text-indigo-600">
                    Student Portal
                </span>
            </div>

        </div>
    </div>
</x-app-layout>
