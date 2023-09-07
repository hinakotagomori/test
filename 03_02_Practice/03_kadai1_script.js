document.write("問1"+"<br>");
for(var star1=1;star1<=5;star1++){
    document.write("★");
}

document.write("<br>");

document.write("<br>");


document.write("問2"+"<br>");
for(var star2=1;star2<=2;star2++){
    for(var star3=1;star3<=3;star3++){
        document.write("★");
    } 
    document.write("<br>");
}

document.write("<br>");


document.write("問3"+"<br>");
for(var star4=1;star4<=2;star4++){
    for(var star5=1;star5<=5;star5++){
        document.write("☆");
    }
document.write("<br>");
}

document.write("<br>");


document.write("問4"+"<br>");
for(var star6=1;star6<=4;star6++){
    for(var star7=1;star7<=5;star7++){
        document.write("★");
    }
document.write("<br>");
}

document.write("<br>");


document.write("問5"+"<br>");
for(var star8=1;star8<=4;star8++){
    for(var star9=1;star9<=3;star9++){
        document.write("★");
    }
document.write("<br>");
}

document.write("<br>");


document.write("問6"+"<br>");
for(var no1=0;no1<3;no1++){
    for(var no2=0;no2<3;no2++){
        if (no2%2!=1){
            document.write("★");
        } else {
            document.write("☆");
        }
    }
    document.write("<br>");
}

document.write("<br>");


document.write("問7"+"<br>");
for(var no3=0;no3<4;no3++){
    for(var no4=0;no4<5;no4++){
        if(no4%2==0){
            document.write("★");}
        else{
            document.write("☆");}
        }document.write("<br>");
}

document.write("<br>");


document.write("問8"+"<br>");
for(var i=1;i<=5;i++){
    for(var j=1;j<=i;j++){
        document.write("★");
    }
    document.write("<br>");
}

