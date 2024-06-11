<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Contact Form</title>
</head>
<body class="bg-gray-100">

  <div class="flex items-center justify-center p-12">
    <div class="mx-auto w-full max-w-[550px] bg-white p-10 rounded-lg shadow-lg">
    <h2 class="text-3xl font-semibold text-center text-[#07074D] mb-8">Contact Form</h2>

      @if (session('success'))
      <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
          <strong class="font-bold">Success!</strong>
          <span class="block sm:inline">{{ session('success') }}</span>
          <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" onclick="this.parentElement.style.display='none';">
              <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </button>
      </div>
      @endif

      <form action="/submit/message" method="POST">
        @csrf
        <div class="mb-5">
          <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
            Full Name
          </label>
          <input type="text" name="name" id="name" placeholder="Full Name" class="w-full rounded-lg border border-gray-300 bg-white py-3 px-6 text-base font-medium text-gray-700 outline-none focus:border-blue-500 focus:shadow-md" />
          @error('name')
          <div class="text-red-600 mt-2">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-5">
          <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
            Email Address
          </label>
          <input type="email" name="email" id="email" placeholder="example@domain.com" class="w-full rounded-lg border border-gray-300 bg-white py-3 px-6 text-base font-medium text-gray-700 outline-none focus:border-blue-500 focus:shadow-md" />
          @error('email')
          <div class="text-red-600 mt-2">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-5">
          <label for="subject" class="mb-3 block text-base font-medium text-[#07074D]">
            Subject
          </label>
          <input type="text" name="subject" id="subject" placeholder="Enter your subject" class="w-full rounded-lg border border-gray-300 bg-white py-3 px-6 text-base font-medium text-gray-700 outline-none focus:border-blue-500 focus:shadow-md" />
          @error('subject')
          <div class="text-red-600 mt-2">{{$message}}</div>
          @enderror
        </div>
        <div class="mb-5">
          <label for="message" class="mb-3 block text-base font-medium text-[#07074D]">
            Message
          </label>
          <textarea rows="4" name="message" id="message" placeholder="Type your message" class="w-full resize-none rounded-lg border border-gray-300 bg-white py-3 px-6 text-base font-medium text-gray-700 outline-none focus:border-blue-500 focus:shadow-md"></textarea>
          @error('message')
          <div class="text-red-600 mt-2">{{$message}}</div>
          @enderror
        </div>
        <div>
          <button class="hover:shadow-form rounded-lg bg-gradient-to-r from-blue-500 to-indigo-500 py-3 px-8 text-base font-semibold text-white outline-none hover:from-blue-600 hover:to-indigo-600 transition ease-in-out duration-300">
            Submit
          </button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
