<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body> 
        <div class="grid text-center">
            <div>
                <h1>
                    Taste Menu
                </h1>
            </div>
            <!--home button-->
            <div>
                <a class="btn btn-primary" href="Home.php" role="button">Home</a>
            </div>

            <!--Sliders-->
            <div>    
                <div class="slidecontainer">
                    <h3>Sourness</h3>
                    <input type="range" min="1" max="100" value="50" class="slider" id="sourSlider">
                </div>
                <div class="slidecontainer">
                    <h3>sweetness</h3>
                    <input type="range" min="1" max="100" value="50" class="slider" id="sweetSlider">
                </div>
                <div class="slidecontainer">
                    <h3>Bitterness</h3>
                    <input type="range" min="1" max="100" value="50" class="slider" id="bitterSlider">
                </div>
                <div class="slidecontainer">
                    <h3>alcohol</h3>
                    <input type="range" min="1" max="100" value="50" class="slider" id="alcoholSlider">
                </div>
            </div>

            <!--Order button, sends querie to SQL-->
            <a class="btn btn-primary" href="bestil.php?s=slidercontainer.sourSlider &b= &sw= &a= &" role="button">Bestil (leads to home at the moment)</a>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>