# 🎵 Scopri la canzone - Esperimento JavaScript

Questo è il mio primo esperimento JavaScript basato sull'esercizio **JavaScript Drum Kit** della serie [JavaScript30](https://javascript30.com/) di Wes Bos.  
L'ho personalizzato per includere nomi di band, uno stile visivo con Bootstrap e un titolo dinamico che cambia quando si riproduce una canzone.

## 🚀 Cosa fa?

- Premendo un tasto da **A** a **L** o cliccando su uno dei pulsanti, viene riprodotta una canzone.
- Il nome dell'artista viene mostrato nel titolo.
- Se una canzone è già in riproduzione, viene fermata e azzerata.
- È un mini gioco musicale per riconoscere la canzone in ascolto!

## 🎧 Artisti inclusi

- Aespa
- Arctic Monkeys
- Avril Lavigne
- Blink 182
- Bring Me The Horizon (BMTH)
- Guns N' Roses
- Illit
- Itzy
- Kiss

## 🧰 Tecnologie usate

- HTML5
- CSS (con Bootstrap 5)
- JavaScript Vanilla
- Git & GitHub

## 📁 Struttura del progetto

drum-kit-personalizzato/
├── index.html
├── music-css/
│ └── style.css
├── music-script/
│ └── script.js


## 📦 Nota sui file audio

Per motivi di spazio e policy di GitHub, **i file `.mp3` non sono inclusi nel repository**.

Tuttavia, potete **modificare liberamente il codice** per aggiungere i vostri file audio preferiti, cambiando i percorsi nei tag `<audio>` in `index.html`.

Esempio:

```html
<audio data-key="65" src="music/mia-canzone.mp3"></audio>
