//    function myFunction() {
//        var str = "A";
//        document.body.;
//    }
debugger;
"use strict";

class Rectangle{
    constructor(height,width){
        this.height = height;
        this.width = width;
    }

}
// var rect = new Rectangle(10,20);

for(var i=0;i<100;i++) {
    var para = document.createElement("div");
    para.className = "section";
    var p2 = document.createElement("div");
    p2.className = "baloon";
    para.appendChild(p2);
    var node = document.createTextNode("Number of repetition: "+i);
    p2.appendChild(node);
    document.getElementById("demo").appendChild(para);
}