var pagination;
var totalPage;
var itemsPerPage = 4;
var numPerPage = 3;

function createPagination(totalItems)
{
    pagination = $("#pprimary");

    totalPage = Math.ceil(totalItems/itemsPerPage);

    $('<div class="pager-item"><p class="first_link">1</p></div>').appendTo(pagination);
    $('<div class="pager-item"><p class="prev_link">«</p></div>').appendTo(pagination);

    var pag = 0;
    while(totalPage > pag)
    {
//                if(pag!=0)
          $('<div class="pager-item"><p class="page_link">'+(pag+1)+'</p></div>').appendTo(pagination);
        pag++;
    }
    if(numPerPage > 1)
    {
        $(".page_link").parent().hide();
        $(".page_link").slice(0,numPerPage).parent().show();
    }
//            console.log(totalPage);
    $('<div class="pager-item"><p class="next_link">»</p></div>').appendTo(pagination);
    $('<div class="pager-item"><p class="last_link">'+totalPage+'</p></div>').appendTo(pagination);

//			pagination.find(".page_link:first").addClass("active");

    pagination.find(".page_link:first").parents("div").addClass("active");

    pagination.find(".prev_link").parent().hide();

    pagination.find("div .page_link").click(function()
    {
        var toPage =$(this).html().valueOf()-1;
        var toPage1 =parseInt(pagination.data("pag")) -1;
        loadPage(toPage);

        return false;
    });

    pagination.find("div .first_link").click(function()
    {
        var toPage =0;
        loadPage(toPage);
        return false;
    });

    pagination.find("div .prev_link").click(function()
    {
        var toPage =parseInt(pagination.data("pag")) -1;
        loadPage(toPage);
        return false;
    });

    pagination.find("div .next_link").click(function()
    {
        var toPage =parseInt(pagination.data("pag")) +1;
        loadPage(toPage);
        return false;
    });

    pagination.find(".last_link").click(function()
    {
        var toPage =totalPage -1;
        loadPage(toPage);
        return false;
    });

    loadPage(0);




}

function loadPage(page)
{
    var desde = page * itemsPerPage;

    $.ajax({
        data:{"param1":"dame","limit":itemsPerPage,"offset":desde},
        type:"GET",
        dataType:"json",
        url:"http://localhost/marketplace/m_includes/db-jquery.php"
    }).done(function(data,textStatus,jqXHR){

        var lista = data.lista;

        $("#new").html("");
        

					
        
        
        $.each(lista, function(ind, elem){
            var gambar=elem.image.split(',');
//            console.log(elem.name);
            $('<div class="product-item column"><div class="product-preview-actions"><figure class="product-preview-image"><img src="http://localhost/marketplace/m_content/uploads/'+gambar[0]+'" alt="product-image"></figure><div class="preview-actions"><div class="preview-action"><a href="/marketplace/produk/'+elem.id+'"><div class="circle tiny primary"><span class="icon-tag"></span></div></a><a href="/marketplace/produk/'+elem.id+'"><p>Go to Item</p></a></div><div class="preview-action"><a href="#"><div class="circle tiny secondary"><span class="icon-heart"></span></div></a><a href="#"><p>Favourites +</p></a></div></div></div><div class="product-info"><a href="/marketplace/produk/'+elem.id+'"><p class="text-header">'+elem.name+'</p></a><a href="shop-gridview-v1.html"><p class="category primary">PSD Templates</p></a><p class="price"><span>$</span>'+elem.price+'</p></div><hr class="line-separator"><div class="user-rating"><a href="author-profile.html"><figure class="user-avatar small"><img src="http://localhost/marketplace/m_content/themes/emerald_dragon/images/avatars/avatar_01.jpg" alt="user-avatar"></figure></a><a href="author-profile.html"><p class="text-header tiny">Johnny Fisher</p></a><ul class="rating tooltip" title="Authors Reputation"><li class="rating-item"><svg class="svg-star"><use xlink:href="#svg-star"></use></svg></li><li class="rating-item"><svg class="svg-star"><use xlink:href="#svg-star"></use></svg></li><li class="rating-item"><svg class="svg-star"><use xlink:href="#svg-star"></use></svg></li><li class="rating-item"><svg class="svg-star"><use xlink:href="#svg-star"></use></svg></li><li class="rating-item"><svg class="svg-star"><use xlink:href="#svg-star"></use></svg></li></ul></div></div>').appendTo($("#new"));
        });	


    }).fail(function(jqXHR,textStatus,textError){
        alert("Error :".textError);

    });

    if(page >= 1)
    {
        pagination.find(".first_link").parent().show();
        pagination.find(".prev_link").parent().show();

    }
    else
    {
        pagination.find(".first_link").parent().hide();
        pagination.find(".prev_link").parent().hide();
    }


    if(page <(totalPage- numPerPage))
    {
        pagination.find('.last_link').parent().show();
        pagination.find(".next_link").parent().show();
    }else
    {
        pagination.find('.last_link').parent().hide();
        pagination.find(".next_link").parent().hide();
    }
//            console.log(totalPage-pagina);

    pagination.data("pag",page);

    if(numPerPage>1)
    {
        $(".page_link").parent().hide();
        if(page < (totalPage- numPerPage))
        {
            $(".page_link").slice(page,numPerPage + page).parent().show();
//                    console.log(page + " = " + (numPerPage+page));
        }
        else{
            if(totalPage > numPerPage)
                $(".page_link").slice(totalPage- numPerPage-1).parent().show();
            else
                $(".page_link").slice(0).parent().show();

        }
    }

    pagination.children().removeClass("active");
    pagination.children().eq(page+2).addClass("active");


}


$(function()
{

    $.ajax({

        data:{"param1":"cuantos"},
        type:"GET",
        dataType:"json",
        url:"http://localhost/marketplace/m_includes/db-jquery.php"
    }).done(function(data,textStatus,jqXHR){
        var total = data.total;

        createPagination(total);


    }).fail(function(jqXHR,textStatus,textError){
        alert("Error al realizar la peticion cuantos".textError);

    });



});
