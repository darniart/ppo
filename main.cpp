#include <iostream>
#include <cstdlib>
#include <string>
#include <sstream>
#include <vector>

using namespace std;

#define STUDENTS_COUNT 10

class Student {
	public:
		string studentNo;
		string studentName;
		string studentSurname;
		string studentStatus;
			
		void setStudentNo(string studentNo) {
			this->studentNo = studentNo;
		}
		
		string getStudentNo() {
			return this->studentNo;
		}
		
		void setStudentName(string studentName) {
			this->studentName = studentName;
		}
		
		string getStudentName() {
			return this->studentName;
		}
		
		void setStudentSurname(string studentSurname) {
			this->studentSurname = studentSurname;
		}
		
		string getStudentSurname() {
			return this->studentSurname;
		}
		
		
		void setStudentStatus(string studentStatus) {
			this->studentStatus = studentStatus;
		}
		
		string getStudentStatus() {
			return this->studentStatus;
		}
		
		
};

string getRandomStudentNumber() {
	ostringstream ss;
	int randomNumber = rand() % 2000 + 37000;
	
	ss << randomNumber;
	
	return ss.str();
}

string getRandomStudentName() {
	string name[3] = {"Jan", "Maciek", "Andrzej"};
	int losuj = rand() % 3;
	
	string randomStudentName = name[losuj];
	
	return randomStudentName;

}

string getRandomStudentSurname(){
	string surname[3] = {"Grzyb", "Podgrzyb", "Nadgrzyb"};
	int losuj = rand() % 3;
	
	string randomStudentSurname = surname[losuj];
	
	return randomStudentSurname;
}

string getrandomStudentStatus(){
	string status[2] = {"1", "0"};
	int losuj = rand() % 2;
	
	string randomStudentStatus = status[losuj];
	
	return randomStudentStatus;
}
int main() {
	vector<Student> students;
	
	for(int i = 0; i < STUDENTS_COUNT; i++) {
		Student student;
		
		student.setStudentNo(getRandomStudentNumber());
		student.setStudentName(getRandomStudentName());
		student.setStudentSurname(getRandomStudentSurname());
		student.setStudentStatus(getrandomStudentStatus());
		
		students.push_back(student);
	}
	
	
	cout  << "Students group have been filled." << endl << endl;
	
	
	
	for(int i = 0; i < students.size(); i++) {
		Student student = students.at(i);
		
		cout << student.getStudentNo()<<" " << student.getStudentName()<< " " << student.getStudentSurname()<< " " << student.getStudentStatus() << endl;
	}
	

	

	
	
	
	return 0;
}


