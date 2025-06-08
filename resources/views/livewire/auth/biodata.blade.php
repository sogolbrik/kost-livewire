<div class="container">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px 0;
        }

        .biodata-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .biodata-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15);
        }

        .header-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="75" r="1" fill="rgba(255,255,255,0.1)"/><circle cx="75" cy="25" r="1" fill="rgba(255,255,255,0.05)"/><circle cx="25" cy="75" r="1" fill="rgba(255,255,255,0.05)"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            animation: float 20s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateX(0) translateY(0) rotate(0deg);
            }

            33% {
                transform: translateX(30px) translateY(-30px) rotate(120deg);
            }

            66% {
                transform: translateX(-20px) translateY(20px) rotate(240deg);
            }
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .form-section {
            padding: 2.5rem;
        }

        .form-floating {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-floating .form-control {
            border: 2px solid #e9ecef;
            border-radius: 12px;
            font-size: 1rem;
            padding: 1rem 0.75rem 0.5rem 0.75rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.8);
        }

        .form-floating .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
            background: white;
            transform: translateY(-2px);
        }

        .form-floating label {
            color: #6c757d;
            font-weight: 500;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
            border-radius: 12px;
            padding: 1rem 2rem;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            transition: all 0.3s ease;
            transform: translate(-50%, -50%);
        }

        .btn-primary:hover::before {
            width: 300px;
            height: 300px;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .invalid-feedback {
            font-size: 0.875rem;
            font-weight: 500;
        }

        .form-control.is-invalid {
            border-color: #dc3545;
            animation: shake 0.5s ease;
        }

        @keyframes shake {

            0%,
            100% {
                transform: translateX(0);
            }

            25% {
                transform: translateX(-5px);
            }

            75% {
                transform: translateX(5px);
            }
        }

        .file-upload-wrapper {
            position: relative;
            overflow: hidden;
            border: 2px dashed #667eea;
            border-radius: 12px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            background: rgba(102, 126, 234, 0.05);
            margin-bottom: 1.5rem;
        }

        .file-upload-wrapper:hover {
            border-color: #764ba2;
            background: rgba(102, 126, 234, 0.1);
            transform: translateY(-2px);
        }

        .file-upload-wrapper input[type=file] {
            position: absolute;
            left: -9999px;
        }

        .upload-icon {
            font-size: 3rem;
            color: #667eea;
            margin-bottom: 1rem;
        }

        .loading-spinner {
            display: none;
        }

        .btn-primary.loading .loading-spinner {
            display: inline-block;
        }

        .btn-primary.loading .btn-text {
            display: none;
        }

        @media (max-width: 768px) {
            .biodata-card {
                margin: 10px;
                border-radius: 15px;
            }

            .form-section {
                padding: 1.5rem;
            }

            .header-section {
                padding: 1.5rem;
            }
        }
    </style>
    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <div class="biodata-card">
                <!-- Header Section -->
                <div class="header-section">
                    <div class="header-content">
                        <h2 class="mb-3">
                            <i class="fas fa-user-edit me-3"></i>
                            Lengkapi Biodata Anda
                        </h2>
                        <p class="mb-0 opacity-75">
                            Isi informasi pribadi Anda untuk melanjutkan ke sistem KOS
                        </p>
                    </div>
                </div>

                <!-- Form Section -->
                <div class="form-section">
                    <form id="biodataForm" novalidate wire:submit.prevent='store'>
                        <h4 class="mb-4 text-center">
                            <i class="fas fa-info-circle text-primary me-2"></i>
                            Informasi Pribadi
                        </h4>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control" id="phone" wire:model="phone" placeholder="Nomor Telepon" required>
                                    <label for="phone">
                                        <i class="fas fa-phone me-2"></i>Nomor Telepon
                                    </label>
                                    <div class="invalid-feedback">
                                        Nomor telepon wajib diisi dengan format yang benar
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="city" wire:model="city" placeholder="Kota" required>
                                    <label for="city">
                                        <i class="fas fa-city me-2"></i>Kota
                                    </label>
                                    <div class="invalid-feedback">
                                        Kota wajib diisi
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" id="address" wire:model="address" placeholder="Alamat Lengkap" style="height: 120px" required></textarea>
                            <label for="address">
                                <i class="fas fa-map-marker-alt me-2"></i>Alamat Lengkap
                            </label>
                            <div class="invalid-feedback">
                                Alamat lengkap wajib diisi
                            </div>
                        </div>

                        <div class="form-floating">
                            <select class="form-select" id="state" wire:model="state" required>
                                <option value="">Pilih Provinsi</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                                <option value="DKI Jakarta">DKI Jakarta</option>
                                <option value="Banten">Banten</option>
                                <option value="Yogyakarta">D.I. Yogyakarta</option>
                                <option value="Sumatera Utara">Sumatera Utara</option>
                                <option value="Sumatera Barat">Sumatera Barat</option>
                                <option value="Sumatera Selatan">Sumatera Selatan</option>
                                <option value="Bali">Bali</option>
                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            </select>
                            <label for="state">
                                <i class="fas fa-map me-2"></i>Provinsi
                            </label>
                            <div class="invalid-feedback">
                                Provinsi wajib dipilih
                            </div>
                        </div>

                        <div class="file-upload-wrapper" id="ktpUploadWrapper">
                            <input type="file" id="ktp" wire:model="ktp" accept="image/*" required>
                            <div class="upload-content">
                                <i class="fas fa-cloud-upload-alt upload-icon"></i>
                                <h5>Upload Foto KTP</h5>
                                <p class="text-muted mb-3">
                                    Klik atau drag & drop file gambar KTP Anda disini
                                </p>
                                <small class="text-muted">
                                    Format: JPG, JPEG, PNG, WEBP (Max: 2MB)
                                </small>
                            </div>
                            <div class="invalid-feedback">
                                File KTP wajib diupload
                            </div>
                        </div>

                        {{-- <div id="ktpPreview" class="mb-3" style="display: none;">
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle me-2"></i>
                                <strong id="fileName"></strong> berhasil dipilih
                                <button type="button" class="btn-close float-end" id="removeFile"></button>
                            </div>
                        </div> --}}

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg" id="submitForm">
                                <span class="btn-text">Simpan Biodata</span>
                                <span class="loading-spinner spinner-border spinner-border-sm ms-2"></span>
                                <i class="fas fa-check ms-2"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Form validation and handling
        class BiodataForm {
            constructor() {
                this.form = document.getElementById('biodataForm');
                this.initializeEventListeners();
            }

            initializeEventListeners() {
                // Form submission
                this.form.addEventListener('submit', (e) => {
                    e.preventDefault();
                    this.handleSubmit();
                });

                // File upload handling
                const ktpInput = document.getElementById('ktp');
                const uploadWrapper = document.getElementById('ktpUploadWrapper');

                ktpInput.addEventListener('change', (e) => {
                    this.handleFileUpload(e.target.files[0]);
                });

                uploadWrapper.addEventListener('click', () => {
                    ktpInput.click();
                });

                uploadWrapper.addEventListener('dragover', (e) => {
                    e.preventDefault();
                    uploadWrapper.style.borderColor = '#764ba2';
                });

                uploadWrapper.addEventListener('dragleave', (e) => {
                    e.preventDefault();
                    uploadWrapper.style.borderColor = '#667eea';
                });

                uploadWrapper.addEventListener('drop', (e) => {
                    e.preventDefault();
                    uploadWrapper.style.borderColor = '#667eea';
                    const files = e.dataTransfer.files;
                    if (files.length > 0) {
                        this.handleFileUpload(files[0]);
                    }
                });

                // Remove file button
                document.getElementById('removeFile').addEventListener('click', () => {
                    this.removeFile();
                });

                // Real-time validation
                this.form.querySelectorAll('input, select, textarea').forEach(field => {
                    field.addEventListener('input', () => {
                        this.validateField(field);
                    });
                });

                // Phone number formatting
                document.getElementById('phone').addEventListener('input', (e) => {
                    this.formatPhoneNumber(e.target);
                });
            }

            validateField(field) {
                const value = field.value.trim();
                let isValid = true;
                let message = '';

                // Required validation
                if (field.hasAttribute('required') && !value) {
                    isValid = false;
                    message = `${field.labels[0].textContent.replace(/[^a-zA-Z\s]/g, '')} wajib diisi`;
                }

                // Phone validation
                if (field.name === 'phone' && value) {
                    const phoneRegex = /^(\+62|62|0)[2-9][0-9]{7,11}$/;
                    if (!phoneRegex.test(value.replace(/[\s-]/g, ''))) {
                        isValid = false;
                        message = 'Format nomor telepon tidak valid';
                    }
                }

                // Update field appearance
                if (isValid) {
                    field.classList.remove('is-invalid');
                    field.classList.add('is-valid');
                } else {
                    field.classList.remove('is-valid');
                    field.classList.add('is-invalid');
                    const feedback = field.parentNode.querySelector('.invalid-feedback');
                    if (feedback && message) {
                        feedback.textContent = message;
                    }
                }

                return isValid;
            }

            formatPhoneNumber(field) {
                let value = field.value.replace(/\D/g, '');

                // Add country code if needed
                if (value.startsWith('8')) {
                    value = '62' + value;
                } else if (value.startsWith('0')) {
                    value = '62' + value.substring(1);
                }

                // Format with spaces
                if (value.length > 2) {
                    value = value.replace(/(\d{2})(\d{3})(\d{4})(\d*)/, '+$1 $2-$3-$4');
                }

                field.value = value;
            }

            handleFileUpload(file) {
                if (!file) return;

                // Validate file
                const maxSize = 5 * 1024 * 1024; // 5MB
                const allowedTypes = ['image/jpeg', 'image/png', 'application/pdf'];

                if (file.size > maxSize) {
                    this.showAlert('File terlalu besar. Maksimal 2MB', 'danger');
                    return;
                }

                if (!allowedTypes.includes(file.type)) {
                    this.showAlert('Format file tidak didukung. Gunakan JPG, PNG, atau PDF', 'danger');
                    return;
                }

                // Show preview
                document.getElementById('fileName').textContent = file.name;
                document.getElementById('ktpPreview').style.display = 'block';
                document.getElementById('ktp').classList.remove('is-invalid');
                document.getElementById('ktp').classList.add('is-valid');

                this.showAlert('File berhasil dipilih', 'success');
            }

            removeFile() {
                document.getElementById('ktp').value = '';
                document.getElementById('ktpPreview').style.display = 'none';
                document.getElementById('ktp').classList.remove('is-valid');
            }

            validateForm() {
                const fields = ['phone', 'address', 'city', 'state'];
                let isValid = true;

                // Validate all fields
                fields.forEach(fieldName => {
                    const field = document.getElementById(fieldName);
                    if (!this.validateField(field)) {
                        isValid = false;
                    }
                });

                // Validate KTP upload
                const ktpFile = document.getElementById('ktp').files[0];
                if (!ktpFile) {
                    document.getElementById('ktp').classList.add('is-invalid');
                    this.showAlert('File KTP wajib diupload', 'danger');
                    isValid = false;
                }

                return isValid;
            }

            handleSubmit() {
                if (!this.validateForm()) {
                    return;
                }

                this.showLoading('submitForm');

                // Prepare form data
                const formData = new FormData();
                formData.append('phone', document.getElementById('phone').value);
                formData.append('address', document.getElementById('address').value);
                formData.append('city', document.getElementById('city').value);
                formData.append('state', document.getElementById('state').value);
                formData.append('ktp', document.getElementById('ktp').files[0]);

                // Simulate form submission
                setTimeout(() => {
                    this.hideLoading('submitForm');
                    this.showSuccessMessage();
                }, 2000);

                // For real implementation, use fetch:
                // fetch('/biodata', {
                //     method: 'POST',
                //     body: formData,
                //     headers: {
                //         'X-CSRF-TOKEN': document.querySelector('meta[wire:model="csrf-token"]').getAttribute('content')
                //     }
                // })
                // .then(response => response.json())
                // .then(data => {
                //     this.hideLoading('submitForm');
                //     if (data.success) {
                //         this.showSuccessMessage();
                //     } else {
                //         this.showAlert('Terjadi kesalahan: ' + data.message, 'danger');
                //     }
                // });
            }

            showLoading(buttonId) {
                const button = document.getElementById(buttonId);
                button.classList.add('loading');
                button.disabled = true;
            }

            hideLoading(buttonId) {
                const button = document.getElementById(buttonId);
                button.classList.remove('loading');
                button.disabled = false;
            }

            showAlert(message, type) {
                // Create and show bootstrap alert
                const alertDiv = document.createElement('div');
                alertDiv.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
                alertDiv.style.cssText = 'top: 20px; right: 20px; z-index: 9999; min-width: 300px;';
                alertDiv.innerHTML = `
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;

                document.body.appendChild(alertDiv);

                // Auto remove after 3 seconds
                setTimeout(() => {
                    if (alertDiv.parentNode) {
                        alertDiv.remove();
                    }
                }, 3000);
            }

            showSuccessMessage() {
                // Show success modal or redirect
                this.showAlert('Biodata berhasil disimpan! Mengarahkan ke dashboard...', 'success');

                setTimeout(() => {
                    // window.location.href = '/dashboard';
                    console.log('Redirecting to dashboard...');
                }, 2000);
            }
        }

        // Initialize form when DOM is loaded
        document.addEventListener('DOMContentLoaded', () => {
            new BiodataForm();
        });
    </script>
</div>

{{-- <div>
    <section class="vh-150 mt-3 mb-2" style="background-color: #eee">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-4">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Biodata</p>

                                    <form wire:submit.prevent="store" class="mx-1 mx-md-4" enctype="multipart/form-data">
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-phone fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="number" value="{{ old('phone') }}" id="form3Example1c" class="form-control @error('phone') is-invalid @enderror"
                                                    wire:model="phone" />
                                                <label class="form-label" for="form3Example1c">Telepon</label>
                                                @error('phone')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-location-dot fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" value="{{ old('address') }}" id="form3Example3c" class="form-control @error('address') is-invalid @enderror"
                                                    wire:model="address" />
                                                <label class="form-label" for="form3Example3c">Alamat</label>
                                                @error('address')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-city fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example4c" class="form-control @error('city') is-invalid @enderror" wire:model="city" />
                                                <label class="form-label" for="form3Example4c">Kota</label>
                                                @error('city')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-map-location-dot fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example4cd" class="form-control @error('state') is-invalid @enderror" wire:model="state" />
                                                <label class="form-label" for="form3Example4cd">Provinsi</label>
                                                @error('state')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-2">
                                            <i class="fas fa-camera fa-lg me-3 mb-4 fa-fw"></i>
                                            <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                                <input type="file" id="form3Example4cd" class="form-control @error('ktp') is-invalid @enderror" wire:model="ktp" />
                                                <label class="form-label" for="form3Example4cd">Foto Ktp</label>
                                                @error('ktp')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                        @if (is_object($ktp))
                                            <div class="col-md-6 mb-2 mx-5">
                                                <div class="form-group">
                                                    <img src="{{ $ktp->temporaryUrl() }}" class="img-fluid rounded w-100 shadow-sm">
                                                </div>
                                            </div>
                                        @endif

                                        <div class="form-check d-flex justify-content-center mb-4 mt-4">
                                            <label class="form-check-label">
                                                apakah anda sudah mempunyai akun? <a href="{{ route('login') }}" wire:navigate>Log in</a>
                                            </label>
                                        </div>

                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Simpan</button>
                                        </div>

                                    </form>
                                </div>

                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2 position-relative">

                                    <p class="text-center h1 fw-semibold mx-1 mx-md-4 mt-4 position-absolute" style="top: 0; width: 100%;">Kost-18</p>

                                    <img src="{{ asset('uploads/img/bedtrans.png') }}" class="img-fluid w-100 mt-4" alt="Sample image">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> --}}
