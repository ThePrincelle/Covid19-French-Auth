#!/bin/bash
# switch.sh

PS3='Quel genérateur voulez-vous installer ? ( numéro ) '
options=("confinement" "couvre-feu" "deplacement")
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
rm README.md

cp "generate_${GENERATOR}.html" "generate.html"
cp "README_${GENERATOR}.md" "README.md"

echo "Done."