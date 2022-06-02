
window.onload = function()
{
  var pathArray = window.location.pathname.split('/');
  switch (pathArray[2])
  {
      case "screenprinting":
          $("#department-all").addClass("menu-open");
          document.getElementById("department-menu").style.display='block';
          document.getElementById("screenprinting-a").style.color='White';
        break;
      case "digitalprinting":
          $("#department-all").addClass("menu-open");
          document.getElementById("department-menu").style.display='block';
          document.getElementById("digitalprinting-a").style.color='White';
        break;
      case "embroidery":
          $("#department-all").addClass("menu-open");
          document.getElementById("department-menu").style.display='block';
          document.getElementById("embroidery-a").style.color='White';
        break;
      case "new":
          $("#new-all").addClass("menu-open");
          document.getElementById("new-all-menu").style.display='block';
          document.getElementById("new-a").style.color='White';
        break;
      case "all":
          $("#new-all").addClass("menu-open");
          document.getElementById("new-all-menu").style.display='block';
          document.getElementById("all-a").style.color='White';
        break;
      case "users":
            $("#user-role").addClass("menu-open");
            document.getElementById("user-role-menu").style.display='block';
            document.getElementById("user-a").style.color='White';
          break;
      case "associates":
            $("#associate-role").addClass("menu-open");
            document.getElementById("associate-role-menu").style.display='block';
            document.getElementById("associate-a").style.color='White';
          break;
      case "roles":
            $("#associate-role").addClass("menu-open");
            document.getElementById("associate-role-menu").style.display='block';
            document.getElementById("role-a").style.color='White';
          break;
      case "shirtcolors":
          $("#shirt-ink-color").addClass("menu-open");
          //document.getElementById("shirt-ink-color-menu").style.display='block';
          document.getElementById("shirt-color-a").style.color='White';
        break;
      case "inkcolors":
          $("#shirt-ink-color").addClass("menu-open");
         // document.getElementById("shirt-ink-color-menu").style.display='block';
          document.getElementById("ink-color-a").style.color='White';
        break;
      case "shownewsletters":
          $("#newsletter").addClass("menu-open");
          document.getElementById("newsletter-menu").style.display='block';
          document.getElementById("newsletter-a").style.color='White';
        break;
      case "newslettershistory":
          $("#newsletter").addClass("menu-open");
          document.getElementById("newsletter-menu").style.display='block';
          document.getElementById("newsletterhistory-a").style.color='White';
        break;

      case "categories":
          $("#product").addClass("menu-open");
          document.getElementById("product-menu").style.display='block';
          document.getElementById("product-categories-a").style.color='White';
        break;
      case "subcategories":
          $("#product").addClass("menu-open");
          document.getElementById("product-menu").style.display='block';
          document.getElementById("product-subcategories-a").style.color='White';
        break;
      case "products":
          $("#product").addClass("menu-open");
          document.getElementById("product-menu").style.display='block';
          document.getElementById("product-a").style.color='White';
        break;
      case "sizes":
          $("#size").addClass("menu-open");
          document.getElementById("size-menu").style.display='block';
          document.getElementById("size-a").style.color='White';
        break;
      case "records":
          $("#history").addClass("menu-open");
          document.getElementById("history-menu").style.display='block';
          document.getElementById("history-a").style.color='White';
        break;
      case "fontscategories":
          $("#font").addClass("menu-open");
          document.getElementById("font-menu").style.display='block';
          document.getElementById("fonts-categories-a").style.color='White';
        break;
      case "fonts":
          $("#font").addClass("menu-open");
          document.getElementById("font-menu").style.display='block';
          document.getElementById("fonts-a").style.color='White';
        break;
      case "reservedwords":
          $("#reserved-word").addClass("menu-open");
          document.getElementById("reserved-word-menu").style.display='block';
          document.getElementById("reserved-word-a").style.color='White';
        break;
      case "promocodes":
          $("#promocode").addClass("menu-open");
          document.getElementById("promocode-menu").style.display='block';
          document.getElementById("promocode-a").style.color='White';
        break;
      case "brands":
          $("#brand").addClass("menu-open");
          document.getElementById("brand-menu").style.display='block';
          document.getElementById("brand-a").style.color='White';
        break;

      case "priceshirttable":
          $("#price").addClass("menu-open");
          document.getElementById("price-menu").style.display='block';
          document.getElementById("price-shirt-table-a").style.color='White';
        break;
      case "pricediscounttable":
          $("#price").addClass("menu-open");
          document.getElementById("price-menu").style.display='block';
          document.getElementById("price-discount-table-a").style.color='White';
        break;
      case "pricepersonalizetable":
          $("#price").addClass("menu-open");
          document.getElementById("price-menu").style.display='block';
          document.getElementById("price-personalize-table-a").style.color='White';
        break;
      case "clipartcategories":
          $("#clipart").addClass("menu-open");
          document.getElementById("clipart-menu").style.display='block';
          document.getElementById("clipart-a").style.color='White';
        break;
      case "designs":
        $("#designs").addClass("menu-open");
        document.getElementById("designs-menu").style.display='block';
        document.getElementById("designstudio-a").style.color='White';
        break;
      case "templates":
          $("#templatesdesigns").addClass("menu-open");
          document.getElementById("templatesdesigns-menu").style.display='block';
          document.getElementById("templates-a").style.color='White';
        break;
      case "addcategories":
        if(pathArray[3] == 'posts')
        {
          $("#post").addClass("menu-open");
          document.getElementById("post-menu").style.display='block';
          document.getElementById("post-categories").style.color='White';
        }
        else if(pathArray[3] == 'templates')
        {
          $("#templatesdesigns").addClass("menu-open");
          document.getElementById("templatesdesigns-menu").style.display='block';
          document.getElementById("templates-categories-a").style.color='White';
        }
        else if(pathArray[3] == 'gallerys')
        {
          $("#gallery").addClass("menu-open");
          document.getElementById("gallery-menu").style.display='block';
          document.getElementById("gallery-categories").style.color='White';
        }
        break;
      case "addsubcategories":
          if(pathArray[3] == 'posts')
          {
            $("#post").addClass("menu-open");
            document.getElementById("post-menu").style.display='block';
            document.getElementById("post-subcategories").style.color='White';
          }
          else if(pathArray[3] == 'templates')
          {
            $("#templatesdesigns").addClass("menu-open");
            document.getElementById("templatesdesigns-menu").style.display='block';
            document.getElementById("templates-subcategories-a").style.color='White';
          }
          else if(pathArray[3] == 'gallerys')
          {
            $("#gallery").addClass("menu-open");
            document.getElementById("gallery-menu").style.display='block';
            document.getElementById("gallery-subcategories").style.color='White';
          }
        break;
      case "addtags":
          if(pathArray[3] == 'posts')
          {
            $("#post").addClass("menu-open");
            document.getElementById("post-menu").style.display='block';
            document.getElementById("post-tags").style.color='White';
          }
          else if(pathArray[3] == 'gallerys')
          {
            $("#gallery").addClass("menu-open");
            document.getElementById("gallery-menu").style.display='block';
            document.getElementById("gallery-tags").style.color='White';
          }
        break;
      case "pending":
          $("#templatesdesigns").addClass("menu-open");
          document.getElementById("templatesdesigns-menu").style.display='block';
          document.getElementById("pending-a").style.color='White';
        break;
      case "storedesign":
          $("#storedesign").addClass("menu-open");
          document.getElementById("storedesign-menu").style.display='block';
          document.getElementById("storedesign-a").style.color='White';
        break;
      case "stores":
          $("#stores").addClass("menu-open");
          document.getElementById("stores-menu").style.display='block';
          document.getElementById("stores-index").style.color='White';
        break;
      case "opencartsended":
          $("#designs-all").addClass("menu-open");
          document.getElementById("designs-menu").style.display='block';
          document.getElementById("open-a-sended").style.color='White';
        break;
      case "opencart":
          $("#designs-all").addClass("menu-open");
          document.getElementById("designs-menu").style.display='block';
          document.getElementById("open-a").style.color='White';
        break;
      case "dashboard":
          $("#dashboard-all").addClass("menu-open");
          document.getElementById("dashboard-menu").style.display='block';
          document.getElementById("dashboard-a").style.color='White';
        break;
      case "dashboard2":
          $("#dashboard-all").addClass("menu-open");
          document.getElementById("dashboard-menu").style.display='block';
          document.getElementById("dashboard2-a").style.color='White';
        break;
      case "charts":
          $("#dashboard-all").addClass("menu-open");
          document.getElementById("dashboard-menu").style.display='block';
          document.getElementById("charts-a").style.color='White';
        break;
      case "themes":
          $("#appearance").addClass("menu-open");
          document.getElementById("appearance-menu").style.display='block';
          document.getElementById("appearance-a").style.color='White';
        break;
      case "posts":
          $("#post").addClass("menu-open");
          document.getElementById("post-menu").style.display='block';
          document.getElementById("post-index").style.color='White';
        break;
      case "gallerys":
          $("#gallery").addClass("menu-open");
          document.getElementById("gallery-menu").style.display='block';
          document.getElementById("gallery-index").style.color='White';
        break;
      case "tags":
          $("#tag").addClass("menu-open");
          document.getElementById("tag-menu").style.display='block';
          document.getElementById("tag-index").style.color='White';
        break;
        case "comments":
          $("#comment").addClass("menu-open");
          document.getElementById("comment-menu").style.display='block';
          document.getElementById("comment-a").style.color='White';
        break;
        case "pages":
          $("#page").addClass("menu-open");
          document.getElementById("page-menu").style.display='block';
          document.getElementById("page-a").style.color='White';
        break;
        case "components":
          $("#component").addClass("menu-open");
          document.getElementById("component-menu").style.display='block';
          document.getElementById("component-a").style.color='White';
        break;
        case "medias":
          $("#media").addClass("menu-open");
          document.getElementById("media-menu").style.display='block';
          document.getElementById("media-a").style.color='White';
        break;
  }


};
    var chart = document.getElementById('chart');
    var printarea = document.getElementById('print-area');
    var aditionalimagetabledata = document.getElementById('aditionalimagetabledata');
    var productpriceshirt = document.getElementById('priceshirt');
    var priceshirttable  = document.getElementById('priceshirttable');
    var pricesoldtable  = document.getElementById('pricesold');
    var priceshirttabledata  = document.getElementById('priceshirttabledata');
    var pricepersonalizetabledata  = document.getElementById('pricepersonalizetabledata');
    var sidelist = [];
    var productsides = document.getElementById('productsides');
    var cliparts = [];
    var checkallclipart = false;


    getsides();
    saveprintarea();



  $(function () {
    $('#userstable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });

  $(function () {
    $('#orderstable').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });

  $(function () {
      $('#rolestable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#shirtcolortable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#inkcolortable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#categoriestable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#categoriestablevuejs').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#subcategoriestable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#sizestable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#fontscategoriestable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#fontstable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#productstable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#promocodestable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#brandstable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#designstable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#storedesignstable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#templatestable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#opencarttable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#mediastable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#sidestable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#poststable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#tagstable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#commentstable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#gallerystable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#componentstable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#designerstable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#storestable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#mailablestable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#pagestable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    $(function () {
      $('#childproductstable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

     $(function () {
      $('#colorfamilytable').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": false,
        "info": true,
        "autoWidth": true
      });
    });

    //Date picker
    $('#birthday').datepicker({
      autoclose: true
    })

    //Datemask mm/dd/yyyy
    //$("#birthday").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //$('#birthday').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});

     //Money Euro
     $("[data-mask]").inputmask();

     //color picker with addon
     $(".my-colorpicker2").colorpicker();

     //Initialize Select2 Elements
     $(".select2").select2();

     $.widget.bridge('uibutton', $.ui.button);

    //Date range picker with time picker
    $('#daterangefilter').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' });

    /*$(function ()
    {
      var elements = document.getElementsByClassName('description2');
      for (let index = 0; index < elements.length; index++) {
        if(elements[index] != undefined)
        {
          CKEDITOR.replace(elements[index].id)
        }
      }
    })*/

    $('.description2').wysihtml5();

    function removedolar(element)
  {
    var value = element.innerHTML;
    value =  value.replace('$','');
    element.innerHTML= value;
  }

  function adddolar(element) {
    var value = element.innerHTML;
    element.innerHTML= "$"+value;
  }

  function removepercent(element)
  {
    var value = element.innerHTML;
    value =  value.replace('%','');
    element.innerHTML= value;
  }

  function addpercent(element) {
    var value = element.innerHTML;
    element.innerHTML= value+"%";
  }

  $('#addsizes').click(function ()
  {
     var tbl     = document.getElementById("sizechart");
     var tblBody = document.getElementById("tbody");
     var row = document.createElement("tr");
          var cell = document.createElement("td");
            cell.setAttribute('contenteditable', true);
            var cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
              cell.addEventListener("keyup",function(event)
              {
                savetabledata();
        });
            var cell = document.createElement("td");
              cell.setAttribute('contenteditable', true);
            var cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
              cell.addEventListener("keyup",function(event)
              {
                savetabledata();
        });
            var cell = document.createElement("td");
              cell.setAttribute('contenteditable', true);
            var cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
              cell.addEventListener("keyup",function(event)
              {
                savetabledata();
        });
            var cell = document.createElement("td");
              cell.addEventListener("click",function(event)
              {
                event.preventDefault();
            $(this).closest('tr').remove();
        });
            var span = document.createElement('span');
            span.className = "table-remove fa fa-times removesizes";
            cell.appendChild(span);
            row.appendChild(cell);
            var cell = document.createElement("td");
            var span1 = document.createElement('span');
            span1.className = "table-up glyphicon fa fa-arrow-up movesizeup";
            span1.addEventListener("click",function(event)
            {
              event.preventDefault();
              var row = $(this).closest('tr');
        row.prev().before(row);

      });
            cell.appendChild(span1);
            var span2 = document.createElement('span');
            span2.className = "table-up glyphicon fa fa-arrow-down movesizedown";
            span2.addEventListener("click",function(event)
            {
              event.preventDefault();
              var row = $(this).closest('tr');
        row.next().after(row);

      });
            cell.appendChild(span2);
            row.appendChild(cell);
        tblBody.appendChild(row);
        tbl.appendChild(tblBody);
  });


  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function getsides()
{
   $.ajax({
       type:'GET',
       dataType: 'json',
       url: '/api/sides',
       success:function(data)
       {
        //sidelist = data.sides;
        //startenabledisable();
        for (let index = 0; index < data.sides.length; index++)
        {
          data.sides[index].status="Disable";
        }
        sidelist = data.sides;
        startenabledisable();
       }
   });
}

  $('#addprintarea').click(function ()
  {
    var sides = [];
      $.ajax({
        type:'GET',
        dataType: 'json',
        url: '/api/sides',
        success:function(data)
        {
          sides = data.sides;
          var tbl     = document.getElementById("print-area-chart");
          var tblBody = document.getElementById("tbody-printarea");
          var row = document.createElement("tr");
            var cell = document.createElement("td");
                cell.setAttribute('contenteditable', true);
                cell.setAttribute('type', 'name');
                var cellText = document.createTextNode("");
                cell.appendChild(cellText);
              row.appendChild(cell);
                cell.addEventListener("keyup",function(event)
                {
                  setCanvasProperty2(this);
                  saveprintarea();
                });
                cell.addEventListener("focus",function(event)
                {
                    setCanvasProperty2(this);
                    saveprintarea();
                });
                   var cell = document.createElement("td");
                     var select = document.createElement("SELECT");
                     select.setAttribute("class", "form-control");
                     select.setAttribute('type', 'select');
                     select.setAttribute('name', 'sides');
                     var option = document.createElement("option");
                     option.setAttribute("value", "Select Side");
                     option.setAttribute("selected", "selected");

                     var t = document.createTextNode("Select Side");
                     option.appendChild(t);
                     select.appendChild(option);


                    for (var index = 0; index < sidelist.length; index++)
                    {
                       var option = document.createElement("option");
                       option.setAttribute("value", sidelist[index]['slug']);

                       var t = document.createTextNode(sidelist[index]['name']);
                       option.appendChild(t);
                       select.appendChild(option);
                     }
                     cell.appendChild(select);
                     row.appendChild(cell);
                     select.addEventListener("change",function(event)
                     {
                       setCanvasProperty2(this);
                       saveprintarea();
                      });
                   var cell = document.createElement("td");
                     cell.setAttribute('contenteditable', true);
                     cell.setAttribute('type', 'width');
                   var cellText = document.createTextNode("350");
                     cell.appendChild(cellText);
                     row.appendChild(cell);
                     cell.addEventListener("keyup",function(event)
                     {
                        setCanvasProperty2(this);
                        saveprintarea();
                    });
                    cell.addEventListener("focus",function(event)
                     {
                        setCanvasProperty2(this);
                        saveprintarea();
                    });
               var cell = document.createElement("td");
               cell.setAttribute('contenteditable', true);
               cell.setAttribute('type', 'height');
              var cellText = document.createTextNode("500");
                cell.appendChild(cellText);
                row.appendChild(cell);
                cell.addEventListener("keyup",function(event)
                {
                  setCanvasProperty2(this);
                  saveprintarea();
                });
                cell.addEventListener("focus",function(event)
                     {
                        setCanvasProperty2(this);
                        saveprintarea();
                    });
              var cell = document.createElement("td");
                cell.setAttribute('contenteditable', true);
                cell.setAttribute('type', 'left');
              var cellText = document.createTextNode("210");
                cell.appendChild(cellText);
                row.appendChild(cell);
                cell.addEventListener("keyup",function(event)
                {
                  setCanvasProperty2(this);
                  saveprintarea();
                });
                cell.addEventListener("focus",function(event)
                {
                  setCanvasProperty2(this);
                  saveprintarea();
                });
              var cell = document.createElement("td");
                cell.setAttribute('contenteditable', true);
                cell.setAttribute('type', 'top');
              var cellText = document.createTextNode("180");
                cell.appendChild(cellText);
                row.appendChild(cell);
                cell.addEventListener("keyup",function(event)
                {
                  setCanvasProperty2(this);
                  saveprintarea();
                });
                cell.addEventListener("focus",function(event)
                {
                    saveprintarea();
                });
                var cell = document.createElement("td");
                     var select = document.createElement("input");
                     //select.setAttribute("class", "form-control");
                     select.setAttribute('type', 'checkbox');
                     select.setAttribute('name', 'center');
                     cell.appendChild(select);
                     row.appendChild(cell);
                     select.addEventListener("change",function(event)
                     {
                       saveprintarea();
                      });
                  var cell = document.createElement("td");
                      var select = document.createElement("input");
                     // select.setAttribute("class", "form-control");
                      select.setAttribute('type', 'checkbox');
                      select.setAttribute('name', 'adult');
                      cell.appendChild(select);
                      row.appendChild(cell);
                      select.addEventListener("change",function(event)
                      {
                        saveprintarea();
                       });
                  var cell = document.createElement("td");
                       var select = document.createElement("input");
                       //select.setAttribute("class", "form-control");
                       select.setAttribute('type', 'checkbox');
                       select.setAttribute('name', 'youth');
                       cell.appendChild(select);
                       row.appendChild(cell);
                       select.addEventListener("change",function(event)
                       {
                         saveprintarea();
                        });
                  var cell = document.createElement("td");
                     var select = document.createElement("input");
                     //select.setAttribute("class", "form-control");
                     select.setAttribute('type', 'checkbox');
                     select.setAttribute('name', 'chest');
                     cell.appendChild(select);
                     row.appendChild(cell);
                     select.addEventListener("change",function(event)
                     {
                       saveprintarea();
                      });
                      var cell = document.createElement("td");
                     var select = document.createElement("input");
                     //select.setAttribute("class", "form-control");
                     select.setAttribute('type', 'checkbox');
                     select.setAttribute('name', 'embroideryuse');
                     cell.appendChild(select);
                     row.appendChild(cell);
                     select.addEventListener("change",function(event)
                     {
                       saveprintarea();
                      }); var cell = document.createElement("td");
                      var select = document.createElement("input");
                      //select.setAttribute("class", "form-control");
                      select.setAttribute('type', 'checkbox');
                      select.setAttribute('name', 'isenabled');
                      cell.appendChild(select);
                      row.appendChild(cell);
                      select.addEventListener("change",function(event)
                      {
                        saveprintarea();
                       });

                     var cell = document.createElement("td");
                     cell.addEventListener("click",function(event)
                     {
                       event.preventDefault();
                   $(this).closest('tr').remove();
                });
                   var span = document.createElement('span');
                   span.className = "table-remove fa fa-times removesizes";
                   cell.appendChild(span);
                   row.appendChild(cell);
                   var cell = document.createElement("td");
                        var span1 = document.createElement('span');
                        span1.className = "table-up glyphicon fa fa-arrow-up movesizeup";
                        span1.addEventListener("click",function(event)
                        {
                          event.preventDefault();
                          var row = $(this).closest('tr');
                    row.prev().before(row);
                  });
                   cell.appendChild(span1);
                   var span2 = document.createElement('span');
                   span2.className = "table-up glyphicon fa fa-arrow-down movesizedown";
                   span2.addEventListener("click",function(event)
                   {
                          event.preventDefault();
                          var row = $(this).closest('tr');
                    row.next().after(row);

                  });
                   cell.appendChild(span2);
                   row.appendChild(cell);
               tblBody.appendChild(row);
               tbl.appendChild(tblBody);
        }
    });

  });

  function startenabledisable()
  {
    for (let index = 0; index < sidelist.length; index++)
    {
      enabledisable(document.getElementById( sidelist[index].slug + "checkbox"));
    }
  }


  function enabledisable(element)
  {
    if(element != undefined)
    {
      if(element.checked)
      {
        document.getElementById(element.id.replace("checkbox","upload")).className = document.getElementById(element.id.replace("checkbox","upload")).className.replace("disabled","")
        for (let index = 0; index < sidelist.length; index++)
        {
          if(element.id.replace("checkbox","") == sidelist[index].slug )
          {
            sidelist[index].status = "Enable";
          }
        }
      }
      else
      {
        if(! document.getElementById(element.id.replace("checkbox","upload")).className.includes("disabled"))
        {
          document.getElementById(element.id.replace("checkbox","upload")).className +="disabled";
        }

        for (let index = 0; index < sidelist.length; index++)
        {
          if(element.id.replace("checkbox","") == sidelist[index].slug )
          {
            sidelist[index].status = "Disable";
          }
        }
      }
      productsides.value=JSON.stringify(sidelist);
    }
  }

  function SetMedia(element,preview)
  {
    document.getElementById(preview +'previewmedia').value = element.value;
  }

  function setCanvasProperty2(element)
  {
    var file = null;
    var previewCanvaswrapper = document.getElementById('previewcanvas-wrapper');
       previewCanvaswrapper.style.position = "relative";
    var previewCanvas = document.getElementById('previewCanvas');

    switch (element.getAttribute('type'))
    {
      case "select":
          if(document.getElementById(element.value+"preview").src != '')
          {
            document.getElementById('previewCanvasShirt').style.backgroundImage = "url(" + document.getElementById(element.value+"preview").src + ")";
          }
          else if(document.getElementById(element.value+"image") != undefined)
          {
            file = document.getElementById(element.value+"image").files[0];
            var reader = new FileReader();
            reader.onloadend = function()
            {
                document.getElementById('previewCanvasShirt').style.backgroundImage = "url(" + reader.result + ")";
            }

            if(file != undefined)
            {
                reader.readAsDataURL(file);
            }
            else
            {
              for (let index = 0; index < sidelist.length; index++)
              {
                if(document.getElementById(sidelist[index].slug+"preview") != undefined && document.getElementById(sidelist[index].slug+"preview").src != '' && element.value == sidelist[index].slug)
                {
                  document.getElementById('previewCanvasShirt').style.backgroundImage = "url(" + document.getElementById(sidelist[index].slug+"preview").src + ")";
                }
              }
            }
          }
          else
          {
            for (let index = 0; index < sidelist.length; index++)
            {
              if(document.getElementById(sidelist[index].slug+"preview") != undefined &&  document.getElementById(sidelist[index].slug+"preview").src != '' && val == sidelist[index].slug)
              {
                document.getElementById('previewCanvasShirt').style.backgroundImage = "url(" + document.getElementById(sidelist[index].slug+"preview").src + ")";
              }
            }
          }
          break;
        default:

        var val = $(element).parent().children().find("select[name='sides']").val();
        if(document.getElementById(val+"previewmedia") != undefined && document.getElementById(val+"previewmedia").value != '')
        {
          document.getElementById('previewCanvasShirt').style.backgroundImage = "url(" + document.getElementById(val+"previewmedia").value + ")";
        }
        else if(document.getElementById(val+"image") != undefined &&  document.getElementById(val+"image") != undefined)
        {
          file = document.getElementById(val+"image").files[0];
          var reader = new FileReader();
          reader.onloadend = function()
          {
              document.getElementById('previewCanvasShirt').style.backgroundImage = "url(" + reader.result + ")";
          }
          if(file)
          {
              reader.readAsDataURL(file);
          }
        }
        for (let index = 0; index < sidelist.length; index++)
        {
          if(document.getElementById(sidelist[index].slug+"preview") != undefined &&   document.getElementById(sidelist[index].slug+"preview").src != '' && val == sidelist[index].slug)
          {
            document.getElementById('previewCanvasShirt').style.backgroundImage = "url(" + document.getElementById(sidelist[index].slug+"preview").src + ")";
          }
        }
        var width = $(element).parent().children()[2];
        var height = $(element).parent().children()[3];
        var left = $(element).parent().children()[4];
        var top = $(element).parent().children()[5];

        if(width != "")
        {
          previewCanvaswrapper.style.width = width.innerHTML + 'px';
          previewCanvas.style.width = width.innerHTML + 'px';
        }
        else
        {
          previewCanvaswrapper.style.width = '0px';
          previewCanvas.style.width = '0px';
        }

        if(height != "")
        {
          previewCanvaswrapper.style.height = height.innerHTML + 'px';
          previewCanvas.style.height = height.innerHTML + 'px';
        }
        else
        {
          previewCanvaswrapper.style.height = '0px';
          previewCanvas.style.height = '0px';
        }

        if(left != "")
        {
          previewCanvaswrapper.style.left = left.innerHTML + 'px';
          previewCanvas.style.left = left.innerHTML + 'px';
        }
        else
        {
          previewCanvaswrapper.style.left = '0px';
          previewCanvas.style.left = '0px';
        }

        if(top != "")
        {
          previewCanvaswrapper.style.top = top.innerHTML + 'px';
          previewCanvas.style.top = top.innerHTML + 'px';
        }
        else
        {
          previewCanvaswrapper.style.top = '0px';
          previewCanvas.style.top = '0px';
        }

      break;
    }
  }

  $('#addsizeshirt').click(function ()
  {
     var tblBodys = document.getElementById("tbodyshirt");
     var rows = document.createElement("tr");
          var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
      var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
        var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
      var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
      var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
      var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
      var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                saveproductpriceshirt();
        });
            var cells = document.createElement("td");
              cells.addEventListener("click",function(event)
              {
                event.preventDefault();
            $(this).closest('tr').remove();
        });
            var spans = document.createElement('span');
            spans.className = "shirt-table-remove fa fa-times";
            cells.appendChild(spans);
            rows.appendChild(cells);
            var cells = document.createElement("td");
            var span1s = document.createElement('span');
            span1s.className = "shirt-table-up glyphicon fa fa-arrow-up";
            span1s.addEventListener("click",function(event)
            {
              event.preventDefault();
              var rows = $(this).closest('tr');
        rows.prev().before(rows);

      });
            cells.appendChild(span1s);
            var span2s = document.createElement('span');
            span2s.className = "shirt-table-up glyphicon fa fa-arrow-down";
            span2s.addEventListener("click",function(event)
            {
              event.preventDefault();
              var rows = $(this).closest('tr');
        rows.next().after(rows);

      });
            cells.appendChild(span2s);
            rows.appendChild(cells);
        tblBodys.appendChild(rows);
        //tbls.appendChild(tblBodys);
  });

  $('#addsoldpercent').click(function ()
  {
     //var tbls = document.getElementById("pricingshirttable");
     var tblBodys = document.getElementById("tbodyshirt");
     var rows = document.createElement("tr");
          var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                savepricesoldtable();
              });
              cells.addEventListener("focusin",function(event){
                removedolar(this);
              });
              cells.addEventListener("focusout",function(event){
                adddolar(this);
              });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                savepricesoldtable();
        });
        cells.addEventListener("focusin",function(event){
          removedolar(this);
        });
        cells.addEventListener("focusout",function(event){
          adddolar(this);
        });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                savepricesoldtable();
        });
        cells.addEventListener("focusin",function(event){
          removepercent(this);
        });
        cells.addEventListener("focusout",function(event){
          addpercent(this);
        });
            var cells = document.createElement("td");
              cells.addEventListener("click",function(event)
              {
                event.preventDefault();
                savepricesoldtable();
            $(this).closest('tr').remove();
        });
            var spans = document.createElement('span');
            spans.className = "shirt-table-remove fa fa-times";
            cells.appendChild(spans);
            rows.appendChild(cells);
            var cells = document.createElement("td");
            var span1s = document.createElement('span');
            span1s.className = "shirt-table-up glyphicon fa fa-arrow-up";
            span1s.addEventListener("click",function(event)
            {
              event.preventDefault();
              savepricesoldtable();
              var rows = $(this).closest('tr');
        rows.prev().before(rows);

      });
            cells.appendChild(span1s);
            var span2s = document.createElement('span');
            span2s.className = "shirt-table-up glyphicon fa fa-arrow-down";
            span2s.addEventListener("click",function(event)
            {
              event.preventDefault();
              savepricesoldtable();
              var rows = $(this).closest('tr');
        rows.next().after(rows);

      });
            cells.appendChild(span2s);
            rows.appendChild(cells);
        tblBodys.appendChild(rows);
        //tbls.appendChild(tblBodys);
  });


   /* $(function() {
      $('form').validator({
          validHandlers: {
              '.customhandler':function(input) {
                  //may do some formatting before validating
                  input.val(input.val().toUpperCase());
                  //return true if valid
                  return input.val() === 'JQUERY' ? true : false;
              }
          }
      });

      $('form').submit(function(e) {
          e.preventDefault();

          if ($('form').validator('check') < 1) {
              alert('Hurray, your information will be saved!');
          }
      })
  })*/

  $(function () {
    /* jQueryKnob */

    $(".knob").knob({
      /*change : function (value) {
       //console.log("change : " + value);
       },
       release : function (value) {
       console.log("release : " + value);
       },
       cancel : function () {
       console.log("cancel : " + this.value);
       },*/
      draw: function () {

        // "tron" case
        if (this.$.data('skin') == 'tron') {

          var a = this.angle(this.cv)  // Angle
              , sa = this.startAngle          // Previous start angle
              , sat = this.startAngle         // Start angle
              , ea                            // Previous end angle
              , eat = sat + a                 // End angle
              , r = true;

          this.g.lineWidth = this.lineWidth;

          this.o.cursor
          && (sat = eat - 0.3)
          && (eat = eat + 0.3);

          if (this.o.displayPrevious) {
            ea = this.startAngle + this.angle(this.value);
            this.o.cursor
            && (sa = ea - 0.3)
            && (ea = ea + 0.3);
            this.g.beginPath();
            this.g.strokeStyle = this.previousColor;
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
            this.g.stroke();
          }

          this.g.beginPath();
          this.g.strokeStyle = r ? this.o.fgColor : this.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
          this.g.stroke();

          this.g.lineWidth = 2;
          this.g.beginPath();
          this.g.strokeStyle = this.o.fgColor;
          this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
          this.g.stroke();

          return false;
        }
      }
    });
    /* END JQUERY KNOB */

    //INITIALIZE SPARKLINE CHARTS
    $(".sparkline").each(function () {
      var $this = $(this);
      $this.sparkline('html', $this.data()+'%');
    });

    /* SPARKLINE DOCUMENTATION EXAMPLES http://omnipotent.net/jquery.sparkline/#s-about */
    drawDocSparklines();
    //drawMouseSpeedDemo();

  });

  function drawDocSparklines() {

    // Bar + line composite charts
    $('#compositebar').sparkline('html', {type: 'bar', barColor: '#aaf'});
    $('#compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red'});


    // Line charts taking their values from the tag
    $('.sparkline-1').sparkline();

    // Larger line charts for the docs
    $('.largeline').sparkline('html',
        {type: 'line', height: '2.5em', width: '4em'});

    // Customized line chart
    $('#linecustom').sparkline('html',
        {
          height: '1.5em', width: '8em', lineColor: '#f00', fillColor: '#ffa',
          minSpotColor: false, maxSpotColor: false, spotColor: '#77f', spotRadius: 3
        });

    // Bar charts using inline values
    $('.sparkbar').sparkline('html', {type: 'bar'});

    $('.barformat').sparkline([1, 3, 5, 3, 8], {
      type: 'bar',
      tooltipFormat: '{{value:levels}} - {{value}}',
      tooltipValueLookups: {
        levels: $.range_map({':2': 'Low', '3:6': 'Medium', '7:': 'High'})
      }
    });

    // Tri-state charts using inline values
    $('.sparktristate').sparkline('html', {type: 'tristate'});
    $('.sparktristatecols').sparkline('html',
        {type: 'tristate', colorMap: {'-2': '#fa7', '2': '#44f'}});

    // Composite line charts, the second using values supplied via javascript
    $('#compositeline').sparkline('html', {fillColor: false, changeRangeMin: 0, chartRangeMax: 10});
    $('#compositeline').sparkline([4, 1, 5, 7, 9, 9, 8, 7, 6, 6, 4, 7, 8, 4, 3, 2, 2, 5, 6, 7],
        {composite: true, fillColor: false, lineColor: 'red', changeRangeMin: 0, chartRangeMax: 10});

    // Line charts with normal range marker
    $('#normalline').sparkline('html',
        {fillColor: false, normalRangeMin: -1, normalRangeMax: 8});
    $('#normalExample').sparkline('html',
        {fillColor: false, normalRangeMin: 80, normalRangeMax: 95, normalRangeColor: '#4f4'});

    // Discrete charts
    $('.discrete1').sparkline('html',
        {type: 'discrete', lineColor: 'blue', xwidth: 18});
    $('#discrete2').sparkline('html',
        {type: 'discrete', lineColor: 'blue', thresholdColor: 'red', thresholdValue: 4});

    // Bullet charts
    $('.sparkbullet').sparkline('html', {type: 'bullet'});

    // Pie charts
    $('.sparkpie').sparkline('html', {type: 'pie', height: '1.0em'});

    // Box plots
    $('.sparkboxplot').sparkline('html', {type: 'box'});
    $('.sparkboxplotraw').sparkline([1, 3, 5, 8, 10, 15, 18],
        {type: 'box', raw: true, showOutliers: true, target: 6});

    // Box plot with specific field order
    $('.boxfieldorder').sparkline('html', {
      type: 'box',
      tooltipFormatFieldlist: ['med', 'lq', 'uq'],
      tooltipFormatFieldlistKey: 'field'
    });

    // click event demo sparkline
    $('.clickdemo').sparkline();
    $('.clickdemo').bind('sparklineClick', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      alert("Clicked on x=" + region.x + " y=" + region.y);
    });

    // mouseover event demo sparkline
    $('.mouseoverdemo').sparkline();
    $('.mouseoverdemo').bind('sparklineRegionChange', function (ev) {
      var sparkline = ev.sparklines[0],
          region = sparkline.getCurrentRegionFields();
      value = region.y;
      $('.mouseoverregion').text("x=" + region.x + " y=" + region.y);
    }).bind('mouseleave', function () {
      $('.mouseoverregion').text('');
    });
  }




  $(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button"><span class="table-add fa fa-times removesizes"></span></a></div>'; //New input field html
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

function previewmedia(element)
{
  if(document.getElementById(element.name.replace("media","preview")) != undefined && element.name.indexOf("media") >= 0)
  {
    document.getElementById(element.name.replace("media","preview")).src = element.value;
    $('.modal').modal('hide');
  }
  else if(document.getElementById(element.name.replace("image","preview")) != undefined && element.name.indexOf("image") >= 0)
  {
    var file = element.files[0];
    var reader = new FileReader();
    reader.onloadend = function(){
      document.getElementById(element.name.replace("image","preview")).src = reader.result;
    }
    if(file)
    {
      reader.readAsDataURL(file);
    }
    $('.modal').modal('hide');
  }
  else if(document.getElementsByName("aditionalimages[]")[0] == element && document.getElementsByName("aditionalimages[]")[0] != undefined)
  {
    var displayadditionalimages = document.getElementById("preview-additional") ;
    for (let index = 0; index < element.files.length; index++)
    {
      setupReader(element.files[index],displayadditionalimages);
    }
    $('.modal').modal('hide');
  }
  else
  {
      var displayadditionalimages = document.getElementById("preview-additional") ;
      if(document.getElementById(element.id).checked)
      {
        $(element.id.replace('check','label')).addClass('image-checkbox-checked');
        setupImage(element.value,displayadditionalimages);
      }
      else
      {
        $(element.id.replace('check','label')).removeClass('image-checkbox-checked');
        removeimage(element.value);
      }

  }
}

function removeimage(element)
{
  //document.getElementById("preview-additional").deleteRow(0);
  //console.log($("#preview-additional").children());
  var listadditionalimages = $("#preview-additional").children();
  for (let index = 0; index < listadditionalimages.length; index++)
  {
    var additionalimage = listadditionalimages[index];
    if(additionalimage.children[1].innerHTML == element.split("/")[element.split("/").length-1])
    {
      document.getElementById("preview-additional").deleteRow(index);
    }
    //console.log(additionalimage.children[1].innerHTML);
    //console.log(element.split("/")[element.split("/").length-1]);
  }
}

function setupReader(file, tablebody) {
  var reader = new FileReader();
  reader.onload = function(e) {
    var tr = document.createElement("tr");
    var td1 = document.createElement("td");
      var img = document.createElement("img");
      img.style.width = "50px";
      img.style.height = "auto";
      img.src = reader.result;
      td1.appendChild(img);
    var td2 = document.createElement("td");
       td2.innerHTML = file.name;
    var td3 = document.createElement("td");
      var btn = document.createElement("bottom");
      btn.className = "btn btn-danger";
      btn.innerHTML = "Remove";
      btn.addEventListener("click",function(event)
      {
        //removefile(0);
      });
      td3.appendChild(btn);
      tr.appendChild(td1);
      tr.appendChild(td2);
      tr.appendChild(td3);
    tablebody.appendChild(tr);
     e.preventDefault();
  }
  reader.readAsDataURL(file);
}

function setupImage(file, tablebody) {

    var tr = document.createElement("tr");
    var td1 = document.createElement("td");
      var img = document.createElement("img");
      img.style.width = "50px";
      img.style.height = "auto";
      img.src = file;
      td1.appendChild(img);
    var td2 = document.createElement("td");
       td2.innerHTML = file.split("/")[file.split("/").length-1];
    var td3 = document.createElement("td");
      var btn = document.createElement("bottom");
      btn.className = "btn btn-danger";
      btn.innerHTML = "Remove";
      btn.addEventListener("click",function(event)
      {
        //removefile(0);
      });
      td3.appendChild(btn);
      tr.appendChild(td1);
      tr.appendChild(td2);
      tr.appendChild(td3);
    tablebody.appendChild(tr);

}




function ShowMedia(element)
{
  switch (element.name){
      case 'frontmedia':
              document.getElementById('frontCanvasShirt').style.backgroundImage = "url(" + element.value + ")";
          break
      case 'rightmedia':
            document.getElementById('rightCanvasShirt').style.backgroundImage = "url(" + element.value + ")";
          break;
      case 'backmedia':
            document.getElementById('backCanvasShirt').style.backgroundImage = "url(" + element.value + ")";
          break;
      default:
            document.getElementById('leftCanvasShirt').style.backgroundImage = "url(" + element.value + ")";
  }
}

function ShowImage(event){
  var file = null;
  switch (event.target.id){
       case 'frontimage':
              file = document.getElementById("frontimage").files[0];
           break
       case 'rightimage':
             file = document.getElementById("rightimage").files[0];
           break;
       case 'backimage':
             file = document.getElementById("backimage").files[0];
           break;
       case 'leftimage':
              file = document.getElementById("leftimage").files[0];
            break;
       default:
            if(event.target.name == 'frontmedia')
            {
              file = event.target.value;
            }
            else if(event.target.name == 'rightmedia')
            {
              file = event.target.value;
            }
            else if(event.target.name == 'backmedia')
            {
              file = event.target.value;
            }
            else if(event.target.name == 'leftmedia')
            {
              file = event.target.value;
            }

   }
  var reader = new FileReader();
  reader.onloadend = function(){
      switch (event.target.id){
           case 'frontimage':
                   document.getElementById('frontCanvasShirt').style.backgroundImage = "url(" + reader.result + ")";
               break
           case 'rightimage':
                  document.getElementById('rightCanvasShirt').style.backgroundImage = "url(" + reader.result + ")";
               break;
           case 'backimage':
                  document.getElementById('backCanvasShirt').style.backgroundImage = "url(" + reader.result + ")";
               break;
           default:
                 document.getElementById('leftCanvasShirt').style.backgroundImage = "url(" + reader.result + ")";
       }
  }
  if(file)
  {
     reader.readAsDataURL(file);
  }
}


$(document).on("click", ".add-record", function ()
{
  var url = $(this).attr('data-url');
  $(".add-record-model").attr("action",url);
});

$(document).on("click", ".add-clipart", function ()
{
  var url = $(this).attr('data-url');
  $(".add-clipart-model").attr("action",url);
});

$(document).on("click", ".add-template", function ()
{
  var url = $(this).attr('data-url');
  $(".add-template-model").attr("action",url);
});


$(document).on("click", ".remove-record", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".remove-record-model").attr("action",url);
  $('body').find('.remove-record-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.remove-record-model').append('<input name="_method" type="hidden" value="DELETE">');
  $('body').find('.remove-record-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$(document).on("click", ".reset-password", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".reset-password-model").attr("action",url);
  $('body').find('.reset-password-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.reset-password-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$(document).on("click", ".default", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".default-model").attr("action",url);
  $('body').find('.default-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.default-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$(document).on("click", ".defaultembroidery", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".defaultembroidery-model").attr("action",url);
  $('body').find('.defaultembroidery-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.defaultembroidery-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$(document).on("click", ".ispersonalize", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".ispersonalize-model").attr("action",url);
  $('body').find('.ispersonalize-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.ispersonalize-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$(document).on("click", ".isembroidery", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".isembroidery-model").attr("action",url);
  $('body').find('.isembroidery-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.isembroidery-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$(document).on("click", ".isexpedited", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".isexpedited-model").attr("action",url);
  $('body').find('.isexpedited-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.isexpedited-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$(document).on("click", ".copymove-record", function ()
{
  var url = $(this).attr('data-url');
  $(".copy-move-record-model").attr("action",url);
  var clipartcheck = document.getElementsByClassName('clipart-check');

  for (let index = 0; index < clipartcheck.length; index++)
  {
    if(clipartcheck[index].checked)
    {
      cliparts.push(clipartcheck[index].id);
    }
  }
  document.getElementById("clipartlist").value = JSON.stringify(cliparts);

});

$(document).on("click", "#editable", function ()
{
   if(this.checked)
   {
     $("#editabletext").val("Editable");
   }
   else
   {
    $("#editabletext").val("No Editable");
   }

});



  function savetabledata()
  {
    var array = [];

      var headers = [];

      var result = null;

      $('#sizechart th').each(function(index, item) {

          headers[index] = $(item).html();

      });

      $('#sizechart tr').has('td').each(function() {

          var arrayItem = {};

          $('td', $(this)).each(function(index, item) {

              arrayItem[headers[index]] = $(item).html();

          });

          array.push(arrayItem);

      });



    chart.value=JSON.stringify(array);
  }

  function saveprintarea()
  {
    var array = [];

      var headers = [];

      var result = null;

      $('#print-area-chart th').each(function(index, item) {

          headers[index] = $(item).html();

      });

      $('#print-area-chart tr').has('td').each(function() {

          var arrayItem = {};

          $('td', $(this)).each(function(index, item) {


            if(index == 1)
            {
              arrayItem[headers[index]] = $(item).children().val();
            }
            else if(index == 6 || index == 7 || index == 8 || index == 9 || index == 10 || index == 11)
            {
              arrayItem[headers[index]] = $(item).children()[0].checked;
            }
            else
            {
              arrayItem[headers[index]] = $(item).html();
            }


          });

          array.push(arrayItem);

      });


    if(printarea != undefined)
    printarea.value=JSON.stringify(array);
  }

function saveaditionalimagetable()
  {
    var array = [];

      var headers = [];

      var result = null;

      $('#aditionalimagetable th').each(function(index, item) {

          headers[index] = $(item).html();

      });

      $('#aditionalimagetable tr').has('td').each(function() {

          var arrayItem = {};

          $('td', $(this)).each(function(index, item) {

              arrayItem[headers[index]] = $(item).html();

          });

          array.push(arrayItem);

      });
      if(aditionalimagetabledata != undefined)
      aditionalimagetabledata.value=JSON.stringify(array);
  }

  function saveproductpriceshirt()
  {
    var array = [];

      var headers = [];

      var result = null;

      $('#priceshirttable th').each(function(index, item) {

          headers[index] = $(item).html();

      });

      $('#priceshirttable tr').has('td').each(function() {

          var arrayItem = {};

          $('td', $(this)).each(function(index, item) {

              arrayItem[headers[index]] = $(item).html();

          });

          array.push(arrayItem);

      });
      if(productpriceshirt != undefined)
      productpriceshirt.value=JSON.stringify(array);


  }

  function savepricesoldtable()
  {
    var array = [];

      var headers = [];

      var result = null;

      $('#pricesoldtable th').each(function(index, item) {

          headers[index] = $(item).html();

      });

      $('#pricesoldtable tr').has('td').each(function() {

          var arrayItem = {};

          $('td', $(this)).each(function(index, item) {

              arrayItem[headers[index]] = $(item).html();

          });

          array.push(arrayItem);

      });
      if(pricesoldtable != undefined)
      pricesoldtable.value=JSON.stringify(array);
  }

  function setCanvasProperty(element)
  {

    var frontCanvaswrapper = document.getElementById('frontcanvas-wrapper');

      frontCanvaswrapper.style.position = "relative";

    var frontCanvas = document.getElementById('frontCanvas');

    var rightCanvaswrapper = document.getElementById('rightcanvas-wrapper');

    rightCanvaswrapper.style.position = "relative";

    var rightCanvas = document.getElementById('rightCanvas');

    var backCanvaswrapper = document.getElementById('backcanvas-wrapper');

      backCanvaswrapper.style.position = "relative";

    var backCanvas = document.getElementById('backCanvas');

    var leftCanvaswrapper = document.getElementById('leftcanvas-wrapper');

    leftCanvaswrapper.style.position = "relative";

    var leftCanvas = document.getElementById('leftCanvas');

    switch (element.id)
    {

        case "frontwidth":

           frontCanvaswrapper.style.width = element.value + 'px';

            frontCanvas.style.width = element.value + 'px';

            break;

        case "frontheight":

            frontCanvaswrapper.style.height = element.value + 'px';

            frontCanvas.style.height = element.value + 'px';

            break;

        case "fronttop":

            frontCanvaswrapper.style.top = element.value + 'px';

            frontCanvas.style.top = element.value + 'px';

            break;

        case "frontleft":

            frontCanvaswrapper.style.left = element.value + 'px';

            frontCanvas.style.left = element.value + 'px';

            break;

        case "rightwidth":

            rightCanvaswrapper.style.width = element.value + 'px';

            rightCanvas.style.width = element.value + 'px';

            break;

         case "rightheight":

            rightCanvaswrapper.style.height = element.value + 'px';

            rightCanvas.style.height = element.value + 'px';

            break;

         case "righttop":

            rightCanvaswrapper.style.top = element.value + 'px';

            rightCanvas.style.top = element.value + 'px';

            break;

         case "rightleft":

            rightCanvaswrapper.style.left = element.value + 'px';

            rightCanvas.style.left = element.value + 'px';

            break;

          case "backwidth":

            backCanvaswrapper.style.width = element.value + 'px';

            backCanvas.style.width = element.value + 'px';

            break;

          case "backheight":

            backCanvaswrapper.style.height = element.value + 'px';

            backCanvas.style.height = element.value + 'px';

            break;

          case "backtop":

            backCanvaswrapper.style.top = element.value + 'px';

            backCanvas.style.top = element.value + 'px';

            break;

          case "backleft":

            backCanvaswrapper.style.left = element.value + 'px';

            backCanvas.style.left = element.value + 'px';

            break;

          case "leftwidth":

            leftCanvaswrapper.style.width = element.value + 'px';

            leftCanvas.style.width = element.value + 'px';

            break;

          case "leftheight":

            leftCanvaswrapper.style.height = element.value + 'px';

            leftCanvas.style.height = element.value + 'px';

            break;

          case "lefttop":

            leftCanvaswrapper.style.top = element.value + 'px';

            leftCanvas.style.top = element.value + 'px';

            break;

          case "leftleft":

            leftCanvaswrapper.style.left = element.value + 'px';

            leftCanvas.style.left = element.value + 'px';

            break;

    }

  }

  function savepriceshirttable()
  {
    var array = [];

      var headers = [];

      var result = null;

      $('#priceshirttable th').each(function(index, item) {

          headers[index] = $(item).html();

      });

      $('#priceshirttable tr').has('td').each(function() {

          var arrayItem = {};

          $('td', $(this)).each(function(index, item) {

              arrayItem[headers[index]] = $(item).html();

          });

          array.push(arrayItem);

      });
      //if(priceshirttable != undefined)
      //{
        priceshirttable.value=JSON.stringify(array);
      //}


  }

  function savepriceshirttablevalue()
  {
    var array = [];

      var headers = [];

      var result = null;

      $('#priceshirttablevalue th').each(function(index, item) {

          headers[index] = $(item).html();

      });

      $('#priceshirttablevalue tr').has('td').each(function() {

          var arrayItem = {};

          $('td', $(this)).each(function(index, item) {

              arrayItem[headers[index]] = $(item).html();

          });

          array.push(arrayItem);

      });
      if(priceshirttabledata != undefined)
      priceshirttabledata.value=JSON.stringify(array);


  }

  function savepricepersonalizetable()
  {
    var array = [];

      var headers = [];

      var result = null;

      $('#pricepersonalizetable th').each(function(index, item) {

          headers[index] = $(item).html();

      });

      $('#pricepersonalizetable tr').has('td').each(function() {

          var arrayItem = {};

          $('td', $(this)).each(function(index, item) {

              arrayItem[headers[index]] = $(item).html();

          });

          array.push(arrayItem);

      });
      if(pricepersonalizetabledata != undefined)
      pricepersonalizetabledata.value=JSON.stringify(array);
  }

  function PutEditable()
  {
    IsEditable = true;
    $('#priceshirttable tr').has('td').each(function()
      {
          var arrayItem = {};
          $('td', $(this)).each(function(index, item)
          {
              $(item).attr("contenteditable",true);
          });
      });
  }

  $('#addpriceshirttable').click(function ()
  {
     var tblBodys = document.getElementById("tbodypriceshirttable");
        var rows = document.createElement("tr");
          var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                savepriceshirttable();
              });
          var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                savepriceshirttable();
              });
              var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
             var cellTexts = document.createTextNode("");
               cells.appendChild(cellTexts);
               rows.appendChild(cells);
               cells.addEventListener("keyup",function(event)
               {
                 savepriceshirttable();
               });
           var cells = document.createElement("td");
             cells.setAttribute('contenteditable', true);
             var cellTexts = document.createTextNode("");
               cells.appendChild(cellTexts);
               rows.appendChild(cells);
               cells.addEventListener("keyup",function(event)
               {
                 savepriceshirttable();
               });
               var cells = document.createElement("td");
               cells.setAttribute('contenteditable', true);
              var cellTexts = document.createTextNode("");
                cells.appendChild(cellTexts);
                rows.appendChild(cells);
                cells.addEventListener("keyup",function(event)
                {
                  savepriceshirttable();
                });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
              var cellTexts = document.createTextNode("");
                cells.appendChild(cellTexts);
                rows.appendChild(cells);
                cells.addEventListener("keyup",function(event)
                {
                  savepriceshirttable();
                });
                var cells = document.createElement("td");
                cells.setAttribute('contenteditable', true);
               var cellTexts = document.createTextNode("");
                 cells.appendChild(cellTexts);
                 rows.appendChild(cells);
                 cells.addEventListener("keyup",function(event)
                 {
                   savepriceshirttable();
                 });
             var cells = document.createElement("td");
               cells.setAttribute('contenteditable', true);
               var cellTexts = document.createTextNode("");
                 cells.appendChild(cellTexts);
                 rows.appendChild(cells);
                 cells.addEventListener("keyup",function(event)
                 {
                   savepriceshirttable();
                 });
                 var cells = document.createElement("td");
                 cells.setAttribute('contenteditable', true);
                 var cellTexts = document.createTextNode("");
                   cells.appendChild(cellTexts);
                   rows.appendChild(cells);
                   cells.addEventListener("keyup",function(event)
                   {
                     savepriceshirttable();
                   });
                   var cells = document.createElement("td");
                   cells.setAttribute('contenteditable', true);
                  var cellTexts = document.createTextNode("");
                    cells.appendChild(cellTexts);
                    rows.appendChild(cells);
                    cells.addEventListener("keyup",function(event)
                    {
                      savepriceshirttable();
                    });
        tblBodys.appendChild(rows);
        document.getElementById("savepriceshirttablebtn").style.display = "block";
  });

  $('#addpriceshirttablevalue').click(function ()
  {
     var tblBodys = document.getElementById("tbodypriceshirttablevalue");
        var rows = document.createElement("tr");
          var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                savepriceshirttablevalue();
              });
          var cells = document.createElement("td");
            cells.setAttribute('contenteditable', true);
            var cellTexts = document.createTextNode("");
              cells.appendChild(cellTexts);
              rows.appendChild(cells);
              cells.addEventListener("keyup",function(event)
              {
                savepriceshirttablevalue();
              });
              var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
             var cellTexts = document.createTextNode("");
               cells.appendChild(cellTexts);
               rows.appendChild(cells);
               cells.addEventListener("keyup",function(event)
               {
                savepriceshirttablevalue();
               });
           var cells = document.createElement("td");
             cells.setAttribute('contenteditable', true);
             var cellTexts = document.createTextNode("");
               cells.appendChild(cellTexts);
               rows.appendChild(cells);
               cells.addEventListener("keyup",function(event)
               {
                savepriceshirttablevalue();
               });
               var cells = document.createElement("td");
               cells.setAttribute('contenteditable', true);
              var cellTexts = document.createTextNode("");
                cells.appendChild(cellTexts);
                rows.appendChild(cells);
                cells.addEventListener("keyup",function(event)
                {
                  savepriceshirttablevalue();
                });
            var cells = document.createElement("td");
              cells.setAttribute('contenteditable', true);
              var cellTexts = document.createTextNode("");
                cells.appendChild(cellTexts);
                rows.appendChild(cells);
                cells.addEventListener("keyup",function(event)
                {
                  savepriceshirttablevalue();
                });
                var cells = document.createElement("td");
                cells.setAttribute('contenteditable', true);
               var cellTexts = document.createTextNode("");
                 cells.appendChild(cellTexts);
                 rows.appendChild(cells);
                 cells.addEventListener("keyup",function(event)
                 {
                  savepriceshirttablevalue();
                 });
             var cells = document.createElement("td");
               cells.setAttribute('contenteditable', true);
               var cellTexts = document.createTextNode("");
                 cells.appendChild(cellTexts);
                 rows.appendChild(cells);
                 cells.addEventListener("keyup",function(event)
                 {
                  savepriceshirttablevalue();
                 });
                 var cells = document.createElement("td");
                 cells.setAttribute('contenteditable', true);
                 var cellTexts = document.createTextNode("");
                   cells.appendChild(cellTexts);
                   rows.appendChild(cells);
                   cells.addEventListener("keyup",function(event)
                   {
                    savepriceshirttablevalue();
                   });
                   var cells = document.createElement("td");
                   cells.setAttribute('contenteditable', true);
                  var cellTexts = document.createTextNode("");
                    cells.appendChild(cellTexts);
                    rows.appendChild(cells);
                    cells.addEventListener("keyup",function(event)
                    {
                      savepriceshirttablevalue();
                    });
                var cells = document.createElement("td");
                  cells.setAttribute('contenteditable', true);
                  var cellTexts = document.createTextNode("");
                    cells.appendChild(cellTexts);
                    rows.appendChild(cells);
                    cells.addEventListener("keyup",function(event)
                    {
                      savepriceshirttablevalue();
                    });
                    var cellTexts = document.createTextNode("");
                    cells.appendChild(cellTexts);
                    rows.appendChild(cells);
                    cells.addEventListener("keyup",function(event)
                    {
                      savepriceshirttablevalue();
                    });
                var cells = document.createElement("td");
                  cells.setAttribute('contenteditable', true);
                  var cellTexts = document.createTextNode("");
                    cells.appendChild(cellTexts);
                    rows.appendChild(cells);
                    cells.addEventListener("keyup",function(event)
                    {
                      savepriceshirttablevalue();
                    });
        tblBodys.appendChild(rows);
  });

  $('#addpricepersonalizetable').click(function ()
  {
     var tblBody = document.getElementById("tbodypricepersonalizetable");
     var row = document.createElement("tr");
          var cell = document.createElement("td");
            cell.setAttribute('contenteditable', true);
            var cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
              cell.addEventListener("keyup",function(event)
              {
                savetabledata();
        });
            var cell = document.createElement("td");
              cell.setAttribute('contenteditable', true);
            var cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
              cell.addEventListener("keyup",function(event)
              {
                savetabledata();
        });
            var cell = document.createElement("td");
              cell.setAttribute('contenteditable', true);
            var cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
              cell.addEventListener("keyup",function(event)
              {
                savetabledata();
        });
        var cell = document.createElement("td");
            cell.setAttribute('contenteditable', true);
            var cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
              cell.addEventListener("keyup",function(event)
              {
                savetabledata();
        });
            var cell = document.createElement("td");
              cell.setAttribute('contenteditable', true);
            var cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
              cell.addEventListener("keyup",function(event)
              {
                savetabledata();
        });
            var cell = document.createElement("td");
              cell.setAttribute('contenteditable', true);
            var cellText = document.createTextNode("");
              cell.appendChild(cellText);
              row.appendChild(cell);
              cell.addEventListener("keyup",function(event)
              {
                savetabledata();
        });
            var cell = document.createElement("td");
              cell.addEventListener("click",function(event)
              {
                event.preventDefault();
            $(this).closest('tr').remove();
        });
            var span = document.createElement('span');
            span.className = "table-remove fa fa-times removesizes";
            cell.appendChild(span);
            row.appendChild(cell);
            var cell = document.createElement("td");
            var span1 = document.createElement('span');
            span1.className = "table-up glyphicon fa fa-arrow-up movesizeup";
            span1.addEventListener("click",function(event)
            {
              event.preventDefault();
              var row = $(this).closest('tr');
        row.prev().before(row);

      });
            cell.appendChild(span1);
            var span2 = document.createElement('span');
            span2.className = "table-up glyphicon fa fa-arrow-down movesizedown";
            span2.addEventListener("click",function(event)
            {
              event.preventDefault();
              var row = $(this).closest('tr');
        row.next().after(row);

      });
            cell.appendChild(span2);
            row.appendChild(cell);
        tblBody.appendChild(row);
  });

  $(document).on("change", ".selectcolors", function ()
  {
    var elements = document.getElementsByClassName('select2-selection__choice');
      for (let index = 0; index < elements.length; index++)
      {
        var color = elements[index].title.split('#');
        if(color.length == 1)
        {
          elements[index].innerHTML = '<span class="select2-selection__choice__remove" role="presentation">×</span>'+color[0];
          elements[index].style.backgroundImage = 'linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet)';
          //elements[index].style.color = '#ffffff';
        }
        else
        {
          elements[index].innerHTML = '<span class="select2-selection__choice__remove" role="presentation">×</span>'+color[0];
          elements[index].style.backgroundColor = '#'+ color[1];

          if(elements[index].title == "White#ffffff")
          {
            elements[index].style.color = '#555555';
          }
          else
          {
            elements[index].style.color = '#ffffff';
          }
        }
      }
  });


var elements = document.getElementsByClassName('select2-selection__choice');
for (let index = 0; index < elements.length; index++)
{
    var color = elements[index].title.split('#');
    if(color.length == 1)
    {
      elements[index].innerHTML = '<span class="select2-selection__choice__remove" role="presentation">×</span>'+color[0];
      elements[index].style.backgroundImage = 'linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet)';
      //elements[index].style.color = '#ffffff';
    }
    else
    {
      elements[index].innerHTML = '<span class="select2-selection__choice__remove" role="presentation">×</span>'+color[0];
      elements[index].style.backgroundColor = '#'+ color[1];

      if(elements[index].title == "White#ffffff")
      {
        elements[index].style.color = '#555555';
      }
      else
      {
        elements[index].style.color = '#ffffff';
      }
    }
}



/*$(document).on("change", ".selectcolors", function ()
{
   var elements = document.getElementsByClassName('select2-selection__choice');
    for (let index = 0; index < elements.length; index++)
    {
      var color = elements[index].title.split('#');
      elements[index].innerHTML = '<span class="select2-selection__choice__remove" role="presentation">×</span>'+color[0];
      elements[index].style.backgroundColor = '#'+ color[1];

      if(elements[index].title == "White#ffffff")
      {
        elements[index].style.color = '#555555';
      }
      else
      {
        elements[index].style.color = '#ffffff';
      }
    }
});*/

$(document).on("change", "#numbercolors", function ()
{
   var colorlist = document.getElementById('colorlist[]');
    if(this.value == 9)
    {
      $('.select2-selection__rendered')[0].innerHTML = "";
      $('.select2-selection__rendered')[0].innerHTML = '<li class="select2-selection__choice" title="Full Color" style="background-image: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet); color: rgb(255, 255, 255);"><span class="select2-selection__choice__remove" role="presentation">×</span>Full Color</li>';
      colorlist.options.selectedIndex = 30;

    }
    else
    {
      $('.select2-selection__rendered')[0].innerHTML = "";
      colorlist.options.selectedIndex = -1;
    }
});


function displayoperation(element)
{
   if(element.value == document.getElementById("defaultcategory").value)
   {
      document.getElementById('typeoperationcategory').style.display = 'none';
   }
   else
   {
      document.getElementById('typeoperationcategory').style.display = 'block';
      var copycategory = document.getElementById("copycategory[]");
      var category = document.getElementById("category");
      for (let index = 0; index < copycategory.options.length; index++)
      {
        if(copycategory.options[index].value != document.getElementById("defaultcategory").value)
        {
          copycategory.options[index].disabled = false;
        }

      }
      copycategory.options[category.options.selectedIndex].disabled = true;
   }
}


$(document).on("change", "#operation", function ()
{
  if (this.value == 'copy')
  {
    document.getElementById('categorylist').style.display = 'block';
  }
  else
  {
    document.getElementById('categorylist').style.display = 'none';
  }
});

$(document).on("click", "#checkall", function ()
{
  var clipartcheck = document.getElementsByClassName('clipart-check');
  var cliparts = [];
  for (let index = 0; index < clipartcheck.length; index++)
  {
    if(!checkallclipart)
    {
      cliparts.push(clipartcheck[index].id);
      clipartcheck[index].checked = true;

    }
    else
    {
      cliparts.slice(index);
      clipartcheck[index].checked = false;
    }
  }
  if(cliparts.length > 0)
  {
    checkallclipart = true;
    document.getElementById('removeall').style.display = 'block';
    document.getElementById('checkall').innerHTML = 'Uncheck All';
  }
  else
  {
    checkallclipart = false;
    document.getElementById('removeall').style.display = 'none';
    document.getElementById('checkall').innerHTML = 'Check All';
  }
});


$(document).on("click", ".clipart-check", function ()
{
  var clipartcheck = document.getElementsByClassName('clipart-check');

  for (let index = 0; index < clipartcheck.length; index++)
  {
    if(clipartcheck[index].checked)
    {
      cliparts.push(clipartcheck[index].id);
    }
  }
  if(cliparts.length > 0)
    {
      document.getElementById('removeall').style.display = 'block';
    }
    else
    {
      document.getElementById('removeall').style.display = 'none';
    }
});

function validatecliparttype(element)
{
  var numbercolors = document.getElementById('numbercolors');
  var colorlist = document.getElementById('colorlist[]');
  var filestype = document.getElementById('filestype');
  var wrongfiles = document.getElementById('wrongfiles');
  var countsvg = 0;
  var countpng = 0;
  for (let index = 0; index < element.files.length; index++)
  {
    if(element.files[index].name.includes('.svg'))
      countsvg++;
    else if(element.files[index].name.includes('.png'))
      countpng++;
    else
      countother++;
  }
  if(countpng > 0 && countsvg > 0)
  {
    filestype.value = "both";
    numbercolors.disabled = false;
    colorlist.disabled = false;
  }
  else if(countpng > 0 && countsvg == 0)
  {
    filestype.value = "png";
    numbercolors.disabled = false;
    colorlist.disabled = false;
  }
  else if(countpng == 0 && countsvg > 0)
  {
    filestype.value = "svg";
    numbercolors.disabled = true;
    colorlist.disabled = true;
  }
  else
  {
    wrongfiles.value = "wrong files";
    numbercolors.disabled = true;
    colorlist.disabled = true;
  }
}

function validatetemplatetype(element)
{
  var numbercolors = document.getElementById('numbercolors');
  var colorlist = document.getElementById('colorlist[]');
  var filestype = document.getElementById('filestype');
  var wrongfiles = document.getElementById('wrongfiles');
  var countsvg = 0;
  var countpng = 0;
  for (let index = 0; index < element.files.length; index++)
  {
    if(element.files[index].name.includes('.svg'))
      countsvg++;
    else if(element.files[index].name.includes('.png'))
      countpng++;
    else
      countother++;
  }
  if(countpng > 0 && countsvg > 0)
  {
    filestype.value = "both";
    numbercolors.disabled = false;
    colorlist.disabled = false;
  }
  else if(countpng > 0 && countsvg == 0)
  {
    filestype.value = "png";
    numbercolors.disabled = false;
    colorlist.disabled = false;
  }
  else if(countpng == 0 && countsvg > 0)
  {
    filestype.value = "svg";
    numbercolors.disabled = true;
    colorlist.disabled = true;
  }
  else
  {
    wrongfiles.value = "wrong files";
    numbercolors.disabled = true;
    colorlist.disabled = true;
  }
}

var opencartemails = [];
$('.opencart').click(function()
{
    var opencartlist = document.getElementsByClassName("opencart");
    for (let index = 0; index < opencartlist.length; index++)
    {
      if(opencartlist[index].checked)
      {
        var pos = opencartemails.indexOf(opencartlist[index].id);
        if(pos == -1)
        opencartemails.push(opencartlist[index].id);
      }
      else
      {
        var pos = opencartemails.indexOf(opencartlist[index].id);
        if(pos != -1)
          opencartemails.splice(pos);
      }
    }
    printListemail();
});


function printListemail()
{
  var list = "";
  for (var i = opencartemails.length - 1; i >= 0; i--)
  {
      list+= opencartemails[i] + ";";
  }
  document.getElementById("to").value = "";
  document.getElementById("to").value = list.substr(0, list.length-1);
}


$('.checkbox-order').click(function()
{
  var orderschecked = [];
  var orderlist = document.getElementsByClassName("checkbox-order");
  var createdorders = document.getElementById('createdorders');
  var countorderselected = document.getElementById('countorderselected');
  var canceledorders = document.getElementById('canceledorders');
  var countcanceledorderselected = document.getElementById('countcanceledorderselected');
  var changestatusorders = document.getElementById('changestatusorders');
  var countchangestatusorderselected = document.getElementById('countchangestatusorderselected');
  for (let index = 0; index < orderlist.length; index++)
  {
    if(orderlist[index].checked)
    {
      orderschecked.push(orderlist[index].id);
    }
  }
  createdorders.value = changestatusorders.value = canceledorders.value = JSON.stringify(orderschecked);
  countorderselected.innerHTML = countcanceledorderselected.innerHTML = countchangestatusorderselected.innerHTML = orderschecked.length;
 

});


$('.checkbox-all-order').click(function()
{
  var orderschecked = [];
  var orderlist = document.getElementsByClassName("checkbox-order");
  var createdorders = document.getElementById('createdorders');
  var countorderselected = document.getElementById('countorderselected');
  var canceledorders = document.getElementById('canceledorders');
  var countcanceledorderselected = document.getElementById('countcanceledorderselected');
  var changestatusorders = document.getElementById('changestatusorders');
  var countchangestatusorderselected = document.getElementById('countchangestatusorderselected');
  if(this.checked)
  {
    for (let index = 0; index < orderlist.length; index++)
    {
      orderlist[index].checked = true;    
      orderschecked.push(orderlist[index].id);  
    }
  }
  else
  {
    for (let index = 0; index < orderlist.length; index++)
    {
      orderlist[index].checked = false;       
    } 
    orderschecked = [];
  }
  createdorders.value = changestatusorders.value = canceledorders.value = JSON.stringify(orderschecked);
  countorderselected.innerHTML = countcanceledorderselected.innerHTML = countchangestatusorderselected.innerHTML = orderschecked.length;

});

$('.checkbox-template').click(function()
{
  var templateschecked = [];
  var orderlist = document.getElementsByClassName("checkbox-template");
  var templatesapprovedselected = document.getElementById('templatesapprovedselected');
  var counttemplateapprovedselected = document.getElementById('counttemplateapprovedselected');
  var templatesrejectedselected = document.getElementById('templatesrejectedselected');
  var counttemplaterejectedselected = document.getElementById('counttemplaterejectedselected');
  var templatesselected = document.getElementById('templatesselected');
  var counttemplateselected = document.getElementById('counttemplateselected');
  for (let index = 0; index < orderlist.length; index++)
  {
    if(orderlist[index].checked)
    {
      templateschecked.push(orderlist[index].id);
    }
  }
  templatesapprovedselected.value = templatesrejectedselected.value = templatesselected.value = JSON.stringify(templateschecked);
  counttemplateapprovedselected.innerHTML = counttemplaterejectedselected.innerHTML = counttemplateselected.innerHTML = templateschecked.length;
});

$('.checkbox-all-template').click(function()
{
  var templateschecked = [];
  var orderlist = document.getElementsByClassName("checkbox-template");
  var templatesapprovedselected = document.getElementById('templatesapprovedselected');
  var counttemplateapprovedselected = document.getElementById('counttemplateapprovedselected');
  var templatesrejectedselected = document.getElementById('templatesrejectedselected');
  var counttemplaterejectedselected = document.getElementById('counttemplaterejectedselected');
  var templatesselected = document.getElementById('templatesselected');
  var counttemplateselected = document.getElementById('counttemplateselected');
  if(this.checked)
  {
    for (let index = 0; index < orderlist.length; index++)
    {
      orderlist[index].checked = true;
      templateschecked.push(orderlist[index].id);       
    }
  }
  else
  {
    for (let index = 0; index < orderlist.length; index++)
    {
      orderlist[index].checked = false;     
    }
    this.templateschecked = [];
  }
  
  templatesapprovedselected.value = templatesrejectedselected.value = templatesselected.value = JSON.stringify(templateschecked);
  counttemplateapprovedselected.innerHTML = counttemplaterejectedselected.innerHTML = counttemplateselected.innerHTML = templateschecked.length;
});

$('.checkbox-all-design').click(function()
{
  var designschecked = [];
  var orderlist = document.getElementsByClassName("checkbox-design");
  var designsselected = document.getElementById('designsselected');
  var countdesignselected = document.getElementById('countdesignselected');
  if(this.checked)
  {
    for (let index = 0; index < orderlist.length; index++)
    {
      orderlist[index].checked = true;
      designschecked.push(orderlist[index].id);       
    }
  }
  else
  {
    for (let index = 0; index < orderlist.length; index++)
    {
      orderlist[index].checked = false;     
    }
    this.designschecked = [];
  }
  
  designsselected.value = JSON.stringify(designschecked);
  countdesignselected.innerHTML = designschecked.length;
});

$('.checkbox-shirtcolor').click(function()
{
  var shirtcolorschecked = [];
  var shirtcolorlist = document.getElementsByClassName("checkbox-shirtcolor");
  var createdshirtcolors = document.getElementById('createshirtcolors');
  var countshirtcolorselected = document.getElementById('countshirtcolorselected');
  for (let index = 0; index < shirtcolorlist.length; index++)
  {
    if(shirtcolorlist[index].checked)
    {
      shirtcolorschecked.push(shirtcolorlist[index].id);
    }
  }
  createdshirtcolors.value = JSON.stringify(shirtcolorschecked);
  countshirtcolorselected.innerHTML = shirtcolorschecked.length;

});


Dropzone.options.dropzone =
{
   maxFilesize: 2,
   renameFile: function(file) {
       var dt = new Date();
       var time = dt.getTime();
      return time+file.name;
   },
   acceptedFiles: ".jpeg,.jpg,.png,.gif",
   addRemoveLinks: true,
   timeout: 50000,
   removedfile: function(file)
   {
       var name = file.upload.filename;
       $.ajax({
           headers: {
                       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                   },
           type: 'POST',
           url: '{{ url("admin/medias/destroy") }}',
           data: {filename: name},
           success: function (data){
               //console.log("File has been successfully removed!!");
           },
           error: function(e) {
               console.log(e);
           }});
           var fileRef;
           return (fileRef = file.previewElement) != null ?
           fileRef.parentNode.removeChild(file.previewElement) : void 0;
   },

   success: function(file, response)
   {
      //console.log(response);
   },
   error: function(file, response)
   {
      return false;
   }
};








$(document).ready(function(e){

  $('.img-check').click(function(e) {
    $('.img-check').not(this).removeClass('check')
    .siblings('input').attr('checked',false);
  $(this).addClass('check')
        .siblings('input').attr('checked',true);
});

});



$(document).on("click", ".asigned_to", function () {
  var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".asigned-to-model").attr("action",url);
  $('body').find('.asigned-to-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.asigned-to-model').append('<input name="order_id" type="hidden" value="'+ order_id +'">');
});

