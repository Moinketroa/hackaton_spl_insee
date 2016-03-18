#include <sstream>
#include <iostream>
#include <fstream>
#include <string>
#include <cstdio>

int main(int argc, char** argv){
	int nline = 5000;
	std::ifstream in;
	in.open( argv[1], std::ifstream::in );
	std::ofstream out;
	std::string line;
	int filenum = 0;
	for (int i=0; std::getline(in, line); i++){
		if (i%nline == 0){
			out.close();
			filenum ++;
			char name[25];
			sprintf(name, "part%d.sql", filenum);
			out.open( name );
		}
		out << line << "\n";
	}
}
