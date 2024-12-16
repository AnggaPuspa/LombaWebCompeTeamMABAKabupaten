<!DOCTYPE html>
<html>
<head>
    <title>Register | Luminus Education</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f5f5f5;
        }
        .card {
            background: #fff;
            border: 1px solid #e0e0e0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            padding: 30px;
        }
        .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #9e9e9e;
        }
        .input-field {
            padding-left: 45px;
        }
        .toggle-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #9e9e9e;
        }
        .btn-primary {
            background-color: #1a73e8;
            color: #fff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #1669c1;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md mx-auto p-6">
        <div class="card rounded-lg">
            <div class="text-center mb-8">
                <img src="https://www.gstatic.com/images/branding/googlelogo/1x/googlelogo_color_92x30dp.png" alt="Luminus Education" class="mx-auto mb-4">
                <h2 class="text-2xl font-semibold text-gray-800 mb-2">Daftar ke Luminus Education</h2>
                <p class="text-gray-600">Buat akun Anda untuk melanjutkan</p>
            </div>

            @if ($errors->any())
                <div class="mb-6">
                    @foreach ($errors->all() as $error)
                        <div class="bg-red-50 text-red-600 p-4 rounded-lg flex items-center mb-2">
                            <i class="fas fa-exclamation-circle mr-2"></i>
                            <span>{{ $error }}</span>
                        </div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf
                
                <div class="relative mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Nama</label>
                    <div class="relative">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="input-field w-full pl-12 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition-colors duration-200"
                            placeholder="Masukkan nama Anda"
                            required>
                    </div>
                </div>

                <div class="relative mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Email</label>
                    <div class="relative">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="input-field w-full pl-12 pr-3 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition-colors duration-200"
                            placeholder="Masukkan email Anda"
                            required>
                    </div>
                </div>

                <div class="relative mb-4">
                    <label class="block text-gray-700 font-medium mb-2">Password</label>
                    <div class="relative">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="password" id="password"
                            class="input-field w-full pl-12 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition-colors duration-200"
                            placeholder="Masukkan password"
                            required>
                        <i class="fas fa-eye toggle-password" id="togglePassword" onclick="togglePassword('password', 'togglePassword')"></i>
                    </div>
                </div>

                <div class="relative mb-6">
                    <label class="block text-gray-700 font-medium mb-2">Konfirmasi Password</label>
                    <div class="relative">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            class="input-field w-full pl-12 pr-12 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition-colors duration-200"
                            placeholder="Konfirmasi password"
                            required>
                        <i class="fas fa-eye toggle-password" id="togglePasswordConfirmation" onclick="togglePassword('password_confirmation', 'togglePasswordConfirmation')"></i>
                    </div>
                </div>

                <button type="submit" 
                    class="btn-primary w-full font-semibold py-3 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all duration-200 mb-4">
                    Daftar
                </button>

                <div class="text-center mt-6">
                    <p class="text-gray-600 text-sm">
                        Sudah punya akun? 
                        <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-700 font-medium">
                            Masuk sekarang
                        </a>
                    </p>
                </div>
            </form>
        </div>
    </div>

    <script>
        function togglePassword(fieldId, iconId) {
            const passwordInput = document.getElementById(fieldId);
            const toggleIcon = document.getElementById(iconId);
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        }
    </script>
</body>
</html>