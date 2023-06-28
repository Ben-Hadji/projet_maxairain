//initialisation de la variable pour pouvoir la stocker l'image
var capturedImage = null;

// Accéder à la caméra et afficher la vidéo sur l'élément <video>
navigator.mediaDevices.getUserMedia({ video: true })
  .then(function(stream) {
    var videoElement = document.getElementById('video');
    videoElement.srcObject = stream;
  })
  .catch(function(error) {
    console.error('Erreur lors de l\'accès à la caméra : ', error);
  });

// Gérer le clic sur le bouton "Prendre une photo"
document.getElementById('capture').addEventListener('click', function() {
  var videoElement = document.getElementById('video');
  var canvasElement = document.getElementById('canvas');
  var context = canvasElement.getContext('2d');

  // Dessiner la photo sur le canvas
  context.drawImage(videoElement, 0, 0, canvasElement.width, canvasElement.height);

  // Convertir l'image en objet Blob
  canvasElement.toBlob(function(blob) {
    // Créer une URL d'objet pour l'image capturée
    capturedImage = URL.createObjectURL(blob);
    console.log('Image capturée : ', capturedImage);
  }, 'image/png');
});



// Fonction pour envoyer l'image capturée vers le backend Symfony
function sendCapturedImageToSymfony(capturedImage) {
    // Créer un objet FormData pour envoyer les données de l'image
    var formData = new FormData();
    formData.append('image', capturedImage);
  
    // Envoyer la requête POST vers votre endpoint Symfony
    fetch('/login', {
      method: 'POST',
      body: formData
    })
    .then(function(response) {
      // Gérer la réponse du serveur ici
      console.log('Réponse du serveur : ', response);
    })
    .catch(function(error) {
      console.error('Erreur lors de l\'envoi de l\'image : ', error);
    });
  }