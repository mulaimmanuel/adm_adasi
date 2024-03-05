<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Astra Daido Steel Indonesia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">

    {{-- dropdown Search  --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />

    {{-- sweet alert --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
    <!-- *Note: You must have internet connection on your laptop or pc other wise below code is not working -->
    <!-- CSS for full calender -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" rel="stylesheet" />

    {{-- DatePicker --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    {{-- Excel --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
    {{-- PDF --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="" alt="">
                <span class="d-none d-lg-block"></span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->



                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="assets/img/user.png" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"></span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6></h6>
                            <span></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <b>
                <li class="nav-label">Maintenance Menu</h5>
            </b>
            <li class="nav-label">Production</li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#prod-forms-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Form Permintaan Perbaikan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="prod-forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <a class="nav-link collapsed" href="{{ asset('dashboardproduction') }}">
                        <i class="bi bi-list-check"></i>
                        <span>Data Form FPP</span>
                    </a>
                </ul>
            </li><!-- End Prod Forms Nav -->
            <li class="nav-label">Maintenance</li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#maint-received-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Received FPP & Jadwal Preventive</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="maint-received-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ asset('dashboardmaintenance') }}">
                            <i class="bi bi-file-earmark-text-fill"></i>
                            <span>Data Received FPP</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ asset('dashpreventive') }}">
                            <i class="bi bi-calendar"></i>
                            <span>Data Jadwal Preventive</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ route('maintenance.blokpreventive') }}">
                            <i class="bi bi-check2"></i>
                            <span>Blok Jadwal Preventive</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Maint Received Nav -->

            <li class="nav-label">Dept. Maintenance</li>

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#dept-maint-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Mesin & Approve FPP</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="dept-maint-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ asset('mesins') }}">
                            <i class="bi bi-gear"></i>
                            <span>Data Mesin</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ asset('dashboarddeptmtce') }}">
                            <i class="bi bi-check2"></i>
                            <span>Data Approved FPP</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ asset('deptmtcepreventive') }}">
                            <i class="bi bi-check2"></i>
                            <span>Data Jadwal Preventive</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ route('maintenance.blokpreventive') }}">
                            <i class="bi bi-check2"></i>
                            <span>Blok Jadwal Preventive</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Dept Maint Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#dept-complain-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Complain & Claim</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="dept-complain-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('submission') }}">
                            <i class="bi bi-circle"></i><span>Submission</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('showHistoryCLaimComplain') }}">
                            <i class="bi bi-circle"></i><span>History Complain & Claim</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('scheduleVisit') }}">
                            <i class="bi bi-circle"></i><span>Schedule Visit</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Dept Complain & Claim Nav -->

            <li class="nav-label">Sales</li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#sales-fpp-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Form Permintaan Perbaikan</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="sales-fpp-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="{{ asset('dashboardfppsales') }}">
                            <i class="bi bi-list-check"></i>
                            <span>Data Form FPP</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Sales FPP Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#sales-complain-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Claim & Handling</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="sales-complain-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ route('index') }}">
                            <i class="bi bi-circle"></i><span>Handling Sales</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('showHistoryCLaimComplain') }}">
                            <i class="bi bi-circle"></i><span>History Complain & Claim</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('scheduleVisit') }}">
                            <i class="bi bi-circle"></i><span>Schedule Visit</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Sales Complain & Claim Nav -->

        </ul>
    </aside>
    @yield('content');

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>ADASI</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->

        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    {{-- JS Search DropDown --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- datatable --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>

    {{-- searchdropdownJS --}}
    <!-- Tambahkan library Select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    {{-- JSSweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    {{-- Datatble --}}
    <script src="js/datatables-simple-demo.js"></script>

    {{-- DateRangePicker --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- JS for jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS for full calender -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <!-- Menghubungkan ke jsPDF -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>



    @yield('scripts')
    <script>
        //datepickerExcel
        // Fungsi untuk mendapatkan nilai tanggal dari input dan mengatur tautan tombol eksport
        // Mengambil nilai tanggal mulai dan tanggal selesai
        function exportToExcel() {
            // Mengambil nilai tanggal mulai dan tanggal selesai
            var startDate = document.getElementById("start-date").value;
            var endDate = document.getElementById("end-date").value;

            // Memeriksa apakah kedua tanggal sudah dipilih
            if (!startDate || !endDate) {
                alert("Silakan pilih tanggal mulai dan tanggal selesai.");
                return; // Berhenti dari fungsi jika salah satu atau kedua tanggal belum dipilih
            }

            // Mengambil semua baris data dari tabel
            var tableRows = document.querySelectorAll("tbody tr");

            // Membuat objek workbook Excel
            var wb = XLSX.utils.book_new();
            var ws_name = "Data"; // Nama sheet Excel

            // Membuat array untuk menyimpan data
            var data = [];

            // Mengambil header dari tabel untuk judul kolom
            var tableHeader = [];
            document.querySelectorAll("thead th").forEach(function(th) {
                tableHeader.push(th.textContent.trim());
            });
            data.push(tableHeader);

            // Melakukan iterasi melalui setiap baris tabel
            tableRows.forEach(function(row) {
                // Mengambil tanggal due_date dari kolom 'Due Date'
                var dueDate = row.cells[19].innerText.trim();

                // Memeriksa apakah tanggal 'Due Date' berada dalam rentang yang dipilih
                if (dueDate >= startDate && dueDate <= endDate) {
                    // Jika dalam rentang tanggal, tambahkan data baris ke dalam array
                    var rowData = [];
                    row.querySelectorAll('td').forEach(function(cell) {
                        rowData.push(cell.innerText.trim());
                    });
                    data.push(rowData);
                }
            });

            // Membuat worksheet Excel dari data yang dipilih
            var ws = XLSX.utils.aoa_to_sheet(data);

            // Menambahkan header autofilter
            ws['!autofilter'] = {
                ref: XLSX.utils.encode_range(XLSX.utils.decode_range(ws['!ref']))
            };

            // Menambahkan worksheet ke dalam workbook
            XLSX.utils.book_append_sheet(wb, ws, ws_name);

            // Membuat file Excel dari workbook
            XLSX.writeFile(wb, 'History_Claim_Complain.xlsx');
        }

        // Menentukan objek jsPDF di window
        window.jsPDF = window.jspdf.jsPDF;

        // EksportPDF
        document.addEventListener('DOMContentLoaded', function() {
            // Kode JavaScript Anda di sini akan dijalankan setelah seluruh dokumen HTML telah dimuat

            // Misalnya, Anda dapat menambahkan kode untuk menangani klik tombol export PDF di sini:
            document.querySelectorAll('.export-pdf-button').forEach(function(button) {
                button.addEventListener('click', function() {
                    var rowId = this.getAttribute(
                        'data-row-id'); // Mendapatkan ID baris dari atribut data-row-id tombol
                    exportRowToPDF(
                        rowId); // Memanggil fungsi exportRowToPDF dengan ID baris yang diberikan
                });
            });
        });

        function exportRowToPDF(rowId) {
            // Logika untuk mengekstrak data dari baris yang ditentukan menggunakan rowId
            var rowData = getRowDataById(rowId);

            // Logika untuk memformat rowData dan membuat dokumen PDF
            var doc = new jsPDF();

            // Menambahkan judul
            doc.setFontSize(22);
            doc.setTextColor(44, 62, 80); // Warna judul
            doc.text("Detail Row Data", 105, 20, {
                align: "center"
            });

            // Menambahkan garis pembatas
            doc.setLineWidth(0.5);
            doc.setDrawColor(44, 62, 80); // Warna garis pembatas
            doc.line(20, 25, 190, 25);

            // Menambahkan data ke dokumen PDF
            doc.setFontSize(12);
            doc.setTextColor(44, 62, 80); // Warna teks
            var startY = 40;
            var lineHeight = 10;
            var marginLeft = 20;
            rowData.forEach(function(data, index) {
                doc.text(marginLeft, startY + index * lineHeight, data);
            });

            // Simpan dokumen PDF
            doc.save("row_data.pdf");
        }

        function getRowDataById(rowId) {
            console.log("Row ID:", rowId); // Tambah consol log untuk rowId
            // Logika untuk mengekstrak data dari baris yang ditentukan berdasarkan ID-nya
            // Anda dapat menggunakan metode manipulasi DOM untuk mengambil data dari baris tabel dengan ID yang diberikan
            // Contoh:
            var row = document.getElementById("row_" + rowId);
            console.log("Row Element:", row); // Tambah consol log untuk row
            var rowData = [];
            // Ekstrak data dari setiap sel dalam baris
            row.querySelectorAll('td').forEach(function(cell) {
                rowData.push(cell.innerText.trim());
            });
            return rowData;
        }

        //sweet alert status close
        function confirmStatusChange(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You are about to change the status to "Close".',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna menekan tombol "Yes", kirim permintaan PATCH ke endpoint changeStatus
                    changeStatus(id);
                    window.location.href = "{{ route('index') }}";

                }
            });
        }

        // Fungsi untuk mengirimkan permintaan PATCH ke endpoint changeStatus
        function changeStatus(id) {
            // Kirimkan permintaan AJAX menggunakan jQuery
            $.ajax({
                type: 'PATCH', // Metode HTTP yang digunakan adalah PATCH
                url: '/changeStatus/' + id, // URL endpoint dengan parameter id
                data: {
                    _token: '{{ csrf_token() }}', // Token CSRF untuk keamanan
                    _method: 'PATCH' // Metode HTTP yang digunakan adalah PATCH
                },
                success: function(response) {
                    // Tampilkan pesan sukses jika permintaan berhasil
                    Swal.fire('Success!', 'Status has been changed successfully.', 'success');
                    // Lakukan reload halaman atau update tabel jika diperlukan
                    window.location.href = "{{ route('index') }}";
                }
            });
        }
        // imageModal
        $(document).ready(function() {
            $('.clickable-image').click(function() {
                var imageUrl = $(this).attr('src');
                $('#modalImage').attr('src', imageUrl);
                $('#imageModal').modal('show');
            });
        });

        function SaveAndUpdate() {
            // Lakukan sesuatu saat tombol "Save" atau "Finish" ditekan
            // Contoh: Validasi form, kemudian kirimkan data melalui AJAX jika valid
            // Untuk contoh sederhana, saya hanya menampilkan pesan
            alert('Save or Finish button clicked');
        }

        function FinishAndUpdate() {
            // Lakukan sesuatu saat tombol "Back" ditekan
            // Contoh: Kembali ke halaman sebelumnya atau lakukan navigasi lainnya
            // Untuk contoh sederhana, saya hanya menampilkan pesan
            alert('Back button clicked');
        }
        //sweetalertSave
        function validateAndSubmit() {
            // Simulasi validasi
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: 'Data has been saved successfully.',
            });
        }
        //datatabelSales
        $(document).ready(function() {
            new DataTable('#viewSales');

        });

        //datatableSubmision
        $(document).ready(function() {
            new DataTable('table.display');
        });

        //COnfrimDelete
        document.addEventListener('DOMContentLoaded', function() {
            // Menggunakan event listener untuk menangkap klik pada tombol delete
            document.querySelectorAll('.delete-btn').forEach(function(button) {
                button.addEventListener('click', function() {
                    // Menampilkan SweetAlert untuk konfirmasi penghapusan
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You sure delete this data?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Jika pengguna menekan tombol konfirmasi pada SweetAlert,
                            // maka arahkan ke rute penghapusan
                            window.location.href = button.getAttribute(
                                'data-url');
                        }
                    });
                });
            });
        });

        // //jsDropdownCLaim-cutting
        document.getElementById('process_type').addEventListener('change', function() {
            var dropdownValue = this.value;
            var checkBox1 = document.getElementById('type_1');

            if (dropdownValue === 'Cutting') {
                checkBox1.checked = true;
            } else {
                checkBox1.checked = false;
            }
        });

        //RefreshFromPageInputCreateHandling
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            // Check if the page was accessed from the index page
            const fromIndex = document.referrer.includes("index");

            if (fromIndex) {
                // Set initial values for form elements if coming from index page
                resetFormValues();
            }

            const resetButton = document.querySelector('button[type="reset"]');

            resetButton.addEventListener('click', function() {
                // Reset values to default or empty
                resetFormValues();

                // Hide cancel upload button and error message
                document.getElementById('cancelUpload').style.display = 'none';
                document.getElementById('fileError').style.display = 'none';
            });

            function resetFormValues() {
                // Reset values to default or empty for text inputs
                const textInputs = form.querySelectorAll('input[type="text"]');
                textInputs.forEach(input => {
                    input.value = '';
                });

                // Reset selected values for dropdowns
                const selects = form.querySelectorAll('select');
                selects.forEach(select => {
                    select.value = '';
                });

                // Reset checkboxes to default state (checked or unchecked)
                const checkboxes = form.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = checkbox.defaultChecked;
                });
            }
        });
        // readimageform
        function previewImage(event) {
            var reader = new FileReader();
            reader.onload = function() {
                var output = document.getElementById('preview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);

            // Show the preview image div
            document.getElementById('imagePreview').style.display = 'block';
        }

        //upload fileJS
        document.addEventListener('DOMContentLoaded', function() {
            const fileInput = document.getElementById('formFile');
            const cancelUploadButton = document.getElementById('cancelUpload');
            const fileError = document.getElementById('fileError');

            fileInput.addEventListener('change', handleFileSelection);
            cancelUploadButton.addEventListener('click', cancelFileUpload);

            function handleFileSelection() {
                const allowedFormats = ['image/jpeg', 'image/png',
                    'image/gif'
                ]; // Add more formats if needed
                const selectedFile = fileInput.files[0];

                if (selectedFile) {
                    if (allowedFormats.includes(selectedFile.type)) {
                        // Valid image format
                        fileError.style.display = 'none';
                        cancelUploadButton.style.display = 'inline-block';
                    } else {
                        // Invalid image format
                        fileError.style.display = 'block';
                        cancelUploadButton.style.display = 'none';
                        resetFileInput();
                    }
                }
            }


            function cancelFileUpload() {
                resetFileInput();
                fileError.style.display = 'none';
                cancelUploadButton.style.display = 'none';

                // Hide the preview image div
                document.getElementById('imagePreview').style.display = 'none';
                // Hide the cancel upload button
                document.getElementById('cancelUpload').style.display = 'none';
                // Clear the file input value
                document.getElementById('formFile').value = '';
            }

            function resetFileInput() {
                // Reset file input by cloning and replacing it
                const newFileInput = fileInput.cloneNode(true);
                fileInput.parentNode.replaceChild(newFileInput, fileInput);
                newFileInput.addEventListener('change', handleFileSelection);
            }
        });

        //reset
        document.addEventListener('DOMContentLoaded', function() {
            const resetButton = document.querySelector('button[type="submit"][name="reset"]');
            const form = document.querySelector('form');

            resetButton.addEventListener('click', function() {
                // Reset values to default or empty
                form.reset();

                // Reset checkboxes to default state (checked or unchecked)
                const checkboxes = form.querySelectorAll('input[type="checkbox"]');
                checkboxes.forEach(checkbox => {
                    checkbox.checked = checkbox.defaultChecked;
                });

                // Hide cancel upload button and error message
                document.getElementById('cancelUpload').style.display = 'none';
                document.getElementById('fileError').style.display = 'none';
            });
        });

        //backButonSales
        function goToIndex() {
            window.location.href = "{{ route('index') }}"; // Ganti 'index' dengan nama rute halaman index Anda
        }

        // searchdropdown
        // Inisialisasi Select2 pada semua dropdown dengan class "select2"
        $(document).ready(function() {
            $('.select2').select2();
        });

        //backButonDeptMan
        function goToSubmission() {
            window.location.href =
                "{{ route('submission') }}"; // Ganti 'index' dengan nama rute halaman index Anda
        }

        // searchdropdown
        // Inisialisasi Select2 pada semua dropdown dengan class "select2"
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

    <style>
        #footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #f8f9fa;
            padding: 10px;
            text-align: center;
            box-shadow: 0px -5px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        #footer .copyright,
        #footer .credits {
            color: #343a40;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all the accordion elements
            var accordions = document.querySelectorAll('.accordion');

            // Add click event listener to each accordion
            accordions.forEach(function(accordion) {
                // Toggle the 'show' class on collapse element when the accordion title is clicked
                accordion.querySelector('.card-title').addEventListener('click', function() {
                    accordion.querySelector('.collapse').classList.toggle('show');
                });
            });
        });
    </script>


</body>

</html>