#include<stdio.h>



main(){

    char mot[100];
    scanf("%s",&mot);
    int i,j,tmp=11;
    for(i=0;i<10;i++){
        for(j=i+1;j<10;j++){
            if(mot[i]==mot[j]){
                if(j<tmp){
                    tmp = j;
                }
            }
    }
    }

    printf("%c",mot[tmp]);
}
