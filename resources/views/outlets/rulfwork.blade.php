@extends('admin.index')
@section('content')
<main class="h-full pb-16 overflow-y-auto">
          <div class="container px-6 mx-auto grid">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
             Create New Team Member
            </h2>
          <form action="{{route('ourteam.store')}}" method="post" enctype="multipart/form-data">
           {{ csrf_field() }}
            <div
              class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
            >
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Name</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  name="Name" placeholder="Give a Name for the member"
                />
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Job</span>
                <input
                  class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                  name="job" placeholder="Give a job of tem member"
                />
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">select a main image</span>
                <div class="flex flex-col items-center ">
                   <input type="file" name="image" class="custom-file-input block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"> </div>
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Experience</span>
                <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3" name="experience"
                  placeholder="Give an experience of the member"
                ></textarea>
              </label>
              <label class="block mt-6 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Description</span>
                <textarea
                  class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                  rows="3" name="description"
                  placeholder="Give a Description for the member if any"
                ></textarea>
              </label>
             
                    <div class="mt-6 text-center pb-3"> <input value="Create"type="submit" class="w-full h-12 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"> </div>
            </div>
            </form>
        </main>
@endsection           