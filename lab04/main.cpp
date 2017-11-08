#include <iostream>
#include <conio.h>
#include <string>
#include <stdlib.h>
//Damian Buksowicz
using namespace std;
int ilosc = 1;
struct studenci
{
	string imie;
	string nazwisko;
	private long long pesel;
	long long indeks;
	string adres;
	int rok;
	} baza [2];
	
	void dodaj()
{
    for( int i = 0; i < ilosc; i++ )
    {
        cout << "Podaj imiê " << i + 1 << "-ego studenta: ";
        cin >> baza[ i ].imie;
        cout << "Podaj nazwisko " << i + 1 << "-ego studenta: ";
        cin >> baza[ i ].nazwisko;
        cout << "Podaj PESEL " << i + 1 << "-ego studenta: ";
        cin >> baza[ i ].pesel;
        cout << "Podaj nr indeksu " << i + 1 << "-ego studenta: ";
        cin >> baza[ i ].indeks;
        cout << "Podaj adres " << i + 1 << "-ego studenta: ";
        cin >> baza[ i ].adres;
        cout << "Podaj rok " << i + 1 << "-ego studenta: ";
        cin >> baza[ i ].rok;
        
    }
}

void wyswietl()
{
    for( int i = 0; i < ilosc; i++ )
    {
    	cout << "NR indeksu; PESEL; Nazwisko , Imiê; Rok ; Adres\n";
        cout << baza[ i ].indeks << "; ";
        cout << baza[ i ].pesel << "; ";
        cout << baza[ i ].nazwisko << "; ";
        cout << baza[ i ].imie << "; ";
        cout << baza[ i ].rok << "; ";
        cout << "zamieszka³y: " << baza[ i ].adres << endl;
    }
}

public 
	void setPesel(string pesel){
		if(){
			this -> pesel = pesel;
		}
	}


int main()
{
	system("chcp 1250"); 
	system("CLS");
	cout << "Program na zaliczenie";
	
	while (1)
	{
				
        cout << "\n\n[1] Dodaj studenta \n[2] Lista studentów \n[3] Zakoñcz" << endl;
        int choice;
        cout << "\nTwoj wybor to : ";
        cin >> choice;
		
		if(choice == 1)
	    {
	        dodaj();
	    }

 		if(choice == 2)
	    {
	        wyswietl();
	    }
	    
		if(choice == 3)
	    {
	        exit( 0 );
	    }
	}

	system( "PAUSE" );
    return 0;
}
