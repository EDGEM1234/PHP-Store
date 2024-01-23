#include <stdio.h> 
#include <unistd.h> 
#include <sys/types.h> 
 
int main(int argc, char const *argv[]) 
{ 
  
 int ret = fork(); 
 int id = getpid(); 
 printf("\nMy identifier is ID = [%d]\n", id); 
 while(1); 
  
 return 0; 
} 