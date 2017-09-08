var x = 50;
var y = 50;
var speed = 3;


function setup() {

var canvas = createCanvas(100,100);

canvas.parent("canvas1");

}


function draw() {
    background(20,130,210);
    fill(160,10,20);
    ellipse(x,y,20,20);

  
}


function keyPressed() {
    //De bal beweegt 
    if (keyCode == UP_ARROW) {
        y -= speed;
        
    } else if (keyCode == DOWN_ARROW) {
        y += speed;
        
    } else if (keyCode == RIGHT_ARROW) {
        x += speed;

    } else if (keyCode == LEFT_ARROW) {
        x -= speed;

    }


}
