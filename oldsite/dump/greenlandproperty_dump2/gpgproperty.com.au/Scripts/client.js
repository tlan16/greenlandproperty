var map;
var geocoder;
 function initialize() {
     geocoder = new google.maps.Geocoder();

     var myLatlng = new google.maps.LatLng(-37.847383, 144.979847);

     var myOptions = {
         center: new google.maps.LatLng(-37.847383, 144.979847),
         zoom: 16,
         overviewMapControl: true,
         mapTypeId: google.maps.MapTypeId.ROADMAP
     };
     map = new google.maps.Map(document.getElementById("map"),
        myOptions);
     //var marker = new google.maps.Marker({
     //    position: myLatlng,
     //    title: "Cafe Ella 555 st killda road melbourne vic 3004 "
     //});
     //marker.setMap(map);
     codeAddress();
 }

 //function codeAddress() {
 //    var address = "52 Station st Burwood Vic 3125 Australia";
 //    geocoder.geocode({ 'address': address }, function (results, status) {
 //        if (status == google.maps.GeocoderStatus.OK) {
 //            map.setCenter(results[0].geometry.location);
 //            console.log(results[0].geometry.location);
 //            var marker = new google.maps.Marker({
 //                map: map,
 //                position: results[0].geometry.location
 //            });
 //        } else {
 //            alert('Geocode was not successful for the following reason: ' + status);
 //        }
 //    });
 //}
    
 $(document).ready(function () {
     //call the ellipse plugin
     $(".House-Brief").dotdotdot();
     $(".Suggest-Address").dotdotdot();
     $("#SearchContentBox").focusout(function () {
         if ($(this).attr("value") == "") {
             $(this).attr("value", "Enter the key word");
         }
     });
     $("#PostCode-Search").focusout(function () {
         if ($(this).attr("value") == "")
         {
            $(this).attr("value", "Find By PostCode");
         }
     });
     $("#PostCode-Search,#SearchContentBox").click(function () {
        
        //$MySearchBox=$("#PostCode-Search");
         if ($(this).attr("value") == "Find By PostCode" || $(this).attr("value") == "Enter the key word")
         {
             $(this).attr("value", "");
         }
     });
     //configure navigation
     var Nav = $("#Small-Navigation");
     var Menu = $("#Menu-Block");
     Nav.click(function () {
         Menu.slideToggle(200);
     });
     $("#Menu-Block li").each(function () {
         $(this).children("a").click(function (event) {

             var Current = $(this);
             //event.preventDefault();
             console.log(Current.attr('href'));
            // $("#Content").load(Current.attr('href'));
             $(this).parent().parent().children().each(function () {
                 $(this).children("a").removeClass("Current");
             });
             Current.addClass("Current");
         });
     });


 });