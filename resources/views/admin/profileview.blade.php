@extends('admin.dashboard')

@section('content')
  
@vite('resources/css/app.css')
<div class="p-6">
    <div class="bg-white shadow-md rounded-lg p-4">
      <h2 class="text-2xl font-semibold mb-4">My Profile</h2>
      <div class="flex items-center space-x-4">
        <img id="profilePreview" src="user-profile-picture.jpg" alt="User Profile" class="w-20 h-20 rounded-full">
        <div>
          <h3 class="text-lg font-semibold">{{ Auth::user()->name }}</h3>
          <p class="text-gray-500">{{ Auth::user()->role }}</p>
        </div>
      </div>
      
      <form class="mt-6">
        <div class="mb-4">
          <label for="name" class="block text-gray-700 font-medium">Name</label>
          <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 bg-gray-200 p-2">
        </div>
        <div class="mb-4">
          <label for="phoneNumber" class="block text-gray-700 font-medium">Phone Number</label>
          <input type="text" id="phoneNumber" name="phone_number" value="{{ Auth::user()->phone_number }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 bg-gray-200 p-2">
        </div>
        <div class="mb-4">
          <label for="phoneNumber" class="block text-gray-700 font-medium">Email</label>
          <input type="text" id="email" name="email" value="{{ Auth::user()->email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 bg-gray-200 p-2">
        </div>
        <div class="mb-4">
          <label for="profileImage" class="block text-gray-700 font-medium">Profile Image</label>
          <input type="file" id="profileImage" name="image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 focus:border-blue-300 bg-gray-200 p-2" onchange="previewImage()">
          <div id="imagePreview" class="w-20 h-20 mt-2 rounded-full border border-gray-300 overflow-hidden">
            <img id="selectedImage" src="user-profile-picture.jpg" alt="Selected Image" class="w-full h-full object-cover">
          </div>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-200 focus:ring-opacity-50">Save Changes</button>
      </form>
    </div>
  </div>

@endsection