$(document).on("click", ".asigned_all", function () {
  //var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".asigned-all-model").attr("action",url);
  $('body').find('.asigned-all-model').append('<input name="_token" type="hidden" value="'+ token +'">');
});

$(document).on("click", ".change_status_all", function () {
  //var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".change-status-all-model").attr("action",url);
  $('body').find('.change-status-all-model').append('<input name="_token" type="hidden" value="'+ token +'">');
});

$(document).on("click", ".approve_all", function () {
  //var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".approve-all-model").attr("action",url);
  $('body').find('.approve-all-model').append('<input name="_token" type="hidden" value="'+ token +'">');
});

$(document).on("click", ".reject_all", function () {
  //var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".reject-all-model").attr("action",url);
  $('body').find('.reject-all-model').append('<input name="_token" type="hidden" value="'+ token +'">');
});

$(document).on("click", ".delete_all", function () {
  //var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".delete-all-model").attr("action",url);
  $('body').find('.delete-all-model').append('<input name="_token" type="hidden" value="'+ token +'">');
});

$(document).on("click", ".cancel_all", function () {
  //var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".cancel-all-model").attr("action",url);
  $('body').find('.cancel-all-model').append('<input name="_token" type="hidden" value="'+ token +'">');
});

$(document).on("click", ".asigned_family", function () {
  //var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".asigned-family-model").attr("action",url);
  $('body').find('.asigned-family-model').append('<input name="_token" type="hidden" value="'+ token +'">');
});

