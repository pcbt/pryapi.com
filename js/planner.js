$(function() { //shorthand document.ready function
    $('#planner-form').on('submit', function(e) { //use on if jQuery 1.7+
        e.preventDefault();  //prevent form from submitting
        var data = $("#planner-form :input").serializeArray();
        console.log(data); //use the console for debugging, F12 in Chrome, not alerts
        alert("Mesajiniz Alinmistir.")
    });
});
