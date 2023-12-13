@vite('resources/css/app.css')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Services Create') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('services.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('post') 
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 m-2">
                                Image Url
                            </span>
                            <input id="image" type="text" name="image"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Image Url" />
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </label>
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Student Id
                            </span>
                            <input id="student_id" type="text" name="student_id"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Student Id" />
                                <x-input-error :messages="$errors->get('student_id')" class="mt-2" />
                        </label>
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Name
                            </span>
                            <input type="text" name="name"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Name" />
                        </label>
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Age
                            </span>
                            <input id="age" type="number" name="age"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Age" />
                                <x-input-error :messages="$errors->get('age')" class="mt-2" />
                        </label>
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Gender
                            </span>
                            <input id="gender" type="text" name="gender"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Gender" />
                                <x-input-error :messages="$errors->get('gender')" class="mt-2" />
                        </label>
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Major
                            </span>
                            <input id="major" type="text" name="major"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Major" />
                                <x-input-error :messages="$errors->get('major')" class="mt-2" />
                        </label><label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Batch
                            </span>
                            <input id="batch" type="number" name="batch"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Batch" />
                                <x-input-error :messages="$errors->get('batch')" class="mt-2" />
                        </label>

                        <div class="flex flex-col">
                            <button class="rounded-lg bg-blue-600 px-10 py-2 text-gray-100 self-end my-2" type="submit">
                               <span>Create</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>