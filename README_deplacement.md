# Covid19-French-Auth

Mode Deployed : "deplacement"

![Build Status](https://jenkins.princelle.org/buildStatus/icon?job=Attestation-Covid&style=flat-square)

Forked from [GetLuko/Covid19-French-Auth](https://github.com/GetLuko/Covid19-French-Auth)

By respect to our medical staff, please respect the social distancing, the governement rules and the barrier gestures.⚠️

The goal of this project is to be able to generate the "ATTESTATION DE DÉPLACEMENT DÉROGATOIRE" from the French Government.  
See https://media.interieur.gouv.fr/attestation-couvre-feu-covid-19/

This is a pure Vanilla JS implementation. No need to compile anything. Run out-of-the-box.

If the generator isn't up to date anymore with the official one, please notify me so that I can update it.

Here's my contact info : https://contact.princelle.org

I've build an [iOS shorcut](https://www.icloud.com/shortcuts/2c16817138874314829828f81f01358b) that uses this generator to get an attestation in a second.

## Privacy

No data are sent to the server. Everything is run locally on your browser.

A hosted version is available at : attestation-covid.princelle.org

The hosted version currently is for the "couvre-feu" attestation.
If you want the other mode : "confinement", replace "generate.html" in the URL by "generate_confinement.html".

The hosted version only counts the number of users and "attestations" generated, in order to manage the traffic.

If you're worried about privacy, checkout the "[installation](#installation)" chapter.

## Usage

Specify the parameters directly in the URL :

```
http://<server>/generate.html#f=<firstname>&l=<lastname>&b=<birthdate>&p=<birthplace>&a=<address>&c=<city>&z=<zipcode>&r=<reason>
```

If you want the other mode : "confinement", replace "generate.html" in the URL by "generate_confinement.html".

Every parameter should be encoded in URL format. Check [urlencoder.org](https://www.urlencoder.org/).

'Reason' options are:

- 'examen'
- 'travail'
- 'sante'
- 'famille'
- 'handicap'
- 'animaux'
- 'convocation'
- 'judiciaire'
- 'missions'
- 'transits'
- 'transit'
- 'animaux'

Additional reasons only applicable from 6 a.m. to 6 p.m. in territories subject to containment on weekends:

- 'courses'
- 'sport'
- 'rassemblement'
- 'demarche'

## How does it works ?

The file : generate.html is in charge of generate the PDF

From the url hanchor parameter, it retrieves the profil (firstname, lastname, etc...).

Then, this profil is injected in a hidden form that is similar to the one on Official Website.

Then, the official `certificate.js` script from the official website is called to compile the PDF using the data store on the hidden form.

## Installation

- copy the folder from this repo
- go to root project folder
- host locally the folder :
  - Python : `python -m SimpleHTTPServer`
  - Node : `npm install http-server -g` then `http-server`
- use generate.html (+ your personal data) to generate your attestation

## Credit

- Official website code source : used for `certificate.js` : https://github.com/LAB-MI/deplacement-covid-19
- Inspired by :
  - https://twitter.com/Kamidh/status/1247570275442601984
  - https://www.igen.fr/ios/2020/04/un-raccourci-pour-generer-lattestation-de-deplacement-derogatoire-numerique-114133