$(document).on("click", ".change_status", function () {
  var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".change-status-model").attr("action",url);
  $('body').find('.change-status-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.change-status-model').append('<input name="order_id" type="hidden" value="'+ order_id +'">');
});

$(document).on("click", ".change_name", function () {
  var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".update-store-name-model").attr("action",url);
  $('body').find('.update-store-name-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.update-store-name-model').append('<input name="order_id" type="hidden" value="'+ order_id +'">');
});

$(document).on("click", ".change_slogan", function () {
  var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".update-store-slogan-model").attr("action",url);
  $('body').find('.update-store-slogan-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.update-store-slogan-model').append('<input name="order_id" type="hidden" value="'+ order_id +'">');
});

$(document).on("click", ".change_banner", function () {
  var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".update-store-banner-model").attr("action",url);
  $('body').find('.update-store-banner-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.update-store-banner-model').append('<input name="order_id" type="hidden" value="'+ order_id +'">');
});


$(document).on("click", ".activate_theme", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".activate-theme-model").attr("action",url);
  $('body').find('.activate-theme-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.activate-theme-model').append('<input name="id" type="hidden" value="'+ id +'">');
});


$(document).on("click", ".approve", function () {
  var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".approve-to-model").attr("action",url);
  $('body').find('.approve-to-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.approve-to-model').append('<input name="order_id" type="hidden" value="'+ order_id +'">');
});

