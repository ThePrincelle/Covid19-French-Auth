window.addEventListener("DOMContentLoaded", (event) => {
  var data = window.location.hash.substr(1);
  if (!data) {
    // Stay compatible with previous version search param
    data = window.location.search;
  }
  console.log(data);
  const urlParams = new URLSearchParams(data);

  document.getElementById("field-firstname").value = urlParams.get("f"); //firstname
  document.getElementById("field-lastname").value = urlParams.get("l"); //lastname
  document.getElementById("field-birthday").value = urlParams.get("b"); //birthday
  document.getElementById("field-placeofbirth").value = urlParams.get("p"); //place of born
  document.getElementById("field-address").value = urlParams.get("a"); //address
  document.getElementById("field-city").value = urlParams.get("c"); //city
  document.getElementById("field-zipcode").value = urlParams.get("z"); //zipcode
  const reason = urlParams.get("r"); //reason

  // Reasons
  document.getElementById("checkbox-travail").checked =
    reason === "travail" || reason == "examen";

  document.getElementById("checkbox-sante").checked = reason === "sante";

  document.getElementById("checkbox-famille").checked =
    reason === "famille" || reason === "enfants";

  document.getElementById("checkbox-handicap").checked = reason === "handicap";

  document.getElementById("checkbox-judiciaire").checked =
    reason === "convocation" || reason == "judiciaire";

  document.getElementById("checkbox-missions").checked = reason === "missions";

  document.getElementById("checkbox-transit").checked =
    reason === "transits" || reason === "transit";

  document.getElementById("checkbox-animaux").checked = reason === "animaux";

  document.getElementById("checkbox-courses").checked = rreason == "courses";

  document.getElementById("checkbox-sport").checked = reason === "sport";

  document.getElementById("checkbox-rassemblement").checked =
    reason === "rassemblement";

  document.getElementById("checkbox-demarche").checked = reason === "demarche";
  /////

  document.getElementById("field-storedata").checked = true;

  var now = new Date();
  document.getElementById("field-datesortie").value = now.toJSON().slice(0, 10);
  document.getElementById("field-heuresortie").value =
    ("0" + now.getHours()).slice(-2) + ":" + ("0" + now.getMinutes()).slice(-2);

  document.getElementById("generate-btn").click();
});
