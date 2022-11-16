<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <link rel="stylesheet" type="text/css" href="datatables/dataTables.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- <title>Hello, world!</title> -->
</head>

<body>
  <!-- <h1>Hello, world!</h1> -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script src="datatables/jquery-3.5.1.min.js" type="text/javascript"></script>

  <script type="text/javascript" charset="utf8" src="datatables/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf8" src="datatables/dataTable.custom.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>





  <script>
    // $(document).ready(function() {
    //   // var  search = $('#search').val();
    //   // console.log(search);
    //   // alert("done");
    //   $.ajax({
    //     url: '{{url("show")}}',
    //     context: document.body,

    //     success: function(res) {

    //       var tbodytr = '';
    //       var reslength = res.length;
    //       // console.log(reslength);
    //       if (reslength > 0) {
    //         for (i = 0; i < reslength; i++) {

    //           tbodytr +=
    //             '<tr>\
    //                             <td>' + res[i]['name'] + '</td>\
    //                             <td>' + res[i]['email'] + '</td>\
    //                                                         </tr>';
    //         }
    //       } else {
    //         console.log("aaa");
    //       }
    //       $('#dd').html(tbodytr);

    //     }
    //   });




    //   $("#search").change(function() {

    //     var search = $("#search").val();
    //     console.log(search);
    //     var url="{{ url('searchdata',"+search+") }}";
    //     var request = $.ajax({
    //       url:url,
    //       type: "POST",
    //       data: search,
    //       dataType: "json",
    //       success: function(res) {

    //         // console.log(res);
    //         var tbodytr = '';
    //         var reslength = res.length;
    //         console.log(reslength);
    //         if (reslength > 0) {
    //           for (i = 0; i < reslength; i++) {

    //             tbodytr +=
    //               '<tr>\
    //                          <td>' + res[i]['name'] + '</td>\
    //                          <td>' + res[i]['email'] + '</td>\
    //                                                      </tr>';
    //           }
    //         } else {
    //           console.log("aaa");
    //         }
    //         $('#dd').html(tbodytr);

    //       }
    //     });

    //   });

    // });
  </script>
</body>

</html>