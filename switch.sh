#!/bin/bash
# switch.sh

PS3='Quel genérateur voulez-vous installer ? ( numéro ) '
options=("confinement" "couvre-feu")
select GENERATOR in "${options[@]}"
do
    break;
done

if [ -z "$GENERATOR" ]
then
    echo -e "Merci de choisir un générateur existant... Bye.."
    exit
fi

rm generate.html
rm generate.js
rm README.md

cp "generate_${GENERATOR}.html" "generate.html"
cp "generate_${GENERATOR}.js" "generate.js"
cp "README_${GENERATOR}.md" "README.md"

echo "Done."