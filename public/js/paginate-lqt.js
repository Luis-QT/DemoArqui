 $(document).ready(function(){
    $(document).on('click','#pg-left',function(){
        var pos = $('.pagination li.active').index();
        if(pos>1){
            $('.pagination li.active').removeClass('active');
            $('.pagination li').eq(pos-1).find('a').click();
        }
    });
    $(document).on('click','#pg-right',function(){
        var pos = $('.pagination li.active').index();
        var max = $('.pagination li').size()-2;
        if(pos<max){
            $('.pagination li.active').removeClass('active');
            $('.pagination li').eq(pos+1).find('a').click();
        }
    });
});