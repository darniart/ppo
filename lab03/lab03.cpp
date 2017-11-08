#include <iostream>
#include <stdlib.h>
#include <time.h>

using namespace std;

class Point {
	public:
		int x;
		int y;
		
		Point() {
			cout << "Point has been created." << endl;
		}
		
		Point(int x, int y) {
			this->x = x;
			this->y = y;
			cout << "Point [" << this->x << ", " << this->y << "] has been created." << endl;
		}
		
		~Point() {
			cout << "Point [" << this->x << ", " << this->y << "] has been deleted." << endl;
		}
		
		void movePoint(int xAxisShift, int yAxisShift) {
			this->x += xAxisShift;
			this->y += yAxisShift;
		}
};



class Square {
	public:
		Point center;
		int bok;
		
		Square(Point center, int bok) {
			this->center = center;
			this->bok = bok;
		}
		
		void getCoordinates() {
			cout << "x1: " << this->center.x + bok <<  " y1: " << this->center.y + bok << endl;
			cout << "x2: " << this->center.x + bok <<  " y2: " << this->center.y - bok << endl;
			cout << "x3: " << this->center.x - bok <<  " y3: " << this->center.y - bok << endl;
			cout << "x4: " << this->center.x - bok <<  " y4: " << this->center.y + bok << endl;
		}
};

int main() {
	srand(time(NULL));
	
	int inputX = 0, inputY = 0;
	int inputbok = 5;
	
	Point p = Point(inputX, inputY);
	Square c = Square(p, inputbok);
	
	c.center.movePoint(rand() % 10, rand() % 10);
	c.getCoordinates();
	
	return 0;
}

