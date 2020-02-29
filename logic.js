$(document).ready(function() {
    viewHoroscope();

    function viewHoroscope() {
        $.ajax({
            url: "./server/viewHoroscope.php",
            method: "GET",
            data: {
                myDate: $("#myDate").val()
            },
            success: function(run) {
                $("#myHoroscope").html(run);
                $('#myHoroscope').hide();
                $('#myHoroscope').fadeIn(2000);
            }
        })
    }

    addHoroscope = function() {
        $.ajax({
            url: "./server/addHoroscope.php",
            method: "POST",
            data: {
                myDate: $("#myDate").val()
            },
            success: function(run) {
                $("#myHoroscope").html(run);
                $('#addHoroscope').hide()
                $('#updateHoroscope').show()
                $('#deleteHoroscope').show()
                viewHoroscope();
            }
        })
    }

    deleteHoroscope = function() {
        $.ajax({
            url: "./server/deleteHoroscope.php",
            method: "DELETE",

            success: function(run) {
                $("#myHoroscope").html(run);
                viewHoroscope();
            }
        })
    }

    updateHoroscope = function() {
        $.ajax({
            url: "./server/updateHoroscope.php",
            method: "PUT",
            data: {
                myDate: $("#myDate").val()
            },
            success: function(run) {
                $("#myHoroscope").html(run);
                viewHoroscope();
            }
        })
    }
})