"use strict";

/*
Create class Shape with 3 properties - left, top and color, 
add method render() which will return empty string.
Create a constructor which will accept the left, top, and color and save in class properties

Create 2 normal classes Circle and Square.
Circle class 
Add radius property to the Circle class.
Create a constructor (with 4 arguments: left, top, color, radius) which must call the parent class constructor
Square class
Add width property to Square class.
Add constructor to Square class also with left, top, color adn width arguments
It must call the parent constructor just like you did for Circle.

Both classes must extend the Shape class and override a render() method which must return HTML string.
HTML string must be a div with corresponding, left and top coordinates, color and radius (for Circle class)
or width (for Square class).

Create Board class with 3 properties: color, width and height and 2 methods: addShape(shape)
which will accept a Shape instance as an argument and add it inside an internal array (You can add this
internal array in Board class). Create render() method on Board class, which will iterate over added 
shapes and render them

Also create a constructor for Board class which will accept color, width and height as argument and 
save in class properties, width, and height argument can be optional with default value 500 and 300
respectively

if you did everything correct and execute the following code you shou;d see the following  picture in
your browser

*/

// const board = new Board("cyan"); // parameter background color
// board.addShape(new Circle(100, 100, "blue", 50));
// board.addShape(new Square(200, 200, "red", 100));
// board.render();

class Shape {
    constructor(left, top, color) {
        this.left = left;
        this.top = top;
        this.color = color;
    }

    render() {
        return "";
    }
}

class Circle extends Shape {
    constructor(left, top, color, radius) {
        super(left, top, color);
        this.radius = radius;
    }

    render() {
        return `<div style="position:absolute; left:${this.left}px;top:${this.top}px; background-color:${
            this.color
        }; width: ${this.radius * 2}px; height: ${this.radius * 2}px; border-radius: 50%;"></div>`;
    }
}

class Square extends Shape {
    constructor(left, top, color, width) {
        super(left, top, color);
        this.width = width;
    }
    render() {
        return `<div style="position:absolute; left:${this.left}px;top:${this.top}px; background-color:${this.color}; width: ${this.width}px; height: ${this.width}px;"></div>`;
    }
}

class Board {
    constructor(color, width = 500, height = 300) {
        this.color = color;
        this.width = width;
        this.height = height;
        this.shapes = [];
    }

    addShape(shape) {
        this.shapes.push(shape);
    }
    render() {
        let content = this.shapes.map((shape) => shape.render()).join("\n");
        content = `<div style="position: relative; width: ${this.width}px; height: ${this.height}px; background-color: ${this.color};"> 
          ${content}
        </div>
        `;
        document.body.innerHTML = content;
    }
}

const board = new Board("cyan"); // parameter background color
board.addShape(new Circle(100, 100, "blue", 50));
board.addShape(new Square(200, 200, "red", 100));
board.render();
