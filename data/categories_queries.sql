update operations set type = 'COURSES' WHERE libelle like '%CARREFOUR%' ;
update operations set type = 'COURSES' WHERE libelle like '%CARREFMARKET%' ;
update operations set type = 'COURSES' WHERE libelle like '%MARKET RENNES%' ;
update operations set type = 'COURSES' WHERE libelle like '%SUPER U%'; 
update operations set type = 'COURSES' WHERE libelle like '%U EXPRESS%'; 
update operations set type = 'COURSES' WHERE libelle like '%LECLERC%' ;
update operations set type = 'COURSES' WHERE libelle like '%LIDL%' ;
update operations set type = 'COURSES' WHERE libelle like '%INTERMARCHE%' ;
update operations set type = 'COURSES' WHERE libelle like '%PICARD SURGELES%' ;
update operations set type = 'COURSES' WHERE libelle like '%BIOCOO%' ;
update operations set type = 'COURSES' WHERE libelle like '%NOZ%' ;
update operations set type = 'COURSES' WHERE libelle like '%BELASIE%' ;
update operations set type = 'COURSES' WHERE libelle like '%OLIVIERS & CO%' ;

update operations set type = 'EATY' WHERE libelle like '%EATY%' ;
update operations set type = 'RESTAU' WHERE libelle like '%VILLA MODENA%'; 
update operations set type = 'RESTAU' WHERE libelle like '%LE LOFT BY VILL%'; 
update operations set type = 'RESTAU' WHERE libelle like '%ALGORYTHME%';
update operations set type = 'RESTAU' WHERE libelle like '%CINQUECENTO%'; 
update operations set type = 'RESTAU' WHERE libelle like '%TABLE LIBANAISE%'; 
update operations set type = 'RESTAU' WHERE libelle like '%LUCKY STAR%'; 
update operations set type = 'RESTAU' WHERE libelle like '%LE PETIT HANOI%'; 
update operations set type = 'RESTAU' WHERE libelle like '%CAFE CORTINA%'; 
update operations set type = 'RESTAU' WHERE libelle like '%ANGELLO%'; 
update operations set type = 'RESTAU' WHERE libelle like '%CAFE POP%';
update operations set type = 'RESTAU' WHERE libelle like '%PIMPRENELLE%';
update operations set type = 'RESTAU' WHERE libelle like '%LOCO LOCA%';
update operations set type = 'RESTAU' WHERE libelle like '%CEDAR%OLLS%'; 
update operations set type = 'RESTAU' WHERE libelle like '%GRANDS GAMINS%';
update operations set type = 'RESTAU' WHERE libelle like '%YAK RENNES%';
update operations set type = 'RESTAU' WHERE libelle like '%CREPERIE%';

