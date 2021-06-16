// Menu Bar Start

$('.dropbtn').click(function(){
  $('.dropdown').toggleClass('display');
})
$('.dropbtn-1').click(function(){
  $('.dropdown-2').toggleClass('display');      
})
$('.dropbtn-2').click(function(){
  $('.dropdown-3').toggleClass('display');
})
$('.fa-bars').click(function(){
  $('.menu-content').toggle();
})

// Menu Bar End

// Main Slider Start

$('.main-slider-img').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  centerMode:true,
  centerPadding: '120px',
  speed:1200,
  dots: true,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 1,
        centerPadding: '60px'
      }
    },
    {
      breakpoint: 1400,
      settings: {
        slidesToShow: 1,
        centerPadding: '80px'
      }
    },
    {
      breakpoint: 1290,
      settings: {
        slidesToShow: 1,
        centerPadding: '46px'
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        centerPadding: '150px'
      }
    },
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 1,
        centerPadding: '120px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        centerPadding: '140px'
      }
    },
    {
      breakpoint: 820,
      settings: {
        slidesToShow: 1,
        centerPadding: '100px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        centerPadding: '60px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        centerPadding: '15px'
      }
    },  
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '20px'
      }
    },
    {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        centerPadding: '12px'
      }
    }
  ]
});

// Main Slider End

// Most Popular Courses Slider Start

$('.most-popular-courses').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  centerMode:true,
  centerPadding: '45px',
  speed:1200,
  dots: false,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '70px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        centerPadding: '32px'
      }
    },
    {
      breakpoint: 950,
      settings: {
        slidesToShow: 3,
        centerPadding: '110px'
      }
    },
    {
      breakpoint: 880,
      settings: {
        slidesToShow: 3,
        centerPadding: '70px'
      }
    },
    {
      breakpoint: 830,
      settings: {
        slidesToShow: 3,
        centerPadding: '40px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        centerPadding: '35px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        centerPadding: '35px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '100px'
      }
    },
    {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        centerPadding: '70px'
      }
    }
  ]
});

// Most Popular Courses Slider End

// Most Popular Videos Slider Start

$('.most-popular-videos').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  centerMode:true,
  centerPadding: '75px',
  speed:1200,
  dots: false,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '140px'
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        centerPadding: '90px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        centerPadding: '49px'
      }
    },
    {
      breakpoint: 950,
      settings: {
        slidesToShow: 3,
        centerPadding: '129px'
      }
    },
    {
      breakpoint: 880,
      settings: {
        slidesToShow: 3,
        centerPadding: '95px'
      }
    },
    {
      breakpoint: 830,
      settings: {
        slidesToShow: 3,
        centerPadding: '75px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        centerPadding: '50px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        centerPadding: '49px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '105px'
      }
    },
    {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        centerPadding: '78px'
      }
    }
  ]
});


// Most Popular Videos Slider End

//Commonly Asked Doubts Start

$('.commonly-asked-doubts').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  centerMode:true,
  centerPadding: '100px',
  speed:1200,
  dots: false,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 2,
        centerPadding: '45px'
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 1,
        centerPadding: '232px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        centerPadding: '77px'
      }
    },
    {
      breakpoint: 950,
      settings: {
        slidesToShow: 1,
        centerPadding: '159px'
      }
    },
    {
      breakpoint: 880,
      settings: {
        slidesToShow: 1,
        centerPadding: '105px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        centerPadding: '30.5px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        centerPadding: '25px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '18px'
      }
    },
    {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        centerPadding: '14.5px'
      }
    }
  ]
});


//Commonly Asked Doubts End

//Recently Joined Students Start

$('.recently-joined-students').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  centerMode:true,
  centerPadding: '75px',
  speed:1200,
  dots: false,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
        {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '140px'
      }
    },
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '140px'
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        centerPadding: '96px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        centerPadding: '49px'
      }
    },
    {
      breakpoint: 950,
      settings: {
        slidesToShow: 3,
        centerPadding: '129px'
      }
    },
    {
      breakpoint: 880,
      settings: {
        slidesToShow: 3,
        centerPadding: '95px'
      }
    },
    {
      breakpoint: 830,
      settings: {
        slidesToShow: 3,
        centerPadding: '75px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        centerPadding: '50px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        centerPadding: '50px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '107px'
      }
    },
    {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        centerPadding: '79px'
      }
    }
  ]
});


