<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="css/artisan.css">
</head>

<body  class=" bg-gray-200">
  

    <div class="flex h-screen bg-gray-200 items-center justify-center mt-20 mb-32">
 <form action="{{ route('update-artisan', ['id' => auth()->user()->id]) }}" method="post" enctype="multipart/form-data" class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">


            @csrf
  {{-- <div > --}}
    <div class="flex justify-center py-4">
    
      <img id='preview_img' class="h-20 w-20 object-cover rounded-full shadow-lg cursor-pointer"
                                src="{{ asset('storage/img/' . auth()->user()->picture)}}"
                                alt="Current profile photo" />
    </div>

    <div class="flex justify-center">
      <div class="flex">
        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">{{ auth()->user()->name}}</h1>
      </div>
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">description</label>
      <textarea name="description" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" placeholder="Input 1"> </textarea>
    </div>

    {{-- <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">job</label>
      <select name="metiers" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
        <option>Option 1</option>
      </select>
    </div>

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">skills</label>
      <select name="" class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
        <option >Option 1</option>
     
      </select>
    </div> --}}

    <div class="grid grid-cols-1 mt-5 mx-7">
      <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">services Photos</label>
      <div class='flex items-center justify-center w-full'>
          <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group'>
              <div class='flex flex-col items-center justify-center pt-7'>
                  <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>Select photos</p>
              </div>
              <input type='file' name="multiplePhotos[]"  class="hidden" id="imageInput" multiple onchange="displaySelectedImages(event)" />
          </label>
      </div>
      {{-- <div id="multiplePhotosPanel" class=" mt-4 border border-gray-300 rounded-md p-4">
                                <label class="text-blue-900 font-bold mb-2">Add one or multiple pictures</label>
                                <input type="file" name="multiplePhotos[]" multiple
                                    class="py-2 px-4 bg-white rounded-md border border-gray-300">
                                    @error('multiplePhotos')
                                    <p class="text-red-500 text-sm">{{ $message }}</p>
                                @enderror
                            </div> --}}
      <div id="selectedImagesContainer" class=" flex justify-start mt-3"></div>
  </div>
  <div class='flex items-center justify-center md:gap-8 gap-4 pt-5 pb-5'>
    <button type="button" class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancel</button>
    <button type="submit" class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Update</button>
</div>
  
  {{-- </div> --}}
</form>
</div>
    
<script>
  function displaySelectedImages(event) {
      const container = document.getElementById('selectedImagesContainer');
      const files = event.target.files;
      const selectedFilesArray = []; 
      for (const file of files) {
          const reader = new FileReader();
          reader.onload = function (e) {
              const img = document.createElement('img');
              img.src = e.target.result;
              img.alt = file.name;
              img.className = 'mx-2 my-2'; 
              img.style.maxHeight = '100px'; 
              container.appendChild(img);
              selectedFilesArray.push(file);
          };
          reader.readAsDataURL(file);
      }
      console.log(selectedFilesArray);
  }
</script>
</body>
</html>