update operations set type = 'RESTAU' WHERE libelle like '%SYNTHI%'; 
update operations set type = 'RESTAU' WHERE libelle like '%PIZZA%'; 
update operations set type = 'RESTAU' WHERE libelle like '%ATELIER ARTISTE%'; 
update operations set type = 'RESTAU' WHERE libelle like '%BARANTIC%'; 
update operations set type = 'RESTAU' WHERE libelle like '%MAC DO%'; 
update operations set type = 'RESTAU' WHERE libelle like '%MC DONALD%'; 
update operations set type = 'RESTAU' WHERE libelle like '%QUICK SAINT GREG%'; 
update operations set type = 'RESTAU' WHERE libelle like '%QUICK CESSO%'; 
update operations set type = 'RESTAU' WHERE libelle like '%QUICK RENNES%'; 
update operations set type = 'RESTAU' WHERE libelle like '%LE SABLIER%'; 
update operations set type = 'RESTAU' WHERE libelle like '%BATEAU IVRE%'; 
update operations set type = 'RESTAU' WHERE libelle like '%LE HIBOU%'; 
update operations set type = 'RESTAU' WHERE libelle like '%COUR DES MIRACLE%'; 
update operations set type = 'RESTAU' WHERE libelle like '%GAZOLINE%'; 
update operations set type = 'RESTAU' WHERE libelle like '%LA PETITE PAUSE%'; 
update operations set type = 'RESTAU' WHERE libelle like '%CASIER A BOU%'; 
update operations set type = 'RESTAU' WHERE libelle like '%LECOQ%'; 
update operations set type = 'RESTAU' WHERE libelle like '%LA QUINCAILLERIE%'; 
update operations set type = 'RESTAU' WHERE libelle like '%BERNIQUE HURLAN%'; 
update operations set type = 'RESTAU' WHERE libelle like '%LE CAFE DU PORT%'; 
update operations set type = 'RESTAU' WHERE libelle like '%KHALIFA%';
update operations set type = 'RESTAU' WHERE libelle like '%SCARABEE BIOCOOP%';
update operations set type = 'RESTAU' WHERE libelle like '%SCARABEE BIOCCOP%';
update operations set type = 'RESTAU' WHERE libelle like '%COTE GRILL%'; 
update operations set type = 'RESTAU' WHERE libelle like '%ESQUINADE%';
update operations set type = 'RESTAU' WHERE libelle like '%HUBLAIS%';
update operations set type = 'RESTAU' WHERE libelle like '%PONTE VECCHIO%';
update operations set type = 'RESTAU' WHERE libelle like '%NOTA BENE%';
update operations set type = 'RESTAU' WHERE libelle like '%BOUCHERIE%';
update operations set type = 'RESTAU' WHERE libelle like '%LES BROCANTEURS%';
update operations set type = 'RESTAU' WHERE libelle like '%CAFE BRETON%';
update operations set type = 'RESTAU' WHERE libelle like '%TY ANNA%';
update operations set type = 'RESTAU' WHERE libelle like '%LE CESSONNAIS%';
update operations set type = 'RESTAU' WHERE libelle like '%NABUCHODONOSOR%';
update operations set type = 'RESTAU' WHERE libelle like '%SAIGONNAISE%';
update operations set type = 'RESTAU' WHERE libelle like '%DA LUISA%';
update operations set type = 'RESTAU' WHERE libelle like '%FERN DISTRIB%';
update operations set type = 'RESTAU' WHERE libelle like '%WOK RESTAU%';
update operations set type = 'RESTAU' WHERE libelle like '%PETITE NATURE%';
update operations set type = 'RESTAU' WHERE libelle like '%BUTECO%';
update operations set type = 'RESTAU' WHERE libelle like '%EURL FUJI%';
update operations set type = 'RESTAU' WHERE libelle like '%SCARAMOUCHE%';
update operations set type = 'RESTAU' WHERE libelle like '%COT& BOEUF%';
update operations set type = 'RESTAU' WHERE libelle like '%CONVIVIA%';
update operations set type = 'RESTAU' WHERE libelle like '%OAN S PUB%';
update operations set type = 'RESTAU' WHERE libelle like '%EKINAT%';


update operations set type = 'POCHE' WHERE libelle like '%RET DAB%'; 



update operations set type = 'SALAIRE' WHERE libelle like '%UBIFLOW%'; 
update operations set type = 'SALAIRE' WHERE libelle like '%ALYOTECH%'; 
update operations set type = 'SALAIRE' WHERE libelle like '%ALOTECH%'; 
update operations set type = 'SALAIRE' WHERE libelle like '%EPITECH%' and credit+0 > 2500; 
update operations set type = 'FRAIS EPITECH' WHERE libelle like '%EPITECH%' and credit+0 < 2500; 
update operations set type = 'SALAIRE' WHERE libelle like '%VIR POLE EMPLOI%'; 
update operations set type = 'SALAIRE' WHERE libelle like '%REM 1 CHQ BORNE RENNES SUD%' and date_operation = '2011-03-14'; 



