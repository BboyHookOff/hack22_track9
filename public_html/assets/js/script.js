let header = $('#head');
let sidebar = $('.sidebar')


var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
      header.addClass('hide_head');
   } else {
      header.removeClass('hide_head');
   }
   lastScrollTop = st;
});


$('#burger').click(function(){
   sidebar.toggleClass('show_sb')
})


$(document).ready(function(){
      $("#liveToast").toast("show").toggleClass();

      setTimeout(() => {
         $("#liveToast").hide("true");       
      }, 4500);
});
// При нажатии на кнопки, выплывает блок с информацией(class="flower-child2"), 
// при нажатии на следующую кнопку, информация первого блока убирается и выплывает информация 2 блока и т.д.