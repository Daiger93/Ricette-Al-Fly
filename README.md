# Ricette-Al-Fly
##Progetto di Reti di Calcolatori

###Gestione di un database di ricette.

**API esterne implementate:**
  - TwitterOauth con Oauth 1.0a per l'autenticazione degli utenti, in modo da collegare una ricetta inserita al proprio autore.
  - Google Cloud Messaging per la notifica asincrona agli utenti che lo desiderano, in modo da avvisare ogni qual volta una nuova ricetta viene aggiunta al database.

**Servizi implementati:**
  - Insert.php: Metodo POST per l'inserimento di una ricetta nel DB. Parametri: NomeTorta, Ingredienti, Tempo, Procedimento.
  - Select.php: Metodo GET per la selezione di un sottoinsieme di ricette eventualmente coincidente con l'insieme stesso. Parametri (Opzionali): NomeTorta, Creatore, Ingredienti.
  - Ricetta.php: Metodo GET per la selezione di una singola ricetta: Parametri: ID.

**Wrapping di Servizi implementati:**
  - Condividi.php: Metodo GET su 'statuses/update' di Twitter per la condivisione di una singola ricetta sul proprio profilo Twitter. Parametri: ID. 
  - Ultima.php: Metodo GET che cerca sul DB la ricetta con 'ID' massimo(ultima ricetta inserita) e inoltra una richiesta GET a 'ricetta.php' con parametro 'ID'(risultato della Query). Non ha parametri.
  - Broadcast.php: Metodo GET su 'https://gcm-http.googleapis.com/gcm/send' che inoltra una notifica a tutti gli utenti per segnarargli che una nuova ricetta è stata aggiunta. Non ha parametri.
