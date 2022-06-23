<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Alert</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css">
    <style>
        body {
            margin: 20px auto;
            font-family: 'Lato';
            font-weight: 300;
            width: 600px;
            text-align: center;
        }

        button {
            background: cornflowerblue;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            font-family: 'Lato';
            margin: 5px;
            text-transform: uppercase;
            cursor: pointer;
            outline: none;
        }

        button:hover {
            background: orange;
        }
    </style>
</head>

<body>
    <button class="first">First Alert</button>
    <button class="second">Second Alert</button>
    <button class="third">Third Alert</button>
    <button class="fourth">Fourth Alert</button>
    <script>
        document.querySelector(".first").addEventListener("click", function() {
            Swal.fire({
                title: "Show Two Buttons Inside the Alert",
                showCancelButton: true,
                confirmButtonText: "Confirm",
                confirmButtonColor: "#00ff99",
                cancelButtonColor: "#ff0099"
            });
        });

        document.querySelector(".second").addEventListener("click", function() {
            Swal.fire({
                title: "Are you sure about deleting this file?",
                type: "info",
                showCancelButton: true,
                confirmButtonText: "Delete It",
                confirmButtonColor: "#ff0055",
                cancelButtonColor: "#999999",
                reverseButtons: true,
                focusConfirm: false,
                focusCancel: true
            });
        });

        document.querySelector(".third").addEventListener("click", function() {
            Swal.fire({
                title: "Profile Picture",
                text: "Do you want to make the above image your profile picture?",
                imageUrl: "https://images3.imgbox.com/4f/e6/wOhuryw6_o.jpg",
                imageWidth: 550,
                imageHeight: 225,
                imageAlt: "Eagle Image",
                showCancelButton: true,
                confirmButtonText: "Yes",
                cancelButtonText: "No",
                confirmButtonColor: "#00ff55",
                cancelButtonColor: "#999999",
                reverseButtons: true,
            });
        });

        document.querySelector(".fourth").addEventListener("click", function() {
            Swal.fire({
                title: "Alert Set on Timer",
                text: "This alert will disappear after 3 seconds.",
                position: "bottom",
                backdrop: "linear-gradient(yellow, orange)",
                background: "white",
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                showConfirmButton: false,
                showCancelButton: false,
                timer: 3000
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>

</html>