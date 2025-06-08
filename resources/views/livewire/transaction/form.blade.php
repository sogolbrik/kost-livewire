<div>

    <style>
        :root {
            --primary-blue: #2563eb;
            --light-blue: #dbeafe;
            --dark-blue: #1e40af;
            --success-green: #10b981;
            --warning-orange: #f59e0b;
        }

        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            min-height: 100vh;
            color: #334155;
        }

        .transaction-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .transaction-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(37, 99, 235, 0.1);
            border: 2px solid var(--light-blue);
            overflow: hidden;
        }

        .card-header-custom {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--dark-blue) 100%);
            color: white;
            padding: 30px;
            text-align: center;
            border: none;
        }

        .card-body-custom {
            padding: 40px;
        }

        .price-section {
            background: var(--light-blue);
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            margin-bottom: 30px;
            border: 2px solid rgba(37, 99, 235, 0.2);
        }

        .total-price {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--primary-blue);
            margin-bottom: 10px;
        }

        .price-label {
            font-size: 1.1rem;
            color: #64748b;
            font-weight: 500;
        }

        .upload-section {
            border: 2px dashed var(--primary-blue);
            border-radius: 12px;
            padding: 40px;
            text-align: center;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            background: #fafbff;
        }

        .upload-section:hover {
            border-color: var(--dark-blue);
            background: var(--light-blue);
        }

        .upload-section.dragover {
            border-color: var(--success-green);
            background: #f0fdf4;
        }

        .upload-icon {
            font-size: 3rem;
            color: var(--primary-blue);
            margin-bottom: 20px;
        }

        .file-input {
            display: none;
        }

        .upload-btn {
            background: var(--primary-blue);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .upload-btn:hover {
            background: var(--dark-blue);
            transform: translateY(-2px);
        }

        .file-preview {
            display: none;
            background: white;
            border: 2px solid var(--success-green);
            border-radius: 8px;
            padding: 15px;
            margin-top: 20px;
        }

        .file-info {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .file-details {
            display: flex;
            align-items: center;
        }

        .file-icon {
            color: var(--success-green);
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .remove-file {
            color: #ef4444;
            cursor: pointer;
            font-size: 1.2rem;
        }

        .remove-file:hover {
            color: #dc2626;
        }

        .submit-btn {
            background: linear-gradient(135deg, var(--success-green) 0%, #059669 100%);
            border: none;
            color: white;
            padding: 16px 40px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 1.1rem;
            width: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .submit-btn:hover {
            background: linear-gradient(135deg, #059669 0%, #047857 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(16, 185, 129, 0.4);
        }

        .submit-btn:disabled {
            background: #9ca3af;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .info-section {
            background: #fef3c7;
            border: 1px solid #fcd34d;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .info-icon {
            color: var(--warning-orange);
            font-size: 1.2rem;
            margin-right: 10px;
        }

        .bank-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            border: 2px solid var(--light-blue);
        }

        .bank-card {
            background: #fafbff;
            border: 2px solid var(--light-blue);
            border-radius: 12px;
            padding: 20px;
            transition: all 0.3s ease;
        }

        .bank-card:hover {
            border-color: var(--primary-blue);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.1);
        }

        .bank-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .bank-logo {
            width: 40px;
            height: 40px;
            object-fit: contain;
            margin-right: 12px;
            background: white;
            padding: 5px;
            border-radius: 6px;
        }

        .bank-name {
            font-weight: 700;
            color: var(--dark-blue);
            font-size: 1.1rem;
        }

        .bank-details {
            text-align: center;
        }

        .account-number {
            font-size: 1.3rem;
            font-weight: 800;
            color: var(--primary-blue);
            margin-bottom: 5px;
            font-family: 'Courier New', monospace;
        }

        .account-name {
            font-size: 0.9rem;
            color: #64748b;
            margin-bottom: 15px;
        }

        .copy-btn {
            background: var(--primary-blue);
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 0.85rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .copy-btn:hover {
            background: var(--dark-blue);
            transform: scale(1.05);
        }

        .copy-btn.copied {
            background: var(--success-green);
        }

        .breadcrumb-custom {
            background: transparent;
            padding: 0;
            margin-bottom: 30px;
        }

        .breadcrumb-custom .breadcrumb-item a {
            color: var(--primary-blue);
            text-decoration: none;
        }

        .breadcrumb-custom .breadcrumb-item.active {
            color: #64748b;
        }

        @media (max-width: 768px) {
            .transaction-container {
                padding: 15px;
            }

            .card-body-custom {
                padding: 20px;
            }

            .total-price {
                font-size: 2rem;
            }

            .upload-section {
                padding: 30px 20px;
            }
        }
    </style>

    <div class="transaction-container" style="margin-top: 80px">

        <div class="transaction-card">
            <!-- Header -->
            <div class="card-header-custom">
                <h1 class="h3 mb-2">
                    <i class="fas fa-credit-card me-2"></i>
                    Konfirmasi Pembayaran
                </h1>
                <p class="mb-0">Selesaikan pembayaran Anda untuk mengonfirmasi pemesanan kamar</p>
            </div>

            <!-- Body -->
            <div class="card-body-custom">
                <!-- Info Section -->
                <div class="info-section">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-info-circle info-icon"></i>
                        <div>
                            <h6 class="fw-bold mb-2">Petunjuk Pembayaran:</h6>
                            <ul class="mb-0 ps-3">
                                <li>Lakukan transfer sesuai dengan total harga yang tertera</li>
                                <li>Upload bukti pembayaran dalam format JPG, PNG, atau PDF</li>
                                <li>Maksimal ukuran file 5MB</li>
                                <li>Pembayaran akan diverifikasi dalam 1x24 jam</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Price Section -->
                <div class="price-section">
                    <div class="total-price" id="totalPrice">Rp {{ number_format($transaction['total_price'], 0, ',', '.') }}</div>
                    <div class="price-label">Total Pembayaran</div>
                    <hr class="my-3">
                    <div class="row text-start">
                        <div class="col-6">
                            <small class="text-muted">Harga per bulan:</small><br>
                            <strong>Rp {{ number_format($transaction['price'], 0, ',', '.') }}</strong>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">Durasi sewa:</small><br>
                            <strong>{{ $transaction['duration'] }} Bulan</strong>
                        </div>
                    </div>
                </div>

                <!-- Bank Account Section -->
                <div class="bank-section mb-4">
                    <h5 class="fw-bold mb-4 text-center">
                        <i class="fas fa-university me-2"></i>
                        Transfer ke Rekening Berikut
                    </h5>

                    <div class="row g-3">
                        <!-- Payment -->
                        @foreach ($fintech as $item)
                            <div class="col-md-6">
                                <div class="bank-card">
                                    <div class="bank-header">
                                        @if ($item->photo == null)
                                            @if ($item->name == 'BCA')
                                                <img src="{{ asset('seed/fintech/bca.png') }}" alt="BCA" class="bank-logo">
                                            @elseif ($item->name == 'MANDIRI')
                                                <img src="{{ asset('seed/fintech/mandiri.jpg') }}" alt="BCA" class="bank-logo">
                                            @elseif ($item->name == 'GOPAY')
                                                <img src="{{ asset('seed/fintech/gopay.png') }}" alt="BCA" class="bank-logo">
                                            @elseif ($item->name == 'OVO')
                                                <img src="{{ asset('seed/fintech/ovo.jpg') }}" alt="BCA" class="bank-logo">
                                            @endif
                                        @else
                                            <img src="{{ Storage::url($item->photo) }}" alt="BCA" class="bank-logo">
                                        @endif
                                        <div class="bank-name">{{ $item->name }}</div>
                                    </div>
                                    <div class="bank-details">
                                        <div class="account-number">{{ $item->account_number }}</div>
                                        <div class="account-name">{{ $item->account_name }}</div>
                                        <button class="copy-btn" onclick="copyToClipboard({{ $item->description }}, this)">
                                            <i class="fas fa-copy me-1"></i>Salin
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Upload Section -->
                <form wire:submit.prevent='store' id="paymentForm" enctype="multipart/form-data">
                    <div class="upload-section" id="uploadArea">
                        <i class="fas fa-cloud-upload-alt upload-icon"></i>
                        <h5 class="fw-bold mb-3">Upload Bukti Pembayaran</h5>
                        <p class="text-muted mb-4">Drag & drop file di sini atau klik tombol di bawah</p>

                        <input type="file" id="fileInput" class="file-input" wire:model='payment_proof' accept=".jpg,.jpeg,.png,.pdf" required>
                        <button type="button" class="upload-btn" onclick="document.getElementById('fileInput').click()">
                            <i class="fas fa-upload me-2"></i>Pilih File
                        </button>

                        <small class="text-muted mt-3 d-block">
                            Format yang didukung: JPG, PNG, PDF (Maks. 5MB)
                        </small>
                    </div>

                    @if (session()->has('error-message'))
                        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                            {{ session('error-message') }}
                        </div>
                    @endif

                    <!-- Submit Button -->
                    <button type="submit" class="submit-btn" id="submitBtn">
                        <i class="fas fa-paper-plane me-2"></i>
                        Kirim Bukti Pembayaran
                    </button>
                </form>

                <!-- Additional Info -->
                <div class="text-center mt-4">
                    <small class="text-muted">
                        <i class="fas fa-shield-alt me-1"></i>
                        Pembayaran Anda aman dan terenkripsi
                    </small>
                </div>
            </div>
        </div>
    </div>

    @script
        <script>
            $(document).ready(function() {
                const maxFileSize = 5 * 1024 * 1024; // File size limit (5MB)

                // Format file size
                function formatFileSize(bytes) {
                    if (bytes === 0) return '0 Bytes';
                    const k = 1024;
                    const sizes = ['Bytes', 'KB', 'MB', 'GB'];
                    const i = Math.floor(Math.log(bytes) / Math.log(k));
                    return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
                }

                // Handle file selection
                $('#fileInput').on('change', function() {
                    const file = this.files[0];
                    if (file) {
                        handleFile(file);
                    }
                });

                // Handle drag and drop
                $('#uploadArea').on('dragover', function(e) {
                    e.preventDefault();
                    $(this).addClass('dragover');
                });

                $('#uploadArea').on('dragleave', function(e) {
                    e.preventDefault();
                    $(this).removeClass('dragover');
                });

                $('#uploadArea').on('drop', function(e) {
                    e.preventDefault();
                    $(this).removeClass('dragover');

                    const files = e.originalEvent.dataTransfer.files;
                    if (files.length > 0) {
                        const file = files[0];
                        $('#fileInput')[0].files = files;
                        handleFile(file);
                    }
                });

                // Handle file processing
                function handleFile(file) {
                    const allowedTypes = ['image/jpeg', 'image/jpg', 'image/png', 'application/pdf'];

                    // Validate file type
                    if (!allowedTypes.includes(file.type)) {
                        alert('Format file tidak didukung. Gunakan JPG, PNG, atau PDF.');
                        $('#fileInput').val('');
                        return;
                    }

                    // Validate file size
                    if (file.size > maxFileSize) {
                        alert('Ukuran file terlalu besar. Maksimal 5MB.');
                        $('#fileInput').val('');
                        return;
                    }

                    // Show file preview
                    // $('#fileName').text(file.name);
                    // $('#fileSize').text(formatFileSize(file.size));
                    // $('#filePreview').show();
                    // $('#submitBtn').prop('disabled', false);

                    // Persist file preview after Livewire updates
                    Livewire.on('fileUploaded', () => {
                        $('#fileName').text(file.name);
                        $('#fileSize').text(formatFileSize(file.size));
                        $('#filePreview').show();
                        $('#submitBtn').prop('disabled', false);
                    });

                    // Update file icon based on type
                    const fileIcon = $('.file-icon');
                    if (file.type === 'application/pdf') {
                        fileIcon.attr('class', 'fas fa-file-pdf file-icon');
                    } else {
                        fileIcon.attr('class', 'fas fa-file-image file-icon');
                    }
                }

                // Remove file
                $('#removeFile').on('click', function() {
                    $('#fileInput').val('');
                    $('#filePreview').hide();
                    $('#submitBtn').prop('disabled', true);
                });

                // Handle form submission
                $('#paymentForm').on('submit', function(e) {
                    e.preventDefault();

                    if (!$('#fileInput')[0].files[0]) {
                        alert('Silakan upload bukti pembayaran terlebih dahulu.');
                        return;
                    }

                    // Show loading state
                    $('#submitBtn').html('<i class="fas fa-spinner fa-spin me-2"></i>Mengirim...').prop('disabled', true);

                    // Simulate upload process
                    // setTimeout(function() {

                    //     // Reset form
                    //     $('#fileInput').val('');
                    //     $('#filePreview').hide();
                    //     $('#submitBtn')
                    //         .html('<i class="fas fa-check me-2"></i>Terkirim')
                    //         .css('background', 'linear-gradient(135deg, #10b981 0%, #059669 100%)');
                    // }, 2000);
                });

                // Format price with Indonesian locale
                function formatRupiah(number) {
                    return new Intl.NumberFormat('id-ID', {
                        style: 'currency',
                        currency: 'IDR',
                        minimumFractionDigits: 0
                    }).format(number);
                }

                // Example: updatePrice(2550000);
                function updatePrice(amount) {
                    $('#totalPrice').text(formatRupiah(amount));
                }

                // Copy to clipboard function
                function copyToClipboard(text, button) {
                    navigator.clipboard.writeText(text).then(function() {
                        const originalText = $(button).html();
                        $(button).html('<i class="fas fa-check me-1"></i>Tersalin!').addClass('copied');

                        setTimeout(function() {
                            $(button).html(originalText).removeClass('copied');
                        }, 2000);
                    }).catch(function() {
                        const textArea = $('<textarea>').val(text).appendTo('body').select();
                        document.execCommand('copy');
                        textArea.remove();

                        const originalText = $(button).html();
                        $(button).html('<i class="fas fa-check me-1"></i>Tersalin!').addClass('copied');

                        setTimeout(function() {
                            $(button).html(originalText).removeClass('copied');
                        }, 2000);
                    });
                }

                // Bind copy button click
                $('.copy-btn').on('click', function() {
                    const text = $(this).siblings('.account-number').text();
                    copyToClipboard(text, this);
                });
            });
        </script>
    @endscript
</div>
