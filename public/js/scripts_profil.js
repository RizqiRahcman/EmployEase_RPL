/*!
* Start Bootstrap - Resume v7.0.6 (https://startbootstrap.com/theme/resume)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-resume/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Activate Bootstrap scrollspy on the main nav element
    const sideNav = document.body.querySelector('#sideNav');
    if (sideNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#sideNav',
            rootMargin: '0px 0px -40%',
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

document.getElementById("editPendidikan").addEventListener("click", function() {
    var dropdown = document.getElementById("editPendidikanDropdown");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
});

document.getElementById("editPengalaman").addEventListener("click", function() {
    var dropdown = document.getElementById("editPengalamanDropdown");
    if (dropdown.style.display === "none" || dropdown.style.display === "") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
});

// Ambil semua elemen pasangan periode
var periodePairs = document.querySelectorAll('.periode-pair');

// Loop melalui setiap pasangan
periodePairs.forEach(function(pair) {
    var mulaiPeriode = pair.querySelector('.mulai-periode');
    var akhirPeriode = pair.querySelector('.akhir-periode');

    akhirPeriode.addEventListener('change', function() {
        if (akhirPeriode.value < mulaiPeriode.value) {
            alert('Tanggal akhir periode tidak boleh sebelum tanggal mulai periode.');
            akhirPeriode.value = ''; // Reset nilai input tanggal akhir periode
        }
    });
});