//Recently Joined Students End

//Our Teachers Start

$('.our-teachers').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  centerMode:true,
  centerPadding: '75px',
  speed:1200,
  dots: false,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '140px'
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        centerPadding: '96px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        centerPadding: '49px'
      }
    },
    {
      breakpoint: 950,
      settings: {
        slidesToShow: 3,
        centerPadding: '129px'
      }
    },
    {
      breakpoint: 880,
      settings: {
        slidesToShow: 3,
        centerPadding: '95px'
      }
    },
    {
      breakpoint: 830,
      settings: {
        slidesToShow: 3,
        centerPadding: '75px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        centerPadding: '51px'
      }
    },
    
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        centerPadding: '50px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '107px'
      }
    },
    {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        centerPadding: '79px'
      }
    }
  ]
});


//Our Teachers End

//Our Ratings Start

$('.our-ratings').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  centerMode:true,
  centerPadding: '75px',
  speed:1200,
  dots: false,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '140px'
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        centerPadding: '96px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        centerPadding: '49px'
      }
    },
    {
      breakpoint: 950,
      settings: {
        slidesToShow: 3,
        centerPadding: '129px'
      }
    },
    {
      breakpoint: 880,
      settings: {
        slidesToShow: 3,
        centerPadding: '95px'
      }
    },
    {
      breakpoint: 830,
      settings: {
        slidesToShow: 3,
        centerPadding: '75px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        centerPadding: '50px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        centerPadding: '50px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '107px'
      }
    },
    {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        centerPadding: '79px'
      }
    }
  ]
});


//Our Ratings End

//Top Running Courses Start

$('.top-running-courses').slick({
  autoplay: true,
  autoplaySpeed: 5000,
  centerMode:true,
  centerPadding: '90px',
  speed:1200,
  dots: true,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '140px'
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        centerPadding: '96px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        centerPadding: '49px'
      }
    },
    {
      breakpoint: 950,
      settings: {
        slidesToShow: 3,
        centerPadding: '129px'
      }
    },
    {
      breakpoint: 880,
      settings: {
        slidesToShow: 3,
        centerPadding: '95px'
      }
    },
    {
      breakpoint: 830,
      settings: {
        slidesToShow: 3,
        centerPadding: '75px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        centerPadding: '50px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        centerPadding: '50px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '107px'
      }
    },
    {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        centerPadding: '79px'
      }
    }
  ]
});

//Top Running Courses End

// Courses Price Card Slider Start

$('.subjects').slick({
  autoplay: true,
  autoplaySpeed: 1000,
  centerMode:true,
  centerPadding: '50px',
  speed:1200,
  dots: true,
  arrows:false,
  infinite: true,
  pauseOnHover: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '15px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        centerPadding: '60px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        centerPadding: '60px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        centerPadding: '15px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 1,
        centerPadding: '50px'
      }
    }
  ]
});

// Courses Price Card Slider End

// Partner's Slider Start

$(document).ready(function () {
$ ('.partners-img').slick({
  autoplay: true,
  autoplaySpeed: 1000,
  centerMode:true,
  centerPadding: '140px',
  speed:1200,
  dots: false,
  arrows:false,
  infinite: true,
  pauseOnHover: false,
  slidesToShow: 5,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1500,
      settings: {
        slidesToShow: 4,
        centerPadding: '155px'
      }
    },
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 4,
        centerPadding: '96px'
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        centerPadding: '50px'
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        centerPadding: '50px'
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        centerPadding: '40px'
      }
    },
    {
      breakpoint: 420,
      settings: {
        slidesToShow: 2,
        centerPadding: '23px'
      }
    },
    {
      breakpoint: 350,
      settings: {
        slidesToShow: 1,
        centerPadding: '80px'
      }
    }
  ]
  });
  });

  // Partner's Slider End

// Course Videos Details Start

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
// Course Videos Details End

// Video Player Start
var player = videojs('my-video',{
  playbackRates:[0.25,0.5,1,1.5,2,2.5,3,3.5,4,4.5],
  plugins:{
    hotkeys:{
    }
  }
});

player.qualityPickerPlugin();

player.play();

//Video Player End


