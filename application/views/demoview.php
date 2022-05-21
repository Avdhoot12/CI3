<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Ajax</title>
</head>

<body>
    <input type="text" id="id" name="id" placeholder="Enter Name">
</body>

<script>
    $(document).ready(function() {
        $("#id").click(function() {

            var id = $('#id').val();

            $.ajax({
                url: "<?php echo base_url(); ?>formcontroller/otp",
                method: "POST",
                data: {
                    id: id
                },
                error: function() {
                    alert("Error");
                },
                success: function(data) {
                    alert(data);
                }
            });
        });
    });
</script>

</html>