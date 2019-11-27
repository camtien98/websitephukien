
$('.autoplay').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    fade: true,
    nextArrow: '<button class="arr_next btn-arr"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
    prevArrow: '<button class="arr_prew btn-arr"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
    reponsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});


$('.slider-related').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    // arrows: false,
    autoplaySpeed: 2000,
    nextArrow: '<button class="arr_next btn-arr"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
    prevArrow: '<button class="arr_prew btn-arr"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
    reponsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1
            }
        }
    ]
});

$(document).ready(function() {
	var s = $("header");
	var pos = s.position();					   
	$(window).scroll(function() {
		var windowpos = $(window).scrollTop();
		if (windowpos >= pos.top & windowpos >= 100) {
			s.addClass("stick");
		} else {
			s.removeClass("stick");	
		}
	});
});

// 
//Khi người dùng cuộn chuột thì gọi hàm scrollFunction
window.onscroll = function () { scrollFunction() };
// khai báo hàm scrollFunction
function scrollFunction() {
    // Kiểm tra vị trí hiện tại của con trỏ so với nội dung trang
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        //nếu lớn hơn 20px thì hiện button
        document.getElementById("scroll-top").style.display = "block";
    } else {
        //nếu nhỏ hơn 20px thì ẩn button
        document.getElementById("scroll-top").style.display = "none";
    }
}
//gán sự kiện click cho button
document.getElementById('scroll-top').addEventListener("click", function () {
    //Nếu button được click thì nhảy về đầu trang
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});