$(document).on("click", ".reject", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".reject-model").attr("action",url);
  $('body').find('.reject-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.reject-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$(document).on("click", ".cancel", function () {
  var order_id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".cancel-model").attr("action",url);
  $('body').find('.cancel-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.cancel-model').append('<input name="order_id" type="hidden" value="'+ order_id +'">');
});

$(document).on("click", ".publish", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".publish-model").attr("action",url);
  $('body').find('.publish-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.publish-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$(document).on("click", ".unpublish", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".unpublish-model").attr("action",url);
  $('body').find('.unpublish-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.unpublish-model').append('<input name="id" type="hidden" value="'+ id +'">');
});

$(document).on("click", ".approve", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".approve-model").attr("action",url);
  $('body').find('.approve-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.approve-model').append('<input name="id" type="hidden" value="'+ id +'">');
});


$(document).on("click", ".disapprove", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".disapprove-model").attr("action",url);
  $('body').find('.disapprove-model').append('<input name="_token" type="hidden" value="'+ token +'">');
  $('body').find('.disapprove-model').append('<input name="id" type="hidden" value="'+ id +'">');
});


$(document).on("click", "#removeall", function () {
  var id = $(this).attr('data-id');
  var url = $(this).attr('data-url');
  var token = $(this).attr('data-token');

  $(".remove-all-model").attr("action",url);
  $('body').find('.remove-all-model').append('<input name="_token" type="hidden" value="'+ token +'">');


  var clipartcheck = document.getElementsByClassName('clipart-check');

  for (let index = 0; index < clipartcheck.length; index++)
  {
    if(clipartcheck[index].checked)
    {
      cliparts.push(clipartcheck[index].id);
    }
  }
  document.getElementById("clipartlist").value = JSON.stringify(cliparts);

  $('body').find('.remove-all-model').append('<input name="ids" type="hidden" value="'+ cliparts +'">');
/*
  var url = $(this).attr('data-url');
  $(".remove-all-model").attr("action",url);
  var clipartcheck = document.getElementsByClassName('clipart-check');

  for (let index = 0; index < clipartcheck.length; index++)
  {
    if(clipartcheck[index].checked)
    {
      cliparts.push(clipartcheck[index].id);
    }
  }
  document.getElementById("clipartlist").value = JSON.stringify(cliparts);*/

});


