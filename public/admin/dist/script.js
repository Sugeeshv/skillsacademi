// // console.log("Load script.js");

const { find } = require("lodash");

// // Instantiating the global app object
// window.onload=function(){
// var app = {};
// if (!('boxShadow' in document.body.style)) {
//     document.body.setAttribute('class', 'noBoxShadow');
// }

// document.body.addEventListener("click", function(e) {
//     var target = e.target;
//     if (target.tagName === "INPUT" &&
//         target.getAttribute('class').indexOf('liga') === -1) {
//         target.select();
//     }
// });

// (function() {
//     var fontSize = document.getElementById('fontSize'),
//         testDrive = document.getElementById('testDrive'),
//         testText = document.getElementById('testText');
//     function updateTest() {
//         testDrive.innerHTML = testText.value || String.fromCharCode(160);
//         if (window.icomoonLiga) {
//             window.icomoonLiga(testDrive);
//         }
//     }
//     function updateSize() {
//         testDrive.style.fontSize = fontSize.value + 'px';
//     }
//     fontSize.addEventListener('change', updateSize, false);
//     testText.addEventListener('input', updateTest, false);
//     testText.addEventListener('change', updateTest, false);
//     updateSize();
// }());

// }
$(document).ready(function(){
    $(".ibtn").click(function(){
        var target =  $('#target').val();
        alert(target);
        // $("#dom_element").text(value);
        // var check = $(".ibtn").attr("checked", "checked");
        // var check = $(".ibtn").attr("checked", "checked");
        if ($(this).prop('checked')) {
            $('#input').attr('value',target);
        }
        else {
            alert("You have elected to turn off checkout history."); //not checked
        }
    });
});