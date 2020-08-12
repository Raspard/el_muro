var c = 40;
var pin = [];
var speed = 60;
var time = 0;
var timestep = 0.04;
var drawing = false;

function setup() {
  createCanvas(windowWidth, windowHeight);
  for (var i = 0; i < c; i++) {
    pin[i] = new Pin(map(i, 0, c, 0, TWO_PI));
  }
  smooth();
  background(255);
}
function draw() {
  
  if (drawing) {
    time += timestep;

    for (var i = 0; i < c; i++) {
      pin[i].time = time;
      pin[i].update();
    }

    beginShape();
    curveVertex(pin[c - 2].x, pin[c - 2].y);
    curveVertex(pin[c - 1].x, pin[c - 1].y);
    for (var i = 0; i < c; i++) {
      curveVertex(pin[i].x, pin[i].y);
    }
    curveVertex(pin[0].x, pin[0].y);
    endShape();

    if (time * speed > 180) {
      console.log(time)
      drawing = false;
    }
  } 
}


// Pin Point 
function Pin(a) {
  this.x;               // x position
  this.y;               // y position
  this.theta = a;       // angel of point
  
  this.magnitude = 0.0; // magnitude, max distance from center
  this.omega = 0.1;     // noise 
  this.time = 0.1;      // current position in time
  this.duration = 100 / timestep;

  this.update = function () {
    
    this.omega = noise(this.theta, this.time + 1) / 2;
    this.magnitude = noise(this.theta, this.time) * (sin(radians(this.time * speed)) * 200);
    this.x = round(this.magnitude * cos(this.theta + this.omega) + mouseX);
    this.y = round(this.magnitude * sin(this.theta + this.omega) + mouseY);
    
  }
}

function mousePressed() {
  background(255);
  drawing = true;
  time = 0;
}

function keyPressed() {
  background(255);
}