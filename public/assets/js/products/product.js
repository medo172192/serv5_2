$(function (){
    $.ajax({
        url:"/get/all/product",
        dataType:'json',
        type:"get",
        headers:{
            'X-CSRF-TOKEN': $('#csrf-token').attr('content')
        },
        success:function (ress){
            let resp = JSON.parse(JSON.stringify(ress)).response;
            // links
            resp.links.map((res,index)=>{
                if (index <=10){
                    $('.pagination').append(`
                        <li class="page-item"><a class="page-link" href="${res.url}">${res.label}</a></li>
                    `);
                    
                }else{
                    $('.pagination').append(`
                        <li class="page-item"><a class="page-link" href="${resp.links[resp.links.length-1].url}">${resp.links[resp.links.length-1].label}</a></li>
                    `);
                }
               
            });
            // data
            resp.data.map(res=>{
                var html =`
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        </div>
                    </div>
                `;
                $('.forloop').append(html);
            });
        },
        error:function (err){
            console.log(err);  
        }
    });


    $.ajax({
        url:"/get/categories",
        dataType:'json',
        type:"get",
        headers:{
            'X-CSRF-TOKEN': $('#csrf-token').attr('content')
        },
        success:function (ress){
            let resp = JSON.parse(JSON.stringify(ress)).response;
            console.log(resp);
        },
        error:function (err){
            console.log(err);  
        }
    });

    
});