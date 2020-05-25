$(document).ready(function(){
  $('.js-pscroll').each(function(){
    var ps = new PerfectScrollbar(this);
    $(window).on('resize', function(){
      ps.update();
    })
  });

  //$(function () {
      $('#datetimepicker2').datepicker({
          //locale: 'ru'
          format: "yyyy-mm-dd",
          todayBtn: "linked",
          language: "ru",
          autoclose: true,
          todayHighlight: true,
          orientation: "bottom left",
      });//.datepicker(/*"setDate", new Date()*/);
  //});

  $('#search').on('click',function(e){
    e.preventDefault();
     //$("#datetimepicker2").val("").update();
    var maket=$( "#maket" ).val();
    var nod=$('#region').val();
    var date=$('#datetimepicker2').datepicker('getFormattedDate');
    var actionName = 'plan/send_'.concat(maket.toLowerCase());
        $.ajax({
          url: 'plan/show_tables',
          data: {maket:maket,nod:nod,date:date},
          type: 'post',
          cache:false,
          success: function (data) {
            if(!data) data = 'Информация отсутствует';
            //document.getElementById("get").innerHTML=data;
            //$('#select').fadeIn().html(data);
            $('#select').html(data);
            $('.js-pscroll').each(function(){
              var ps = new PerfectScrollbar(this);
              $(window).on('resize', function(){
                ps.update();
              })
            });
            $( "#btn_show" ).click(function() {
              $( "#new" ).show();
              var ps = new PerfectScrollbar("#add");
              $( "#btn_show" ).hide();
              $('#region option').prop('selected', function() {
                  return this.defaultSelected;
              });
              $("#datetimepicker2").datepicker("update", "");
            });



              $('#new').on('submit', function(e){
              var form=$(this).serialize();
              e.preventDefault();
                  $.ajax({
                    url: actionName,
                    type: 'post',
                    cache:false,
                    data: form,
                    success:function(data){
                      var get = $(data).find('#get').html();
                      var err = $(data).find('#errors').html();
                      $('#get').html(get);
                      $('#errors_block').html(err);
                      //$('#errors').fadeIn().html(data);
                      $('.js-pscroll').each(function(){
                        var ps = new PerfectScrollbar(this);
                        $(window).on('resize', function(){
                          ps.update();
                        })
                      });
                  },
                    error: function (request, status, error) {
                      alert('FAIL');
                      alert(request.responseText);
                    }
                  });
            });


            $('#get').scroll(function() {
              $('#add').scrollLeft($(this).scrollLeft());
            });
            $('#add').scroll(function() {
              $('#get').scrollLeft($(this).scrollLeft());
            });

          },
          error: function (request, status, error) {
            alert('FAIL');
            alert(request.responseText);
          }
        });

      /*},
        error: function (request, status, error) {
          alert('FAIL');
          alert(request.responseText);
        }
      });*/
      });
});
