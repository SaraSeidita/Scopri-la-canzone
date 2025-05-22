
// Funzione per rimuovere l'animazione dopo la fine della transizione
function rimuoviTrasformazione(i) {
    if (i.propertyName !== 'transform') return;
    i.target.classList.remove('playing'); // rimuovi playing
}

// Funzione per fermare tutta la musica
function fermaLaMusica() {
    var tuttaMusica = document.querySelectorAll('audio');
    tuttaMusica.forEach(music => {
        music.pause();
        music.currentTime = 0;
    
    });

    var titoloPrincipale = document.querySelector('.title h1');
    titoloPrincipale.textContent = 'Scopri la canzone';


    var chiavi = document.querySelectorAll('.key');
    chiavi.forEach(key => key.classList.remove('playing'));
}

function parteLaMusica(keycode) {
    var musica = document.querySelector(`audio[data-key="${keycode}"]`);
    var chiave = document.querySelector(`div[data-key="${keycode}"]`);
    if (!musica || !chiave) return;

    // Toggle: se la musica è già in riproduzione, fermala
    if (!musica.paused) {
        musica.pause();
        musica.currentTime = 0;
        chiave.classList.remove('playing');
        return;
    }

    // ✅ Aggiorna il titolo principale con il nome della canzone
    var titoloPrincipale = document.querySelector('.title h1');
    var nomeCanzone = chiave.querySelector('.music')?.textContent || '';
    titoloPrincipale.textContent = `🎵 ${nomeCanzone} in riproduzione`;
    
    // Altrimenti, ferma tutte le musiche e avvia quella selezionata
    fermaLaMusica();
    chiave.classList.add('playing');
    musica.currentTime = 0;
    musica.volume = 1;
    musica.play();

    // ✅ Aggiorna il titolo principale con il nome della canzone
    var titoloPrincipale = document.querySelector('.title h1');
    var nomeCanzone = chiave.querySelector('.music')?.textContent || '';
    titoloPrincipale.textContent = `🎵 ${nomeCanzone} in riproduzione`;
}

// Funzione che si attiva alla pressione di un tasto
function avviaLaMusica(i) {
    var keycode = i.keyCode || i.which;
    parteLaMusica(keycode);
}

// Seleziona tutti i tasti e aggiungi gli eventi
var chiavi = Array.from(document.querySelectorAll('.key'));
chiavi.forEach(key => {
key.addEventListener('transitionend', rimuoviTrasformazione);
key.addEventListener('click', () => {
    var keyCode = key.getAttribute('data-key');
    parteLaMusica(keyCode);
});
});

// Aggiungi un listener per la pressione della tastiera
window.addEventListener('keydown', avviaLaMusica);
