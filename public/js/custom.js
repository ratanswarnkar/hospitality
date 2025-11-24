$(document).ready(function() {
	"use strict";	
	//MEGA MENU	
    $(".about-menu").hover(function() {
        $(".about-mm").show();
    });
    $(".about-menu").mouseleave(function() {
        $(".about-mm").hide();
    });
	$(".theme-menu").hover(function() {
        $(".theme-tour-mm").show();
    });
    $(".theme-menu").mouseleave(function() {
        $(".theme-tour-mm").hide();
    });
	 $(".special-menu").hover(function() {
        $(".special-mm").show();
    });
	
    $(".special-menu").mouseleave(function() {
        $(".special-mm").hide();
    });
	$(".festival-menu").hover(function() {
        $(".festival-menu-mm").show();
    });
    $(".festival-menu").mouseleave(function() {
        $(".festival-menu-mm").hide();
    });
	 $(".interest-menu").hover(function() {
        $(".interest-tour-mm").show();
    });
    $(".interest-menu").mouseleave(function() {
        $(".interest-tour-mm").hide();
    });
	 $(".travel-menu").hover(function() {
        $(".travel-guide-mm").show();
    });
    $(".travel-menu").mouseleave(function() {
        $(".travel-guide-mm").hide();
    });
	  $(".indiatour-menu").hover(function() {
        $(".india-tour-mm").show();
    });
	
    $(".indiatour-menu").mouseleave(function() {
        $(".india-tour-mm").hide();
    });
	 $(".region-menu").hover(function() {
        $(".region-tour-mm").show();
    });
	
    $(".region-menu").mouseleave(function() {
        $(".region-tour-mm").hide();
    });
	 $(".asia-menu").hover(function() {
        $(".asia-tours-mm").show();
    });
	
    $(".asia-menu").mouseleave(function() {
        $(".asia-tours-mm").hide();
    });
    //MEGA MENU	
    $(".admi-menu").hover(function() {
        $(".admi-mm").show();
    });
    $(".admi-menu").mouseleave(function() {
        $(".admi-mm").hide();
    });
    //MEGA MENU	
    $(".cour-menu").hover(function() {
        $(".cour-mm").show();
    });
    $(".cour-menu").mouseleave(function() {
        $(".cour-mm").hide();
    });
    //SINGLE DROPDOWN MENU
    $(".top-drop-menu").on('click', function() {
        $(".man-drop").show();
    });
    $(".man-drop").mouseleave(function() {
        $(".man-drop").hide();
    });
    $(".wed-top").mouseleave(function() {
        $(".man-drop").hide();
    });

    //SEARCH BOX
    $("#sf-box").on('click', function() {
        $(".sf-list").show();
    });
    $(".sf-list").mouseleave(function() {
        $(".sf-list").hide();
    });
    $(".search-top").mouseleave(function() {
        $(".sf-list").hide();
    });
    $('.sdb-btn-edit').hover(function() {
        $(this).text("Click to edit my profile");
    });
    $('.sdb-btn-edit').mouseleave(function() {
        $(this).text("edit my profile");
    }); 
    //MOBILE MENU OPEN
    $(".ed-micon").on('click', function() {
        $(".ed-mm-inn").addClass("ed-mm-act");
    });
    //MOBILE MENU CLOSE
    $(".ed-mi-close").on('click', function() {
        $(".ed-mm-inn").removeClass("ed-mm-act");
    });

    //GOOGLE MAP IFRAME
    $('.map-container').on('click', function() {
        $(this).find('iframe').addClass('clicked')
    }).on('mouseleave', function() {
        $(this).find('iframe').removeClass('clicked')
    });

    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });



    


});

function myFunction() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}



function doEnquiry(tourname){document.enqForm.title.value = tourname;
//alert(document.enqForm.title.value);
document.enqForm.submit();
	}




