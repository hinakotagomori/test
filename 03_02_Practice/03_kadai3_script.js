document.write("問1<br>");
function menseki(hankei){
    return "円の面積は"+hankei*hankei*3.14+"㎠です。<br>";
}

document.write(menseki(5));
document.write(menseki(7));
document.write(menseki(10));

document.write("<br>");

document.write("問2"+"<br>");
function ryoukin(moji,otona,kodomo){
    return moji+"グループは"+(otona*500+kodomo*200)+"円です。<br>";
}

document.write(ryoukin("A",2,4));
document.write(ryoukin("B",1,5));
document.write(ryoukin("C",3,7));
