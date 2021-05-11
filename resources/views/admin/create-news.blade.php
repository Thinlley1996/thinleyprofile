@extends('admin.index')
@section('content')
<main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
             Create New News
            </h2>
          <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Title</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  name="title" placeholder="Give a title for the News"
                />
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Sub title</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  name="subtitle" placeholder="Give a sub title for the News"
                />
                <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                 Type
                </span>
                <select
                 name="type" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                >

                  <option value="News">News</option>
                  <option value="Announcement">Announcement</option>
                </select>
              </label>
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">News Date</span>
                <div class="flex flex-col items-center ">
                   <input type="date" name="date" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"> </div>
                 
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">select a main image</span>
                <div class="flex flex-col items-center ">
                   <input type="file" name="image" class="custom-file-input block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"> </div>
                 
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Short description</span>
                <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3" name="short_dep"
                  placeholder="Give a short description for News."
                ></textarea>
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">select another image</span>
                <div class="flex flex-col items-center ">
                   <input type="file" name="image_two" class="custom-file-input block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" Multiple> </div>
                 
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Long description</span>
                <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3" name="long_dep"
                  placeholder="Give a long Description for the News"
                ></textarea>
              </label>
             
                    <div class="mt-6 text-center pb-3"> <input value="Create"type="submit" class="w-full h-12 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"> </div>
            </div>
            </form>
        </main>
@endsection