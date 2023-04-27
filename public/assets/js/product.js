$(function (){
    "use strict";

    var interval= false;
    function data(){
        $.ajax({
            url:"/show/products",
            dataType:'json',
            type:"post",
            headers:{
                'X-CSRF-TOKEN': $('#csrf-token').attr('content')
            },
            success:function (ress){
                let resp = JSON.parse(JSON.stringify(ress)).response;
                console.log(resp);
                var dataTable = $("#datatables").DataTable({
                    "bDestroy": true,
                    dom: 'Bfrtip',
                    buttons: [
                        'copy','csv' ,'excel','pdf','print'
                    ],
                    order:[[2,'asc']],
                    rowGroup:{
                        dataSrc:2
                    }
                });
                
                dataTable.clear().draw();
                $.each(resp, function(index, value) {
                    dataTable.row.add([
                        value.desc,
                        value.created_at,
                        value.id,
                    ]).draw();
                });
            },
            error:function (err){
                console.log(err);  
            }
        });
    }



    $('#userDesc').on("submit",function (event){
        event.preventDefault();

        $.ajax({
            url:"/create/new/product",
            method:"POST",
            data:{
                id:$('.user_id').val(),
                desc:$('.desc').val(),
            },
            headers:{
              'X-CSRF-TOKEN': $('#csrf-token').attr('content')
            },
            success:function (res){
                $('.desc').val('');
                setInterval(() => {
                    $("#datatables");
                }, 10);
            },
            error:function (error){
                console.log(error);
            },
            complete:function(){
                data();
            }
        });
        
    });
  

    
    data();

    

});