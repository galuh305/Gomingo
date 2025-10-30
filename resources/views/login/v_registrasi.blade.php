
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Modernize Free</title>
  <link rel="shortcut icon" type="image/png" href="{{ asset('assetsadmin/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('assetsadmin/css/styles.min.css') }}" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <div
      class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="{{ asset('assetsadmin/images/logos/dark-logo.svg') }}" width="180" alt="">
                </a>
                <p class="text-center">Daftar Akun Baru</p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="POST" action="{{ url('/registrasi') }}">
                  @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="name" required value="{{ old('name') }}">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control" id="email" required value="{{ old('email') }}">
                  </div>
                  <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                  </div>
                  <div class="mb-4">
                    <label for="password_confirmation" class="form-label">Ulangi Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
                  </div>
                  <div class="mb-4">
                    <label for="role" class="form-label">Daftar sebagai</label>
                    <select name="role" id="role" class="form-select" required>
                      <option value="tempat_wisata" {{ old('role')=='tempat_wisata'?'selected':'' }}>Tempat Wisata</option>
                      <option value="tour_guide" {{ old('role')=='tour_guide'?'selected':'' }}>Tour Guide</option>
                      <option value="admin" {{ old('role')=='admin'?'selected':'' }}>Admin</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Sign Up</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Already have an Account?</p>
                    <a class="text-primary fw-bold ms-2" href="{{ url('/login') }}">Sign In</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('assetsadmin/libs/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('assetsadmin/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Fungsi untuk menambahkan feedback validasi
        function setValidationFeedback(element, isValid, message) {
            element.classList.remove('is-valid', 'is-invalid');
            element.classList.add(isValid ? 'is-valid' : 'is-invalid');
            
            // Hapus feedback lama jika ada
            const existingFeedback = element.nextElementSibling;
            if (existingFeedback && existingFeedback.classList.contains('invalid-feedback')) {
                existingFeedback.remove();
            }
            
            // Tambahkan pesan feedback jika tidak valid
            if (!isValid) {
                const feedback = document.createElement('div');
                feedback.classList.add('invalid-feedback');
                feedback.textContent = message;
                element.parentNode.appendChild(feedback);
            }
        }

        // Validasi Nama
        const nameInput = document.getElementById('name');
        nameInput.addEventListener('input', function() {
            const isValid = this.value.length > 0 && this.value.length <= 100;
            setValidationFeedback(this, isValid, 'Nama harus diisi dan tidak boleh lebih dari 100 karakter');
        });

        // Validasi Email
        const emailInput = document.getElementById('email');
        emailInput.addEventListener('input', function() {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const isValid = emailRegex.test(this.value);
            setValidationFeedback(this, isValid, 'Format email tidak valid');
        });

        // Validasi Password
        const passwordInput = document.getElementById('password');
        passwordInput.addEventListener('input', function() {
            const isValid = this.value.length >= 8;
            setValidationFeedback(this, isValid, 'Password minimal 8 karakter');
        });

        // Validasi Konfirmasi Password
        const passwordConfirmInput = document.getElementById('password_confirmation');
        passwordConfirmInput.addEventListener('input', function() {
            const isValid = this.value === passwordInput.value;
            setValidationFeedback(this, isValid, 'Password tidak cocok');
        });
        
        // Update konfirmasi password ketika password utama berubah
        passwordInput.addEventListener('input', function() {
            if (passwordConfirmInput.value) {
                const isValid = passwordConfirmInput.value === this.value;
                setValidationFeedback(passwordConfirmInput, isValid, 'Password tidak cocok');
            }
        });

        // Validasi Role
        const roleInput = document.getElementById('role');
        roleInput.addEventListener('change', function() {
            const isValid = ['admin', 'tour_guide', 'tempat_wisata'].includes(this.value);
            setValidationFeedback(this, isValid, 'Pilih role yang valid');
        });

        // Validasi form sebelum submit
        const form = document.querySelector('form');
        form.addEventListener('submit', function(event) {
            const name = nameInput.value;
            const email = emailInput.value;
            const password = passwordInput.value;
            const passwordConfirm = passwordConfirmInput.value;
            const role = roleInput.value;

            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            
            if (!name || name.length > 100) {
                event.preventDefault();
                setValidationFeedback(nameInput, false, 'Nama harus diisi dan tidak boleh lebih dari 100 karakter');
                nameInput.focus();
                return;
            }

            if (!email || !emailRegex.test(email)) {
                event.preventDefault();
                setValidationFeedback(emailInput, false, 'Format email tidak valid');
                emailInput.focus();
                return;
            }

            if (!password || password.length < 8) {
                event.preventDefault();
                setValidationFeedback(passwordInput, false, 'Password minimal 8 karakter');
                passwordInput.focus();
                return;
            }

            if (password !== passwordConfirm) {
                event.preventDefault();
                setValidationFeedback(passwordConfirmInput, false, 'Password tidak cocok');
                passwordConfirmInput.focus();
                return;
            }

            if (!['admin', 'tour_guide', 'tempat_wisata'].includes(role)) {
                event.preventDefault();
                setValidationFeedback(roleInput, false, 'Pilih role yang valid');
                roleInput.focus();
                return;
            }
        });
    });
  </script>
</body>

</html>