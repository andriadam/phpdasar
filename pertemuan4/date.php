<?php
// Date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// echo date("l d M Y", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 27, 9, 2000));


// strtotime
echo date("l", strtotime("27 september 2000"));
