// le BUT ICI est de pouvoir visualiser une BDD (à intégrer)
const articles = [
    {
        titre: "Mach airspeed indicator (INDICATEUR DE VITESSE)",
        description: "Anémomètre BOEING",
        marque: "Astro Instruments Service Corp",
        ref: "4057800-902",
        prix: "1 250 $",
        imageUrl: "../pictures/anemometer.jpg",
        altText: "anemometer"
    },
    {
        titre: "Battery aircraft (BATTERIE)",
        description: "Batterie CESSNA",
        marque: "Sabena technics",
        ref: "4057800-903",
        prix: "2 300 $",
        imageUrl: "../pictures/bat-3.jpg",
        altText: "bat"
    },
    {
        titre: "Embedded Gps Inertial (CENTRALE INERTIELLE)",
        description: "Calculateur GPS et de navigation inertielle amélioré",
        marque: "Honeywell Aerospace",
        ref: "4057800-904",
        prix: "600 000 $",
        imageUrl: "../pictures/calculateur_avio1.jpg",
        altText: "calculateur_avio1"
    }
];

// Fonction pour générer et dropper le HTML d'une carte d'article
function generateArticleCard(article) {
    return `
        <div class="c-a">
            <div class="contener-article">
                <img src="${article.imageUrl}" alt="${article.altText}">
                <div class="titleAndDescription">
                    <h4>${article.titre}</h4>
                    <p class="description">
                        ${article.description} <br>
                        Marque : ${article.marque} <br>
                        Ref : ${article.ref} <br>
                        Prix : ${article.prix}
                    </p>
                </div>
            </div>
        </div>
    `;
}

// Fonction pour afficher toutes les cartes d'articles
function displayArticles(articles) {
    const conteneur = document.querySelector('.conteneur'); // requête du Sélecteur '.conteneur'
    conteneur.innerHTML = articles.map(generateArticleCard).join('');
}

// Attendre que le DOM soit chargé avant d'afficher les articles
document.addEventListener('DOMContentLoaded', function() {
    displayArticles(articles);
});
