$(function (){

    
    // pagination
    var page =1;
    var url = new URL(location.href);
    var search  =url.search.split('=');
    if (url.search && search[search.length-1]){
        page = url.search;
    }else{
        page = '?page=1';
    }
    console.log(page);
    $.ajax({
        url:`/get/all/product${page}`,
        dataType:'json',
        type:"get",
        headers:{
            'X-CSRF-TOKEN': $('#csrf-token').attr('content')
        },
        success:function (ress){
            let resp = JSON.parse(JSON.stringify(ress)).response;
            // links
            resp.links.map((res,index)=>{
                if (res.url == null){
                   if (index==0){
                    console.log(res.url);

                        $('.pagination').append(`
                        <li disabled onclick="sentAjax()" class="page-item"><a class="page-link" href="/show/all/product?page=2">${res.label}</a></li>
                    `);
                   }else{
                        $('.pagination').append(`
                            <li disabled onclick="sentAjax()" class="page-item"><a class="page-link" href="/show/all/product?page=2">${res.label}</a></li>
                        `);
                   }
                }else{
                    $('.pagination').append(`
                        <li onclick="sentAjax()" class="page-item"><a class="page-link" href="/show/all/product?page=${res.label}">${res.label}</a></li>
                    `);

                }
              
               
            });


            // data
            resp.data.map(res=>{
                var html =`
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">${res.product} </h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere ${res.id}</a>
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
  

    // search
    $('#globalSearch').on("submit",function (event){
        event.preventDefault();
        var from = new FormData();
        from.append("search",$('.searchInput').val());
        if ($(".bra1").is(":checked")){from.append("b1",$('.bra1').val());}else{from.append("b1",'');}
        if ($(".bra2").is(":checked")){from.append("b2",$('.bra2').val());}else{from.append("b2",'');}
        if ($(".bra3").is(":checked")){from.append("b3",$('.bra3').val());}else{from.append("b3",'');}
        if ($(".cate1").is(":checked")){from.append("cate1",$('.cate1').val());}else{from.append("cate1",'');}
        if ($(".cate2").is(":checked")){from.append("cate2",$('.cate2').val());}else{from.append("cate2",'');}
        if ($(".cate3").is(":checked")){from.append("cate3",$('.cate3').val());}else{from.append("cate3",'');}
       
        $.ajax({
            url:"/global/search",
            dataType:'json',
            method:"POST",
            processData: false,
            contentType: false,
            cache: false,
            enctype: 'multipart/form-data',
            data:from,
            headers:{
                'X-CSRF-TOKEN': $('#csrf-token').attr('content')
            },
            success:function (ress){
                let resp = JSON.parse(JSON.stringify(ress)).response;
                $('.pagination').html('');
                $('.forloop').html('');
                console.log(ress);
            // links
            resp.links.map((res,index)=>{
                if (res.url == null){
                    console.log(res.url);
                   if (index==0){
                        $('.pagination').append(`
                        <li disabled onclick="sentAjax()" class="page-item"><a class="page-link" href="/show/all/product?page=${page+1}">${res.label}</a></li>
                    `);
                   }else{
                        $('.pagination').append(`
                            <li disabled onclick="sentAjax()" class="page-item"><a class="page-link" href="/show/all/product?page=${page-1}">${res.label}</a></li>
                        `);
                   }
                }else{
                    $('.pagination').append(`
                        <li onclick="sentAjax()" class="page-item"><a class="page-link" href="/show/all/product?page=${res.label}">${res.label}</a></li>
                    `);

                }
            });


            // data
            resp.data.map(res=>{
                var html =`
                    <div class="col-sm-6">
                        <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">${res.product} </h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere ${$(".searchInput").val()}</a>
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
  

         
    });
        

    
});



// charts
const data = {
    labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
    datasets: [{
    fill: false,
    tension: 0.1,
    borderColor: 'rgb(75, 192, 192)',
    label: '# of Votes',
    data: [12, 19, 3, 5, 2, 3],
    borderWidth: 1,
    backgroundColor: 'rgb(75, 192, 192)',
    }]
};
const config =  {
    scales: {
        y: {
            beginAtZero: true
        },
        x: {
            beginAtZero: true
          }
    }
}
new Chart(document.getElementById('myChart'), {
type: 'line',
data:data,
options:config
});

new Chart(document.getElementById('myChartBar'), {
type: 'bar',
data:data,
options:config
});

 