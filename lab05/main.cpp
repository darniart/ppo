#include <iostream>
#include <stdlib.h>
#include <time.h>
#include <vector>
#include <math.h>

using namespace std;

class Point {
	public:
		float x;
		float y;
		
		Point();
		
		Point(float x, float y) {
			this->x = x;
			this->y = y;
		}
		
		void move(float x, float y) {
			this->x += x;
			this->y += y;
		}
};

class Figure {
	public:
		vector<Point> corners;
		
		void printCornersCoordinates() {
			for(int i = 0; i < corners.size(); i++) {
				Point corner = corners.at(i);
				
				cout << "[" << corner.x << ", " << corner.y << "]" << endl;
			}
		}
};


class Triangle : public Figure {
	public:		
		Triangle(Point lowerLeftCorner, float width) {
			Point lowerRightCorner = lowerLeftCorner;
			lowerRightCorner.move(width, 0);
			
			Point upperCorner = lowerLeftCorner;
			upperCorner.move(width / 2, width * sqrt(3) / 2);
			
			this->corners.push_back(lowerLeftCorner);
			this->corners.push_back(lowerRightCorner);
			this->corners.push_back(upperCorner);
		}
};

class Rectangle : public Figure {
	public:		
		Rectangle(Point lowerLeftCorner, float height, float width) {
			Point upperLeftCorner = lowerLeftCorner;
			upperLeftCorner.move(0, height);
			
			Point upperRightCorner = lowerLeftCorner;
			upperRightCorner.move(width, height);
			
			Point lowerRightCorner = lowerLeftCorner;
			lowerRightCorner.move(width, 0);
			
			this->corners.push_back(lowerLeftCorner);
			this->corners.push_back(upperLeftCorner);
			this->corners.push_back(upperRightCorner);
			this->corners.push_back(lowerRightCorner);
		}
};


class Square : public Rectangle {
	public:
		Square(Point lowerLeftCorner, float width) : Rectangle(lowerLeftCorner, width, width) {}
};


int main() {
	srand(time(NULL));
	
	vector<Figure> figures;
	
	Triangle t = Triangle(Point(0, 0), 3);
	cout << "Triangle: " << endl;
	t.printCornersCoordinates();
	
	Rectangle r = Rectangle(Point(0, 0), 3, 5);
	cout << endl << "Rectangle: " << endl;
	r.printCornersCoordinates();
	
	Square s = Square(Point(0, 0), 3);
	cout << endl << "Square: " << endl;
	s.printCornersCoordinates();
	
	return 0;
}

