<?php
// 1. Matikan semua tampilan error/warning PHP agar tidak merusak format XML SVG
error_reporting(0);
ini_set('display_errors', 0);

// 2. Cegah Redirect Loop '/demo'
// Jika URL dibuka tanpa parameter ?lines=, kita suntikkan teks default milikmu.
// Ini membuat aplikasi langsung render SVG dan tidak jadi redirect ke /demo.
if (!isset($_REQUEST['lines'])) {
    $_REQUEST['lines'] = 'Hi, I\'m Nuruddin Rusydi Ilham 👋;Backend & Network Engineering;Linux Infrastructure & Automation;DNS Filtering & Security Builder.';
}

// 3. Pindahkan direktori kerja ke folder src agar path "../vendor" terbaca benar
chdir(__DIR__ . '/../src');

// 4. Jalankan aplikasi utama
require 'index.php';