SELECT etage.nom AS etage_nom, salles.nom AS salles_nom , etage.id FROM salles INNER JOIN etage ON salles.id_etage = etage.id;