<!DOCTYPE html>
<html>

<body>
    <head>
        <link rel= "stylesheet" href="style.css">
    </head>

    <header>
        <h1>PacDimension</h1>
    </header>

    <nav class="navbar">
        <a href="register.php">
          <span class="highlighted-text">Login</span>
        </a>
    </nav>

</body>

<body>
    <div id="unity-container" style="width: 960px; height: 600px;"></div>
    <script>
        // Load the Unity game
        var buildUrl = '\games\games\Build'; // Path to the WebGL build folder
        var container = document.querySelector("#unity-container");

        // Load UnityLoader.js and configure it
        var script = document.createElement("script");
        script.src = buildUrl + "/UnityLoader.js";
        script.onload = function () {
            UnityLoader.instantiate(container, buildUrl + "/MyUnityGame.json");
        };
        document.body.appendChild(script);
    </script>
</body>


</html>