function editfromadmin(url)
{
  //window.location.href= window.location.origin+'/designstudio/a/'+ url;
  var a = document.createElement('a');
  a.target="_blank";
  a.href=window.location.origin+'/designstudio/a/'+ url;
  a.click();
}

function editfromadmintemplate(url)
{
  //window.location.href= window.location.origin+'/designstudio/a/'+ url;
  var a = document.createElement('a');
  a.target="_blank";
  a.href=window.location.origin+'/designstudio/at/'+ url;
  a.click();
}

function  filtertemplatescategory() {
  var category = $('#category_filter').val();
  if(category != '0')
  {
    window.location = window.location.origin + "/admin/templates?category=" + category;
  }
  else
  {
    window.location = window.location.origin + "/admin/templates";
  }

}

function  filtertemplatessubcategory() {
  var subcategory = $('#subcategory_filter').val();
 if(subcategory != 0 )
  {
    window.location = window.location.origin + "/admin/templates?subcategory=" + subcategory;
  }
  else
  {
    window.location = window.location.origin + "/admin/templates";
  }

}

function  filtertemplatesauthor() {
  var author = $('#author_filter').val();
  if(author != 0 )
  {
    window.location = window.location.origin + "/admin/templates?author=" + author;
  }
  else
  {
    window.location = window.location.origin + "/admin/templates";
  }

}

function setproductbackground(product_id, background){
  document.getElementById('user_to').value = product_id;
  document.getElementById('background').value = background;
  
}

