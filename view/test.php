<?php 
var_dump($_POST);
?>
<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#submit").click(function() {
                var data = {
                    name: $("#name").val(),
                    email: $("#email").val()
                };

                $.ajax({
                    type: "POST",
                    url: "submit.php",
                    data: data,
                    success: function(response) {
                        alert(response);
                    }
                });
            });
        });
    </script>
</head>
<body>
    <input type="text" id="name" placeholder="Name">
    <input type="text" id="email" placeholder="Email">
    <button id="submit">Submit</button>
</body>
</html>