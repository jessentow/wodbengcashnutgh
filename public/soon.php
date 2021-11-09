<?php


?>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto:400,300');
body {margin: 0;padding: 0;}     /*CSS Reset*/
html {height: 100%;}
body {
    font-family: 'Roboto', sans-serif;     /*Default Font*/
    width: 100%;
    height: 100%;
    text-align: center;     /*Align Text to Center*/
    display: table;
    -webkit-animation: fadeinelement 3s;
    animation: fadeinelement 3s;
}
h1,h2,h3 {
    cursor: default;     /*When hover, default cursor displays*/
}
h2 {font-weight: 300;margin-bottom: 25px;}
img {
    width: 25%;     /*Define Image Width*/
    width: 25vw;
    border: 0;     /*For IE*/
}
#main {vertical-align: middle;display: table-cell;}
#progress {
    width: 45%;     /*Changes Percentage of Bar Total Width*/
    width: 45vw;
    border-radius: 10px;     /*Roundness of Bar*/
    background-color: #a8a8a8;     /*Background Colour of Bar*/
    margin: 0 auto;     /*Center Object*/
    padding: 7px 5px;
    /*border: 5px solid #a8a8a8; - Border Colour of Bar*/
}
#fill {
    padding: 2px 0;
    background-color: #00b98b;     /*Fill of Bar*/
    width: 85%;     /*Bar Percent, Can be Customized down Below*/
    border-radius: 25px;     /*Bar Roundness*/
    -webkit-animation: proanimate 2s;
    animation: proanimate 2s;
}
#barpercent h3 {
    color: white;     /*Bar Percentage Text Colour*/
    margin: 0;
    padding: 0;
    opacity: 0;
    -webkit-animation: fadeinelement 3s forwards;
    animation: fadeinelement 3s forwards;
}
/*Fades in Page*/
@keyframes fadeinelement {from {opacity: 0;} to {opacity: 1;}}
@-webkit-keyframes fadeinelement {from {opacity: 0;}to {opacity: 1;}}
/* Animates Bar Moving on Page Load*/
@keyframes proanimate {from {width: 0%;}}
@-webkit-keyframes proanimate {from {width: 0%;}}
/*Responsive*/
@media screen and (max-width:600px) {
    img {width: 80%;width: 60vw;}
    h1 {font-size: 1.3em;}
    h2 {margin: 1.1em;font-size: 1.1em;}
    #progress {width: 80%;}     /*Changes Percentage of Bar Width*/
}

</style>


<!-- Source https://github.com/KomeCafe/kami/blob/master/Templates/ComingSoonYC.html -->
<div id="main">
    <img src="./logo-a-bg.png" alt="Logo Kome">
    <h1>Wodbeng</h1>
    <h3> We export raw cashew nuts, among others</h3>
    <h2>Our website is currently under construction.</h2>
    <div id="progress">
        <div id="fill">
            <div id="barpercent">
                <h3>85%</h3>
            </div>
        </div>
    </div>
</div>