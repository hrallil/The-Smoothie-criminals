<?php
function getDrinkByID(int id){
    consol.send.string.sql("select * from drinkTable WHERE drinkID=" + id);
}

function getDrinkimageByID(int id){
    consol.send.string.sql("select drinkimage from drinkTable WHERE drinkID=" + id);
}

?>