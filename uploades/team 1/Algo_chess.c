#include<stdio.h>

best(int size,int tab[size][size],int i,int j,int* tmpx,int* tmpy){

    int min;

    min = size*size;

    tab[i][j] = -1;

        if(i+2<=size && j-1>=0 && tab[i+2][j-1]<min && tab[i+2][j-1]>0 ) {min = tab[i+2][j-1]; *tmpx=i+2;*tmpy=j-1;}
        if(i-2>=0 && j-1>=0 && tab[i-2][j-1]<min && tab[i-2][j-1]>0 ) {min = tab[i-2][j-1]; *tmpx=i-2;*tmpy=j-1;}
        if(i-1>=0 && j-2>=0 &&tab[i-1][j-2]<min && tab[i-1][j-2]>0 ) {min = tab[i-1][j-2];*tmpx=i-1;*tmpy=j-2;}
        if(i+1<=size && j-2>=0 && tab[i+1][j-2]<min && tab[i+1][j-2]>0 ) {min = tab[i+1][j-2];*tmpx=i+1;*tmpy=j-2;}
        if(i+2<=size && j+1<=size && tab[i+2][j+1]<min && tab[i+2][j+1]>0 ) {min = tab[i+2][j+1];*tmpx=i+2;*tmpy=j+1;}
        if(i-2>=0 && j+1<=size && tab[i-2][j+1]<min && tab[i-2][j+1]>0 ) {min = tab[i-2][j+1];*tmpx=i-2;*tmpy=j+1;}
        if(i-1>=0 && j+2<=size && tab[i-1][j+2]<min && tab[i-1][j+2]>0 ) {min = tab[i-1][j+2];*tmpx=i-1;*tmpy=j+2;}
        if(i+1<=size && j+2<=size && tab[i+1][j+2]<min && tab[i+1][j+2]>0 ) {min = tab[i+1][j+2];*tmpx=i+1;*tmpy=j+2;}



    tab[*tmpx][*tmpy]=-1;

    if(*tmpx == i && *tmpy == j){
        return 0;
    }
  //  printf("\n");
  // printf("tab[%d][%d] : %d",*tmpx,*tmpy,min);
    return 1;
}

/*paint(int size, int tab[size][size]){
    int i,j;
    printf("\n");printf("\n");printf("\n");
    for(i=0;i<size;i++){
        for(j=0;j<size;j++){
            if(tab[i][j]<10) printf(" ");
            if(tab[i][j]<100) printf(" ");
            if(tab[i][j]<1000) printf(" ");
            printf("%d ",tab[i][j]);
        }
        printf("\n");
    }
    printf("\n");
 } */


main(){
    int size=60;
    int tab[size][size];
    int i,j,move=1,trick=1,we_are=2,tmp;
    i = size - size/2 - 1;
    j = i;
    tab[i][j] = 1;
    int chi=i,chj=j;

        while(j<size && i<size){
            tmp = move;
            while(tmp>0){
                j=j + trick;
                if(j>size-1 || i>size-1) break;
                tab[i][j] = we_are;
                we_are++;
                tmp--;
            }
            tmp = move;
            while(tmp>0){
                i = i - trick;
                if(j>size-1 || i>size-1) break;
                tab[i][j] = we_are;
                we_are++;
                tmp--;
            }
            trick = trick*(-1);
            move++;
           // printf("%d  ",move);
        }
        //paint(size,tab);

        //i = size - size/2 -1;
        //j = i;
        int position;
        while(best(size,tab,chi,chj,&chi,&chj)){
        }

        size=60;

        move=1;trick=1;we_are=2;tmp;
        i = size - size/2 - 1;
        j = i;
        tab[i][j] = 1;

        while(j<size && i<size){
            tmp = move;
            while(tmp>0){
                j=j + trick;
                if(j>size-1 || i>size-1) break;
                tab[i][j] = we_are;
                we_are++;
                tmp--;
            }
            tmp = move;
            while(tmp>0){
                i = i - trick;
                if(j>size-1 || i>size-1) break;
                tab[i][j] = we_are;
                we_are++;
                tmp--;
            }
            trick = trick*(-1);
            move++;
           // printf("%d  ",move);
        }

        printf("%d",tab[chi][chj]);



}
