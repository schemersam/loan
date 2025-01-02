<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col h-screen">
        
        @include('admin.segments.header')

        <!-- Main Content -->
        <div class="flex-1">
            <div class="flex h-full">
                <!-- side bar -->
                <div class="w-100 h-max bg-gray-800 text-white">
                @include('admin.segments.sidebar')
                </div>
                <!-- Page content -->
                <div class="flex-1 p-4">
                    <!-- Page content goes here -->
                    @yield('content')
                </div>
            </div>
        </div>
        @include('admin.segments.footer')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
   
    <script>
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');

        profileButton.addEventListener('click', () => {
            profileDropdown.classList.toggle('hidden');
        });

        window.addEventListener('click', (event) => {
            if (!profileDropdown.contains(event.target) && !profileButton.contains(event.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
    </script>

<script>
    function previewImage() {
    const fileInput = document.getElementById('profileImage');
    const imagePreview = document.getElementById('selectedImage');
    const profilePreview = document.getElementById('profilePreview');

    const file = fileInput.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = (e) => {
        imagePreview.src = e.target.result;
        profilePreview.src = e.target.result;
        };

        reader.readAsDataURL(file);
    }
    }
</script>
  
</body>
</html>
