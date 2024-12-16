<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi Email</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-md w-[480px]">
            <div class="text-center">
                <h2 class="text-2xl font-bold mb-2">Verifikasi Alamat Email</h2>
                <p class="text-gray-600 mb-6">Kami telah mengirimkan kode OTP ke email Anda</p>
            </div>

            @if (session('message'))
                <div class="mb-4 p-4 bg-green-50 text-green-600 rounded-lg">
                    {{ session('message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-50 text-red-600 rounded-lg">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

          <!-- Replace the existing info card with this improved version -->
<div class="bg-white border border-gray-100 rounded-xl p-6 mb-8 shadow-sm">
    <div class="flex items-center justify-between space-x-4">
        <!-- Email Section -->
        <div class="flex-1">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 flex items-center justify-center bg-blue-50 rounded-full">
                    <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm text-gray-500 font-medium">Email Tujuan</p>
                    <p class="text-gray-700 font-medium">{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>

        <!-- Timer Section -->
        <div class="text-center px-6 py-3 bg-gray-50 rounded-lg">
            <p class="text-sm text-gray-500 font-medium mb-1">Waktu Tersisa</p>
            <div class="flex items-center justify-center space-x-2">
                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span id="countdown" class="text-lg font-bold text-gray-700"></span>
            </div>
        </div>
    </div>
</div>

            <form method="POST" action="{{ route('otp.verify') }}">
                @csrf
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Masukkan 6 digit kode OTP</label>
                    <input type="text" 
                           name="otp" 
                           class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400 text-center text-2xl tracking-widest" 
                           required 
                           maxlength="6" 
                           pattern="\d{6}"
                           autocomplete="off"
                           placeholder="000000">
                    <p class="mt-2 text-sm text-gray-500">Masukkan kode 6 digit yang kami kirim ke email Anda</p>
                </div>

                <button type="submit" 
                    class="w-full bg-blue-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-blue-600 transition duration-150">
                    Verifikasi OTP
                </button>
            </form>

            <div class="mt-6 text-center">
                <p class="text-gray-600 text-sm">Tidak menerima kode?</p>
                <form method="POST" action="{{ route('otp.send') }}" class="mt-2">
                    @csrf
                    <button type="submit" 
                        class="text-blue-500 hover:text-blue-600 font-medium text-sm"
                        id="resendButton">
                        Kirim Ulang OTP
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Countdown Timer
        function startCountdown(duration, display) {
            var timer = duration, minutes, seconds;
            var countdown = setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    clearInterval(countdown);
                    display.textContent = "00:00";
                }
            }, 1000);
        }

        // Start countdown
        window.onload = function () {
            var tenMinutes = 60 * 10,
                display = document.querySelector('#countdown');
            startCountdown(tenMinutes, display);
        };

        // Handle resend button
        const resendButton = document.querySelector('#resendButton');
        resendButton.addEventListener('click', function() {
            this.disabled = true;
            this.textContent = 'Mengirim...';
            setTimeout(() => {
                this.textContent = 'OTP Terkirim';
            }, 2000);
        });
    </script>
</body>
</html>