update operations set type = 'PRELEVEMENTS ENERGIE' WHERE libelle like '%PRLV EDF%'; 
update operations set type = 'PRELEVEMENTS ENERGIE' WHERE libelle like '%PRLV GDF%'; 
update operations set type = 'PRELEVEMENTS ENERGIE' WHERE libelle like '%ELECTRICITE DE FRANCE%'; 
update operations set type = 'PRELEVEMENTS ENERGIE' WHERE libelle like '%GAZ DE FRANCE%'; 
update operations set type = 'PRELEVEMENTS ENERGIE' WHERE libelle like '%PRLV ENGIE%'; 
update operations set type = 'PRELEVEMENTS ENERGIE' WHERE libelle like '%PRLV ELECTRICITE DE FR%'; 
update operations set type = 'PRELEVEMENTS EAU' WHERE libelle like '%VEOLIA%'; 
update operations set type = 'PRELEVEMENTS EAU' WHERE libelle like '%EAU DU BASSIN%'; 
update operations set type = 'PRELEVEMENTS TEL' WHERE libelle like '%BOUTIQUE ORANGE%'; 
update operations set type = 'PRELEVEMENTS TEL' WHERE libelle like '%VIRGIN MOBILE%'; 
update operations set type = 'PRELEVEMENTS TEL' WHERE libelle like '%PRLV Orange%'; 
update operations set type = 'PRELEVEMENTS TEL' WHERE libelle like '%Orange%'; 
update operations set type = 'PRELEVEMENTS TEL' WHERE libelle like '%TELECOM%'; 

update operations set type = 'PRELEVEMENTS TEL' WHERE libelle like '%PRLV%INTERNET%'; 
update operations set type = 'PRELEVEMENTS TEL' WHERE libelle like '%FRANCE%TELECOM%'; 
update operations set type = 'PRELEVEMENTS ASSURANCES' WHERE libelle like '%SURAVENIR%'; 
update operations set type = 'PRELEVEMENTS ASSURANCES' WHERE libelle like '%MACIF%'; 
update operations set type = 'PRELEVEMENTS ASSURANCES' WHERE libelle like '%PRLV ASP%'; 

update operations set type = 'PRELEVEMENTS IMPOTS' WHERE libelle like '%DIRECTION GENERALE%';
update operations set type = 'PRELEVEMENTS IMPOTS' WHERE libelle like '%DRFIP%';
update operations set type = 'PRELEVEMENTS IMPOTS' WHERE libelle like '%TRESOR PUBLIC%';
update operations set type = 'PRELEVEMENTS IMPOTS' WHERE libelle like '%TIP IMPOT%';


update operations set type = 'PRELEVEMENTS PRETS' WHERE libelle like '%ECH PRET%'; 
update operations set type = 'PRELEVEMENTS PRETS' WHERE libelle like '%APRIL SANTE%'; 
update operations set type = 'PRELEVEMENTS PRETS' WHERE libelle like '%APRIL ASSURANCES%'; 
update operations set type = 'PRELEVEMENTS FRAIS' WHERE libelle like '%COTISATION EUROCOMPTE%'; 

update operations set type = 'ECONOMIES ASSURANCE VIE' WHERE libelle like '%VIR LEMAIRE AURELIEN%'; 
update operations set type = 'ECONOMIES' WHERE libelle like '%VIR%LIVRET%'; 
update operations set type = 'ECONOMIES' WHERE libelle like '%VIR%COMPTE%EPARGNE%'; 
update operations set type = 'ECONOMIES' WHERE libelle like '%VIR%PLAN%EPARGNE%'; 

update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%TOTAL RENNES%';

update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%REL.TOTAL%';
update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%REL.%LECLE%';
update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%REL.ELF%';
update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%CITROEN BETTON%';
update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%COFIROUTE%';
update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%AUTOROUTE%';
update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%SPEEDY%';
update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%PEUGEOT%';
update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%NORAUTO%';
update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%CITEDIA%';
update operations set type = 'TRANSPORTS VOITURE' WHERE libelle like '%AMENDE RADAR%';
update operations set type = 'TRANSPORTS TRAIN' WHERE libelle like '%SNCF%';
update operations set type = 'TRANSPORTS' WHERE libelle like '%KEOLIS%';
update operations set type = 'TRANSPORTS' WHERE libelle like '%VELO STAR%';
update operations set type = 'TRANSPORTS' WHERE libelle like '%RATP%';

update operations set type = 'TRANSPORTS VOITURE' WHERE `type` = '' and libelle like '%DAC%';



