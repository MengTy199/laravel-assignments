@vite('resources/css/app.css')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Service Update') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($errors->any())
                    <div class="alert alert-danger text-red-600">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('services.update', $x->id)}}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('put')
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 m-2">
                                Id
                            </span>
                            <input type="text" name="id" value="{{$x->id}}"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Id" />
                        </label>
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 m-2">
                                Image Url
                            </span>
                            <input type="text" name="image" value="{{$x->image}}"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Image Url" />
                        </label>
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Student Id
                            </span>
                            <input type="text" name="student_id" value="{{$x->student_id}}"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Student Id" />
                        </label>
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Name
                            </span>
                            <input type="text" name="name" value="{{$x->name}}"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Name" />
                        </label>
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Age
                            </span>
                            <input type="number" name="age" value="{{$x->age}}"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Age" />
                        </label>
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Gender
                            </span>
                            <input type="text" name="gender" value="{{$x->gender}}"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Gender" />
                        </label>
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Major
                            </span>
                            <input type="text" name="major" value="{{$x->major}}"
                                class="mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Major" />
                        </label>
                      
                        <label class="block">
                            <span class=" block text-xl font-medium dart:text-slate-700 my-2">
                                Batch
                            </span>
                            
                            <input id="batch" type="number" name="batch" value="{{$x->batch}}"
                                class=" mt-1 px-3 py-2 dark:text-gray-900 bg-gray-100 border shadow-sm border-slate-300 placeholder-slate-600 focus:outline-2 focus:border-blue-500 focus:ring-blue-500 block w-full rounded-md sm:text-base focus:ring-1"
                                placeholder="Enter Batch" />          
                        </label>

                        <div class="flex flex-col">
                            <button class="rounded-lg bg-blue-600 px-10 py-2 text-gray-100 self-end my-2" type="submit">
                                <span>Update</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>