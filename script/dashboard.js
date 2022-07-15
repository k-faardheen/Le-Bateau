$(".editProfile > button").click(() => { 
    $(".moral-wrapper").toggleClass("active"); 
})  

$(".moralHeader > .cancelBtn > button, .moralFooter > .cancelBtnFooter > button").click(() => { 
    $(".moral-wrapper").toggleClass("active"); 
})