update operations set type = 'VACANCES' WHERE libelle like '%AIR FRANCE%';
update operations set type = 'VACANCES' WHERE libelle like '%VUELING%';
update operations set type = 'VACANCES' WHERE libelle like '%Europcar%';
update operations set type = 'VACANCES' WHERE libelle like '%AEROPOR%';
update operations set type = 'VACANCES' WHERE libelle like '%COMM PAIEMENT%';
update operations set type = 'VACANCES' WHERE libelle like '%VIR%CHIMBAULT%';
update operations set type = 'VACANCES' WHERE libelle like '%VIR%MARTINETTI%';
update operations set type = 'VACANCES' WHERE libelle like '%CAMPING%';


update operations set type = 'ACHATS CIGARETTES' WHERE libelle like '%OZONE%'; 
update operations set type = 'ACHATS JARDIN' WHERE libelle like '%MAG VERT%'; 
update operations set type = 'ACHATS JARDIN' WHERE libelle like '%JARDILAND%'; 
update operations set type = 'ACHATS JARDIN' WHERE libelle like '%JARDINOT%'; 

update operations set type = 'ACHATS ENTRETIEN COURANT' WHERE libelle like '%AMARY%' ;
update operations set type = 'ACHATS CULTURE' WHERE libelle like '%CRITIC%' ;
update operations set type = 'ACHATS CULTURE' WHERE libelle like '%FORUM DU LIVRE%' ;
update operations set type = 'ACHATS CULTURE' WHERE libelle like '%ARIANE LIBRAIRIE%' ;
update operations set type = 'ACHATS APPART' WHERE libelle like '%LEROY MERLIN%' ;
update operations set type = 'ACHATS APPART' WHERE libelle like '%IKEA%' ;
update operations set type = 'ACHATS APPART' WHERE libelle like '%KAVE HOME%' ;
update operations set type = 'ACHATS APPART' WHERE libelle like '%NATURE%DEC%' ;
update operations set type = 'ACHATS SPORT' WHERE libelle like '%DECATHLON%' ;
update operations set type = 'ACHATS SPORT' WHERE libelle like '%INTERSPORT%' ;
update operations set type = 'ACHATS SPORT' WHERE libelle like '%ALINEA%' ;

update operations set type = 'ACHATS VETEMENTS' WHERE libelle like '%UNIQLO%' ;
update operations set type = 'ACHATS VETEMENTS' WHERE libelle like '%SPRINGFIELD%' ;

update operations set type = 'ACHATS VETEMENTS' WHERE libelle like '%CELIO%' ;
update operations set type = 'ACHATS VETEMENTS' WHERE libelle like '%ARMAND THIER%' ;
update operations set type = 'ACHATS VETEMENTS' WHERE libelle like '%LAFAYETTE%' ;
update operations set type = 'ACHATS VETEMENTS' WHERE libelle like '%C ET A%' ;
update operations set type = 'ACHATS VETEMENTS' WHERE libelle like '%DEVRED%' ;
update operations set type = 'ACHATS VETEMENTS' WHERE libelle like '%HETM%' ;
update operations set type = 'ACHATS INTERNET' WHERE libelle like '%MEETIC%' ;
update operations set type = 'ACHATS TECHNO' WHERE libelle like '%BOULANGER%' ;
update operations set type = 'ACHATS TECHNO' WHERE libelle like '%SATURN%' ;
update operations set type = 'ACHATS TECHNO' WHERE libelle like '%DARTY%' ;
update operations set type = 'ACHATS TECHNO' WHERE libelle like '%FNAC%' ;
update operations set type = 'ACHATS' WHERE libelle like '%AMAZON%' ;
update operations set type = 'ACHATS' WHERE libelle like '%ARTISANS MONDE%' ;

update operations set type = 'ACHATS SANTE' WHERE libelle like '%pha%' ;
update operations set type = 'ACHATS SANTE' WHERE libelle like '%UNIMUTUELLES%' ;
update operations set type = 'ACHATS SANTE' WHERE libelle like '%C.P.A.M.%' ;
update operations set type = 'ACHATS SANTE' WHERE libelle like '%PISCINE%' ;
update operations set type = 'ACHATS SANTE' WHERE libelle like '%SIACI SAINT HONORE%' ;
update operations set type = 'ACHATS SANTE' WHERE libelle like '%DR KHECHEN%' ;


update operations set type = 'CHEQUE' WHERE libelle like '%CHQ%' ;


