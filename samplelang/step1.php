<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>VERyWELL</title>
</head>
<body>
    <nav class="coffee-navbar">
        <div class="logo">VERyWELL Coffee</div>
        <ul class="nav-list">
            <li><a href="https://veronicaqwerty.github.io/veroresume/veronica/resume">Veronica</a></li>
            <li><a href="https://jimwelljan.github.io/Jim-Resume/Jimwell/">Jimwell</a></li>
        </ul>
    </nav>
    <div class="box-container">
        <a href="https://jimwelljan.github.io/Jim-Resume/Jimwell/" class="box-link">
            <div class="box">
                <img src="well.jpg" alt="Image 1">
            </div>
        </a>
        <a href="https://veronicaqwerty.github.io/veroresume/veronica/resume" class="box-link">
            <div class="box">
                <img src="vero.jpg" alt="Image 2">
            </div>
        </a>
    </div>
    <div id="popup" class="popup">
        <p>Do you want to open his resume?</p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const boxes = document.querySelectorAll(".box");
            const popup = document.getElementById("popup");

            boxes.forEach(box => {
                box.addEventListener("mouseenter", () => {
                    const boxRect = box.getBoundingClientRect();
                    popup.style.top = boxRect.top - popup.offsetHeight + "px";
                    popup.style.left = boxRect.left + "px";
                    popup.style.display = "block";
                });

                box.addEventListener("mouseleave", () => {
                    popup.style.display = "none";
                });
            });
        });
    </script>
</body>
</html>

<style type="text/css">
    html, body {
        margin: 0;
        font-family: 'Courier New', monospace;
        background-color: #7d5a43;
        color: #fff;
        background-image: url('ww.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: calc(100vh - 50px);
    }

    .coffee-navbar {
        background-color: #5a3d28;
        padding: 35px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.5);
    }

    .logo {
        font-size: 1.5em;
        font-weight: bold;
        color: #fff;
    }

    .nav-list {
        list-style: none;
        display: flex;
        margin: 0;
        padding: 0;
        justify-content: center;
    }

    .nav-list li {
        margin-right: 20px;
        font-size: 1.5em;
    }

    .nav-list a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        transition: color 0.3s ease, text-shadow 0.3s ease;
    }

    .nav-list a:hover {
        color: #e8cda3;
        text-shadow: 0 0 10px #e8cda3;
    }

    .box-container {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: 20px;
    }

    .box {
        width: 250px;
        height: 250px;
        overflow: hidden;
        border: 2px solid #fff;
        box-shadow: 0 10px 30px rgba(255, 255, 255, 0.7);
        transition: box-shadow 0.3s ease;
        margin-top: 200px;
    }

    .box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .box:hover {
        box-shadow: 0 15px 40px rgb(184, 92, 34);
    }

    .popup {
        display: none;
        position: fixed;
        padding: 20px;
        background-color: #5a3d28;
        color: #fff;
        border: 2px solid #fff;
        box-shadow: 0 10px 30px rgba(255, 255, 255, 0.7);
        z-index: 1000;
    }

    .popup p {
        margin: 0 0 10px;
    }
</style>
