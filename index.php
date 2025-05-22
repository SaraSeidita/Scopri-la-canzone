<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Esperimento 1 - da sola</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="music-css/style.css">
    
</head>

<body>
    <!-- tasti della tastiera -->

    <div class="title">
        <h1 class="title">Scopri la canzone</h1>
    </div>

    <div class="container py-5 center">
        <div class="row justify-content-center">
            <div data-key="65" class="col-3 col-sm-2 col-md-1 m-2 key">
                <kbd>A</kbd><span class="music">Aespa</span>
            </div>
            <div data-key="83" class="col-3 col-sm-2 col-md-1 m-2 key">
                <kbd>S</kbd><span class="music">Arctic Monkeys</span>
            </div>
            <div data-key="68" class="col-3 col-sm-2 col-md-1 m-2 key">
                <kbd>D</kbd><span class="music">Avril Lavigne</span>
            </div>
            <div data-key="70" class="col-3 col-sm-2 col-md-1 m-2 key">
                <kbd>F</kbd><span class="music">Blink 182</span>
            </div>
            <div data-key="71" class="col-3 col-sm-2 col-md-1 m-2 key">
                <kbd>G</kbd><span class="music">BMTH</span>
            </div>
            <div data-key="72" class="col-3 col-sm-2 col-md-1 m-2 key">
                <kbd>H</kbd><span class="music">Guns N Roses</span>
            </div>
            <div data-key="74" class="col-3 col-sm-2 col-md-1 m-2 key">
                <kbd>J</kbd><span class="music">Illit</span>
            </div>
            <div data-key="75" class="col-3 col-sm-2 col-md-1 m-2 key">
                <kbd>K</kbd><span class="music">Itzy</span>
            </div>
            <div data-key="76" class="col-3 col-sm-2 col-md-1 m-2 key">
                <kbd>L</kbd><span class="music">Kiss</span>
            </div>
        </div>
    </div>

    <!-- audio -->
    <audio data-key="65" src="music/aespa.mp3"></audio>
    <audio data-key="83" src="music/am.mp3"></audio>
    <audio data-key="68" src="music/avril.mp3"></audio>
    <audio data-key="70" src="music/blink182.mp3"></audio>
    <audio data-key="71" src="music/bmth.mp3"></audio>
    <audio data-key="72" src="music/guns.mp3"></audio>
    <audio data-key="74" src="music/illit.mp3"></audio>
    <audio data-key="75" src="music/itzy.mp3"></audio>
    <audio data-key="76" src="music/kiss.mp3"></audio>


    <script src="music-script/script.js"></script>

</body>
</html>
