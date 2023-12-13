<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    @vite('resources/css/app.css')
</head>
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Services') }}
        </h2>
    </x-slot>

    <div class="py-12">
      
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col">
            <button class="rounded-lg bg-blue-600 px-10 py-2 text-gray-100 self-end my-2">
                <a href="{{route('services.create')}}">Create</a>
            </button>
            @if(session('create'))
            <div class="alertElement  bg-blue-600 py-2 rounded-sm mb-2">
               <p class="dark:text-gray-100 text-center "> {{ session('create') }}</p>
            </div>
            @endif 
            @if(session('edit'))
            <div class="alertElement  bg-yellow-600 py-2 rounded-sm mb-2">
               <p class="dark:text-gray-100 text-center "> {{ session('edit') }}</p>
            </div>
            @endif
            
            @if(session('detete'))
            <div class="alertElement  bg-red-600 py-2 rounded-sm mb-2">
               <p class="dark:text-gray-100 text-center "> {{ session('detete') }}</p>
            </div>
            @endif
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
               
                
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                        <div
                            class="inline-block min-w-full overflow-hidden align-middle  border-gray-200 shadow sm:rounded-lg">
                            <table class="min-w-full dark:bg-gray-800 text-gray-100">
                                <thead>
                                    <tr>
                                        <th
                                            class="px-6 py-3 text-base font-medium leading-4 tracking-wider text-left 0  border-b ">
                                            <span>
                                                Profile
                                            </span>
                                        </th>
                                        <th
                                            class="px-6 py-3 text-base font-medium leading-4 tracking-wider text-left 0  border-b ">
                                            <span>
                                                Student Id
                                            </span>
                                        </th>
                                        <th
                                            class="px-6 py-3 text-base font-medium leading-4 tracking-wider text-left 0  border-b ">
                                            <span>
                                                Name
                                            </span>
                                        </th>
                                        <th
                                            class="px-6 py-3 text-base font-medium leading-4 tracking-wider text-left 0  border-b ">
                                            <span>
                                                Age
                                            </span>
                                        </th>
                                        <th
                                            class="px-6 py-3 text-base font-medium leading-4 tracking-wider text-left 0  border-b ">
                                            <span>
                                                Gender
                                            </span>
                                        </th>
                                        <th
                                            class="px-6 py-3 text-base font-medium leading-4 tracking-wider text-left 0  border-b ">
                                            <span>
                                                Major
                                            </span>
                                        </th>
                                        <th
                                            class="px-6 py-3 text-base font-medium leading-4 tracking-wider text-left 0  border-b ">
                                            <span>
                                                Batch
                                            </span>
                                        </th>

                                        <th class="px-6 py-3 text-base text-left border-b " colspan="2">
                                            Action</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach($data as $key => $x)
                                    <tr>

                                        <td class="px-6 py-4 whitespace-no-wrap ">
                                            <div class="flex items-center">
                                                <img class="rounded-full h-14 w-14 object-cover" src="{{$x->image}}"
                                                    alt="">
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap ">
                                            <div class="flex items-center">
                                                <span>
                                                    {{$x->student_id}}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap ">
                                            <div class="flex items-center">
                                                <span>
                                                    {{$x->name}}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap ">
                                            <div class="flex items-center">
                                                <span>
                                                    {{$x->age}}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap ">
                                            <div class="flex items-center">
                                                <span>
                                                    {{$x->gender}}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap ">
                                            <div class="flex items-center">
                                                <span>
                                                    {{$x->major}}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-no-wrap ">
                                            <div class="flex items-center">
                                                <span>
                                                    {{$x->batch}}
                                                </span>
                                            </div>
                                        </td>
                                        <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap ">
                                            <a href="{{route('services.edit',$x->id)}}"
                                                class="text-indigo-600 hover:text-indigo-900">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                </svg>
                                            </a>

                                        </td>
                                        <td class="text-sm font-medium leading-5 whitespace-no-wrap  ">
                                            <form action="{{route('services.destroy',$x->id)}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <button type="submit" class="flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-6 h-6 text-red-600 hover:text-red-800 cursor-pointer "
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</x-app-layout>
<script>
    if (alertElement) {
       // Adjust the time in milliseconds (e.g., 5000 for 5 seconds)
       const closeTime = 5000;

       setTimeout(() => {
           alertElement.style.display = 'none';
       }, closeTime);
   }
   
</script>
{{--
<div class="p-6 text-gray-900 dark:text-gray-100">
    @foreach($data as $key => $x)
    <ul class=" mx-auto sm:px-6 lg:px-8 bg-white h-20 sm:rounded-lg flex justify-between items-center dark:bg-gray-800">
        <li>
            <img class="w-12 object-cover" src={{$x->image}}
            alt="">
        </li>
        <li>
            <p class="font-normal text-base">{{$x->student_id}}</p>
        </li>
        <li>
            <p class="font-normal text-base">{{$x->name}}</p>
        </li>
        <li>
            <p class="font-normal text-base">{{$x->age}}</p>
        </li>

        <li>
            <p class="font-normal text-base">{{$x->gender}}</p>
        </li>
        <li>
            <p class="font-normal text-base">{{$x->major}}</p>
        </li>
        <li>
            <p class="font-normal text-base">{{$x->batch}}</p>
        </li>
        <div class="flex w-20 justify-between">
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="22" viewBox="0 0 576 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path fill="#005eff"
                        d="M288 80c-65.2 0-118.8 29.6-159.9 67.7C89.6 183.5 63 226 49.4 256c13.6 30 40.2 72.5 78.6 108.3C169.2 402.4 222.8 432 288 432s118.8-29.6 159.9-67.7C486.4 328.5 513 286 526.6 256c-13.6-30-40.2-72.5-78.6-108.3C406.8 109.6 353.2 80 288 80zM95.4 112.6C142.5 68.8 207.2 32 288 32s145.5 36.8 192.6 80.6c46.8 43.5 78.1 95.4 93 131.1c3.3 7.9 3.3 16.7 0 24.6c-14.9 35.7-46.2 87.7-93 131.1C433.5 443.2 368.8 480 288 480s-145.5-36.8-192.6-80.6C48.6 356 17.3 304 2.5 268.3c-3.3-7.9-3.3-16.7 0-24.6C17.3 208 48.6 156 95.4 112.6zM288 336c44.2 0 80-35.8 80-80s-35.8-80-80-80c-.7 0-1.3 0-2 0c1.3 5.1 2 10.5 2 16c0 35.3-28.7 64-64 64c-5.5 0-10.9-.7-16-2c0 .7 0 1.3 0 2c0 44.2 35.8 80 80 80zm0-208a128 128 0 1 1 0 256 128 128 0 1 1 0-256z" />
                </svg>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 512 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path fill="#FFEF00"
                        d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z" />
                </svg>
            </li>
            <li>
                <svg xmlns="http://www.w3.org/2000/svg" height="20" width="16" viewBox="0 0 448 512">
                    <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.-->
                    <path fill="#dd1313"
                        d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                </svg>
            </li>
        </div>
    </ul>

    @endforeach
</div> --}}
</body>
</html>