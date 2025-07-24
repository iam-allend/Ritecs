(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);
    
    
    // Initiate the wowjs
    new WOW().init();
    

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.nav-bar').addClass('sticky-top shadow-sm').css('top', '0px');
        } else {
            $('.nav-bar').removeClass('sticky-top shadow-sm').css('top', '-100px');
        }
    });


    // Header carousel
    $(".header-carousel").owlCarousel({
        animateOut: 'fadeOut',
        items: 1,
        margin: 0,
        stagePadding: 0,
        autoplay: true,
        smartSpeed: 500,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
    });



    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: false,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="fa fa-arrow-right"></i>',
            '<i class="fa fa-arrow-left"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            },
            1200:{
                items:2
            }
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 5,
        time: 2000
    });


   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
})(jQuery);

 // Menunggu hingga seluruh dokumen HTML dimuat
            document.addEventListener('DOMContentLoaded', function() {
                
                // Ambil elemen tombol dan elemen teks berdasarkan ID
                const findLocationBtn = document.getElementById('find-location-btn');
                const locationText = document.getElementById('location-text');

                // Tambahkan event listener untuk 'klik' pada tombol
                findLocationBtn.addEventListener('click', function(event) {
                    // Mencegah link berpindah halaman
                    event.preventDefault();

                    // Periksa apakah browser mendukung Geolocation
                    if (navigator.geolocation) {
                        locationText.textContent = 'Mencari lokasi...'; // Beri tahu user proses sedang berjalan

                        // Panggil fungsi untuk mendapatkan posisi saat ini
                        // getCurrentPosition memiliki 2 parameter utama: fungsi sukses dan fungsi error
                        navigator.geolocation.getCurrentPosition(successCallback, errorCallback);
                    } else {
                        // Jika browser tidak mendukung
                        locationText.textContent = 'Geolocation tidak didukung browser ini.';
                    }
                });

                // Fungsi yang akan dijalankan jika berhasil mendapatkan koordinat
                async function successCallback(position) {
                    const lat = position.coords.latitude;
                    const lon = position.coords.longitude;

                    try {
                        // Panggil API reverse geocoding dari OpenStreetMap
                        const response = await fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}`);
                        const data = await response.json();

                        // Cek apakah API memberikan hasil alamat
                        if (data && data.address) {
                            // Ambil nama kota dan negara dari hasil
                            const city = data.address.city || data.address.town || data.address.village || '';
                            const country = data.address.country || '';
                            
                            // Tampilkan hasilnya di halaman
                            locationText.textContent = `${city}, ${country}`;
                        } else {
                            locationText.textContent = 'Alamat tidak ditemukan.';
                        }
                    } catch (error) {
                        console.error('Error saat fetch alamat:', error);
                        locationText.textContent = 'Gagal mengambil nama lokasi.';
                    }
                }

                // Fungsi yang akan dijalankan jika terjadi error
                function errorCallback(error) {
                    let message = '';
                    switch (error.code) {
                        case error.PERMISSION_DENIED:
                            message = "Semarang";
                            break;
                        case error.POSITION_UNAVAILABLE:
                            message = "Informasi lokasi tidak tersedia.";
                            break;
                        case error.TIMEOUT:
                            message = "Permintaan lokasi timeout.";
                            break;
                        default:
                            message = "Terjadi kesalahan tidak diketahui.";
                            break;
                    }
                    locationText.textContent = message;
                }
            });